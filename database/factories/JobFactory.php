<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = Job::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        echo "Seeding Jobs Started" . PHP_EOL;
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'no_of_positions' => $this->faker->randomNumber(),
            'application_deadline' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Job $job) {
            echo "Seeding applications Started" . PHP_EOL;
            // Create associated applicants for the job
            // $applicants = factory(Applicant::class, 5)->create([
            $applicants = Applicant::factory(5)->create([
                'job_id' => $job->id,
                'user_id' => User::factory()->create()->id, // Assuming you have a User model and a UserFactory
                'resume' => $this->faker->text,
                'cover_letter' => $this->faker->paragraph,
            ]);

            echo "Seeding Interviews Started" . PHP_EOL;
            // Create associated interviews for each applicant
            $applicants->each(function (Applicant $applicant) use ($job) {
                $interviewDate = $this->faker->dateTimeBetween('now', '+1 month');
                // $applicant->interviews()->save(factory(Interview::class)->create([
                $applicant->interview()->save(Interview::factory()->create([
                    'job_id' => $job->id,
                    'user_id' => $applicant->user_id,
                    'application_id' => $applicant->id,
                    'interviewer_id' => 2,
                    'interview_date' => $interviewDate,
                ]));
            });

            // $job->interviews()->saveMany($interviews->all());
            echo "Seeding Roles Finished" . PHP_EOL;
        });
    }
}

<?php

namespace Database\Factories;

use App\Models\Interview;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interview>
 */
class InterviewFactory extends Factory
{
    protected $model = Interview::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'interview_date' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Interview $interview) {
            // You can set other attributes or relationships here if needed
        });
    }
}

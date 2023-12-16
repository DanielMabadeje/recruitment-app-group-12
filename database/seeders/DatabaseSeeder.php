<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Job;
use Illuminate\Database\Seeder;
use Database\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(30)->create();
        Job::factory(30)->create(); // Create 30 jobs
        // Applicant::factory()->count(30)->create(); // Create 30 applicants
        // Interview::factory()->count(30)->create(); // Create 30 interviews

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

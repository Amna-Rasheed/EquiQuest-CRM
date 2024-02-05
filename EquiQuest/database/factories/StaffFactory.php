<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobRoles = ['Groom', 'Trainer', 'Riding Instructor', 'Vet', 'Feed Manager', 'Facility Maintenance'];

        return [
            'name' => $this->faker->name,
            'job_role' => $this->faker->randomElement($jobRoles),
            'job_description' => $this->faker->sentence,
            'email' => $this->faker->unique()->safeEmail,
            'schedule' => $this->generateSchedule(), // Custom function for generating schedules
        ];
    }

    private function generateSchedule()
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $startTime = $this->faker->time('H:i');
        $endTime = $this->faker->time('H:i', '18:00'); // Assuming working hours end at 6 PM

        return "{$this->faker->randomElement($days)} {$startTime}-{$endTime}";
    }
}

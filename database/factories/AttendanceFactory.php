<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => function () {
                return Employee::factory()->create()->id;
            },
            'attendance_date' => Carbon::now()->subDays($this->faker->numberBetween(1, 30))->format('Y-m-d'),
            'time_in' => $this->faker->time('H:i:s', '08:00:00'),
            'time_out' => $this->faker->time('H:i:s', '17:00:00'),
            'total_hours' => 800,
        ];
    }
}

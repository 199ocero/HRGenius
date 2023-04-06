<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\Attendance;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $department = Department::factory()->create([
            'name' => 'Engineering',
            'location' => 'Taguig City',
        ]);
        
        $jobTitle = JobTitle::factory()->create([
            'name' => 'Backend Engineer',
            'description' => 'Responsible for developing and maintaining the backend infrastructure of our software products.',
        ]);

        $employee = Employee::factory()->create([
            'department_id' => $department->id,
            'job_title_id' => $jobTitle->id,
            'first_name' => 'Jay-Are',
            'last_name' => 'Ocero',
            'middle_name' => 'Maagad',
            'suffix' => null,
            'email' => 'jocero@genius.com',
            'phone_number' => '+63 (932) 272-1987',
            'hire_date' => '2022-01-01',
            'date_of_birth' => '1990-01-01',
            'address' => 'Zone-3 Ane-i',
            'city' => 'Claveria',
            'state' => 'Misamis Oriental',
            'zip_code' => '9004',
            'country' => 'PH',
        ]);

        User::factory()->create([
            'employee_id' => $employee->id,
            'name' => $employee->first_name .' '. $employee->last_name,
            'email' => $employee->email,
            'password' => bcrypt('shutdown199')
        ]);

        Attendance::factory()->create([
            'employee_id' => $employee->id,
            'attendance_date' => Carbon::parse('2022-01-01'),
            'time_in' => '08:00:00',
            'time_out' => '17:00:00',
            'total_hours' => 800,
        ]);
        
    }
}

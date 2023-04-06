<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'attendance_date',
        'time_in',
        'time_out',
        'total_hours',
    ];

    protected $dates = [
        'attendance_date',
        'time_in',
        'time_out',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
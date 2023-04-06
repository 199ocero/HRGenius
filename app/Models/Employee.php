<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'job_title_id',
        'email',
        'phone_number',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'hire_date',
        'date_of_birth',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }
}
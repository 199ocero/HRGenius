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

    public function getFullNameAttribute()
    {
        $name = $this->first_name;

        if (!empty($this->middle_name)) {
            $name .= ' ' . substr($this->middle_name, 0, 1) . '.';
        }

        if (!empty($this->last_name)) {
            $name .= ' ' . $this->last_name;
        }

        if (!empty($this->suffix)) {
            $name .= ' ' . $this->suffix;
        }

        return $name;
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Employee extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "employees";

    protected $fillable = [
        'emp_id','emp_name','email','password','slack','joining_date','exit_date','gender','address','skills','designation_id','department_id','mobile','hourly_rate','login','email_is_notify','language','image','parent_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}

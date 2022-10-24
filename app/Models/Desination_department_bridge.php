<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desination_department_bridge extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','department_id','designation_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function designation()
    {
        return $this->belongsTo(Desination_department_bridge::class);
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
}

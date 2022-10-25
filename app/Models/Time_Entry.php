<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Entry extends Model
{
    use HasFactory;

    public function matter()
    {
        return $this->belongsTo(Matter::class);
    }
}

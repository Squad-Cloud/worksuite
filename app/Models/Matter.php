<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    use HasFactory;


    public function client()
    {
        return $this->belongsTo(Client::class, 'cleint_id','id');
    }
}

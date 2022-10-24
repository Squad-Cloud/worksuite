<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMenuAccess extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','sub_menu_id','status'
    ];

    public function submenu()
    {
        return $this->belongsTo('App\Models\SubMenu','sub_menu_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    } 
}

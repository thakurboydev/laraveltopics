<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_Register extends Authenticatable
{

    use HasFactory;
    protected $table='user_register';
    protected $fillable=[
        'email',
        'password'
    ];
}

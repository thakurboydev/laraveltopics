<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_data_without_objs extends Model
{
    use HasFactory;
    // protected $table='store_data_without_obasjs';
    protected $table = 'store_data_without_objs';
    protected $fillable=[
            'name',
            'password',
    ];
}

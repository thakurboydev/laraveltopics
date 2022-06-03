<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Soft_delete extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=[
        'name',
        'class'

    ];
    protected $dates = [ 'deleted_at' ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
    ];
    public function getemailAttribute($value)
    {
     return   rtrim($value,'@gmail.com!');

    }
    public function setnameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
        // dd($this->attributes['firstname']);
    }
    public function setemailAttribute($value)
    {
        $this->attributes['email'] = $value.rand(2,1000).'@gmail.com';
        // dd($this->attributes['firstname']);
    }

}

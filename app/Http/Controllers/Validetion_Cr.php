<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\ResorceController;
use App\Models\Student;

class Validetion_Cr extends Controller
{
    public function __construct()

    {
        $new = new  ResorceController;
         return $this->new=$new;



    }
    public function check2(user $user,Request $request)

    {
        // dd($request->all());
        $new= new Student();
        // dd($new);
        $new->name=$request->firstname.' '.$request->lastname;
        $new->email=$request->country;
        $new->password=$request->subject;
        $new->save();
        return redirect()->back()->withErrors__('form submit');
        // return p($request->all());
    //    return dd($request->all());
    }
    public function accessor_data()
    {
        $getdata=Student::find(132);
        return dd( $getdata->email);

    }
}

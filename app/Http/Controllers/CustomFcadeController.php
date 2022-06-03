<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomFcadeController extends Controller
{
    public function facade_methord1()
    {
        echo ('this is facade methord 1 <br>');

    }
    public function facade_methord2()
    {
        echo('this is facade methord 2<br>');
    }
    public function facade_methord3()
    {
        echo('this is facade methord 3');
    }
}

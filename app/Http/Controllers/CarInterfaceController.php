<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\Carinterface;

class CarInterfaceController implements Carinterface
{
public function start()
{
   echo "this the start fun...";
}
public function stop()
{
    echo "this is the stop fun..";
}
public function break()
{
    echo "this is the break ";
}
public function price()
{
 echo "this is price";
}
}

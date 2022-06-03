<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GuardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class dependencycontroller extends Controller
{
    function __construct(GuardController $guardController)
    {
        $this->guardController=$guardController;
    }
    public function depe_injection()

    {

       return $this->guardController->dependency_injec();

    }
    public function costome_dependency()

    {
        $ResorceController="";
       return  $this->guardController->dependency_injec($ResorceController);

    }
    public function sumoftwonumber()
    {
        return 12;
    }

    public function checkvalidetion(Request $request)
    {
        // $validator = validator::make($request->all(),[
        //     'footballername' => 'required',

        // ]);
        $validatedData = $request->validate([
            'footballername' => 'required',

          ]);

        return response()->json(array('msg'=> $validatedData), 200);
    }

}


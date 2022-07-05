<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Eception;
use  App\Event\Events;
use App\Models\store_data_without_objs;
use App\Jobs\check_jobs;

class UserController extends Controller
{

  public  function __construct($val)
    {
     $this->val=$val;

    }
    public function index() {
        return view("register");
    }

    // register user

    public function registerUser(Request $request) {




    }
    public function ajax_responce()
    {
        // return 'append:<input type="email" class="form-control" style="color:red" name="inputEmail4"  id="inputEmail4">';
     return view('register');
    }
    public function serviceprovider()
    {
        return "this is service provider function.$this->val";
    }



    public function event()
        {

            event(new Events('emal has send ','sheskar@gmail.com'));
        }
        public function store_without_object(request $request)
        {
            // dd();
            $requestdata=$request->all();
                $input=[];
                $input['name']=$requestdata['name'];
                $input['password']=$requestdata['password'];

            store_data_without_objs::create($input);
            return back();

        }
}

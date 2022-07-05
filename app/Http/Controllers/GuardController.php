<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User_Validetion;
// use Illuminate\Auth\Events\Validated;
use App\Models\User_Register;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\check;
use Cache;
use Exception;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use \Illuminate\Contracts\Auth\Authenticatable;

class GuardController extends Controller
{
    public   function _construct(){
         $val=10;

        $this->val=$val;
        }
    public function login_register_form()
    {
            return view('guards.login_register');
    }
    public function user_register(User_Validetion $request)
    {

        $store_user= new user_register;
        $store_user->email= $request->email;
        $store_user->password= Hash::make($request->psw);
        $store_user->save();
        return redirect()->back()->with('message','registration successfull');
    }
    //user login//

    public function login()
    {
        return view('guards.login');
    }
    public function check_password(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        // dd(Auth::guard('User_Register')->attempt($request->only('email','password')));
        // try {

        //     Auth::guard('User_Register')->attempt($request->only('email','password'));

        //   } catch (\Exception $e) {

        //       return $e->getMessage();

        // (Auth::guard('User_Register')->attempt(['email'=>$request->email,'password'=>$request->psw]));
        if (Auth::guard('User_Register')->attempt($request->only('email','password'))) {
            return "you are login!";


        }

        dd('no');

    }
    public function change_arrary_key_val()
    {

        $collection = collect(['name'=>'sohit','lastname'=>'chauhan' , 'dist'=>'saharanpur']);
        // dd(gettype( $collection));
        $collection=$collection->toArray();
        foreach ($collection as $key=>$val){

           if(array_key_exists('name',$collection)){
               $collection['dist']='dehradubn';
           }
        }
        dd($collection);

    }
    public  static function command_responce($resp)
    {
        dd($resp);
    }
    public function check_session(Request $request)
    {

        $oldname='new';
        $newname='old';
        if(DB::table('users')->where('name',$oldname)->exists()){

            $data=DB::table('users')->where('name',$oldname)->update(['name'=>$newname]);
            if($data){
                $data=DB::table('users')->where('name', $newname)->first();
                dd($data);
            }
        }else{
            echo "no recorde found"; die;
        }





        //query call back function DB
       $itemid=83;
       $this->itemid=$itemid;
        $data=DB::table('users')->where('name','shekhar')->orWhere(function($query ){

            $query->where('id',$this->itemid);

            // dd($this->itemid);
        })->get();
        dd($data);

        // left join
        $data=DB::table('users')->leftJoin('user_register','user_register.id','users.id')->first();
        dd($data);

        // joins// inner join
        $data=DB::table('users')->join('user_register','users.id','user_register.id')->select('users.id','users.name','user_register.email')->get();
        dd($data);


        //group by//
        $user=user::orderBy('id','desc')->pluck('id')->skip(10)->take(5);
        echo "<pre>";
        print_r($user);die;
        foreach($user as $key=>$val){

            print_r($key." ".$val."<br>");


        }
        die;
        echo "<pre>";

        try{

            print_r( DB::table('users')
            ->whereidAndname(100,'Dianna Stanton')->first());
        }catch(\Exception $e){
            return  $e->getMessage();
        }

              echo "<pre>";
        // Cookie::forever('laravel', 'this is cockies');
        // Cache::put('name', 'sohit');
        // dd(Cache::get('name'));

    //    dd(Auth::guard('User_Register')->user());
    }


    /////////////////////////////dependency injection
    public function dependency_injec()
    {
        dd(11);
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResorceController;
use App\Http\Controllers\Validetion_Cr;
use App\Jobs\check_jobs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use App\Http\Controllers\CarInterfaceController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CustomFcadeController;
use Illuminate\Support\Facades\CustomeFacade;
use App\Http\Controllers\GuardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dependencycontroller;
use App\Http\Controllers\check;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\CustomFacadeController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
// use couCustomeFacade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('practice','practice');

Route::post("register-user", [UserController::class, "registerUser"]);

//------------- recorse  curd ------------------//
route::view('register_form','crud.register');
route::get('ajax_responce', [UserController::class, "ajax_responce"]);
Route::group(['prefix' => 'manage'], function () {
    Route::get("/", [UserController::class, "index"]);
    Route::get('check_prefix',function(){
        dd('THIS IS PREFIX');
    });
});


Route::resource("crud", ResorceController::class);
// route::get('crud.index', ResorceController::class);
Route::post("delete_destroy",[ResorceController::class,'delete_destroy']);
route::view('test','test');
/// crud using resorce route //



///////////////////////////////////////////////////////////////////////////
// accessor and mutators//
route::view('laravel_validetion','laravel_validetion');
Route::post("laravel_validetion",[Validetion_Cr::class,'check2']);
Route::get("show_accessor_data",[Validetion_Cr::class,'accessor_data']);
// accessor and mutators//

//////////////////////////////////////////////////////////////////////////////////


// custome facade//
// route::get('custome_facade',function(){
//      CustomeFacade::facade_methord1();
//      CustomeFacade::facade_methord2();
//      CustomeFacade::facade_methord3();
// });
route::get('CustomFacadeController',function(){
    CustomFacadeController::CustomFacadeController();
});
// custome facade//

//////////////////////////////////////////////////////////////////////////////////

// custome facade & serversaide validetioon //
route::get('login_register_form',[GuardController::class,'login_register_form']);
route::post('user_register',[GuardController::class,'user_register']);
//login//
route::get('login',[GuardController::class,'login']);
route::post('check_password',[GuardController::class,'check_password']);
route::get('check_session',[GuardController::class,'check_session']);
//multi guard & serversaide validetioon //


route::get('send_Email',function(){
//    dispatch(new  App\Jobs\check_jobs() )->delay(now()->addSecond(value(3)));
     check_jobs::dispatch();
    //  check_jobs::dispatch()->onQueue('processing');
    // $newjob= new check_jobs();
    // dispatch($newjob);
    // Queue::push(new check_jobs());

   echo "<br> email send ";

});
App::bind('Carinterface', 'CarInterfaceControlle');

/// use interface  ///
route::get('check_interface',function(){
    $check= new CarInterfaceController;
    $check->start();
    $check->stop();
    $check->break();
});
///  interface    ////




////////// change_arrary_key_val
route::get('change_arrary_key_val',[GuardController::class,'change_arrary_key_val']);





// dependency injection
route::get('depe_injection',[dependencycontroller::class,'depe_injection']);
route::get('costome_dependency',[dependencycontroller::class,'costome_dependency']);




// ajax validetion //
Route::view('ajax_validet','ajax_validetion.ajax_validetion');
route::post('checkvalidetion',[dependencycontroller::class,'checkvalidetion']);

/// this is service contener //********************* */
route::get('check_cache',function(CustomFcadeController $CustomFcadeController ){

    // Cache::put('key', 'valasdue', 10000);
    // session()->put('name','sadjhfkjsdhf');
    // return session()->get('name');
    // Cache::forget('key');
//    return Config::set('database.default', 'sqlite');
    // return Cache::get('key');
    Dump($CustomFcadeController->facade_methord1());
    dd(App());
});


// this is service provider ***************
// use  App\Providers\UserService;
route::get('service_provider',function(UserController $UserController ){
    dd(App::environment('local'));
    Dump(App());
    dd($UserController->serviceprovider());

});

//events*********************
route::get('service_provider',function(UserController $UserController ){

    dd($UserController->event());

});


Route::get('/storesession',function(){
// session()->put('user',true);
if (session()->has('message')){

    echo session()->get('message');
}


session()->put('user',false);
return session()->has('user');
});

route::get('workingmdd',function(){
    dd('yes');
})->middleware('HasSessionData');

route::view('sotedata','storedata_without_object');
route::post('store_without_object',[UserController::class,'store_without_object']);

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

///////////////collaction methord ???????????
route::get('collaction_method',function(){
    $arr=['a','b','c'];



});


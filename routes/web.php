<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
   // echo "welocme";
});


Route::get('/user', [UserController::class, 'index']);
Route::post('/store_user' , [UserController::class, 'store']);


Route::get('/hello',function(){
    echo "hello";
});


Route::resource('photos', [PhotoController::class]);


Route::match(['get', 'post'], '/welcome', function () {
    // ...
    echo "welcome";
});

Route::any('/any/{name?}', function($name=null) {
    // ...
       echo "welcome anyone ".$name ;
})->where('name', '[A-Za-z]+');


Route::redirect('/here', '/any');

Route::view('/welcome', 'welcome');
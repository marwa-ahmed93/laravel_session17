<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
//    echo "welocme ".$id ;
});

Route::middleware([TestRole::class])->group(function(){

Route::controller(UserController::class)->group(function(){
Route::get('/user', ['index']);
Route::post('/store_user' , ['store'])->name('store');
});



Route::get('/hello',function(){
    echo "hello";
});

});

Route::get('show',[ProvisionServer::class]);
Route::get('showPosts' , [PostController::class , 'show']);




// Route::resource('photos', [PhotoController::class]);


// Route::match(['get', 'post'], '/welcome', function () {
//     // ...
//     echo "welcome";
// });

// Route::any('/any/{name?}', function($name=null) {
//     // ...
//        echo "welcome anyone ".$name ;
// })->where('name', '[A-Za-z]+');


// Route::redirect('/here', '/any');

// Route::view('/welcome', 'welcome');
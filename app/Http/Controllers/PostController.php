<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //
       public function show(){
    echo "data created successfully";
    return View('posts.show');
   }
}

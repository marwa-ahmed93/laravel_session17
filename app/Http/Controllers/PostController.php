<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //
       public function show(){
          $posts =   Post::paginate(10);

// $posts = DB::table('')->get
   //  echo "data created successfully";
    return View('posts.show',compact('posts'));
   }

public function index($id){
  $post =  Post::find($id);
//   dd($post);
return view('posts.user',compact('post'));

}

}

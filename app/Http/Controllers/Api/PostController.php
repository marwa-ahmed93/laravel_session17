<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);
        return response()->json([
            'message' => 'successfully',
            'data'=> DriverResource::collection($posts)
        ],200);
    }
}

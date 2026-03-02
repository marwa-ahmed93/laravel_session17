<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        // echo "welcome";
        return view('create');
    }

    public function store(Request $request){
        // echo "welcom";
     

            $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);
    //    dd($validated);

User::create([
'name'=>$validated['name'] ,
'email'=>$validated['email'] ,
'password'=>$validated['password'] 

]);
return redirect('/hello');

    }
}

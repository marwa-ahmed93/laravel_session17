<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CarController extends Controller
{
    public function create(){
        return View('car.createCars');
    }
    public function store(Request $request){
        
   $validated = $request->validate([
        'name' => 'required',
        'color' => 'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpg,bmp,png',
    ]);

    // dd($validated);
// Validateor::make($request->all,[

// ]);
    // dd($request->all());
$img = Storage::put('avatars',$validated['image']);
  $cars= Car::insert([
    'name'=>$validated['name'],
    'color'=>$validated['color'],
    'price'=>$validated['price'],
    'image'=>$img 
]);
// dd($cars);

return redirect('showCars');
    }

    public function show(){
     $cars = Car::withTrashed()->get();
        return View('car.show',compact('cars'));
    }
    public function delete($id){
       $car =  Car::find($id)->destroy($id);
       return redirect('showCars');

    }

    public function restoreCar($id){
$car = Car::withTrashed()->find($id);
$car->restore();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function showCars(Request $request)
    {
    	$cars = Car::all();

    	//$cars = DB::table('cars')->get();

    	return view('cars', compact('cars'), [
    		'title' => 'Favorite Cars'
    	]);
    }

    public function showByColor(Request $request, $color)
    {
    	$cars = Car::where('color', '=', $color)->get();

    	//$cars = DB::table('cars')->where('color', '=', $color)->get();

    	return view('cars', compact('cars'), [
    		'title' => $color . ' cars'
    	]);
    }

    public function showForm(Request $request)
    {
    	return view('add-car', [
    		'title' => 'Add New Car Form'
    	]);
    }

    public function addCar(Request $request)
    {
    	$car = new Car;
    	$car->name = $request->name;
    	$car->color = $request->color;
    	$car->manufacturer = $request->manufacturer;
    	$car->year_manufacture = $request->year_manufacture;
    	$car->save();

    	return redirect('/cars');
    }
}
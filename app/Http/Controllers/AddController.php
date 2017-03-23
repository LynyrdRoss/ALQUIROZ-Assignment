<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function showForm(Request $request)
    {
    	return view('add-form', [
    		'title' => 'Add two numbers'
    	]);
    }

    public function addNumber(Request $request)
    {
    	$x = 0;
    	$y = 0;

    	$x = $request->x;
    	$y = $request->y;
    	$sum = $x + $y;

    	return 'The sum of ' . $x . ' and ' . $y . ' is ' . $sum .'.';
    }
}
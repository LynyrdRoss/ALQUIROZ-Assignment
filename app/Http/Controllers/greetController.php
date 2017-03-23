<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greetController extends Controller
{
    public function mentionName(Request $request)
    {
    	$name = '';
    	return "Hi there " . $request->name;
    }

    public function showForm(Request $request)
    {
    	return view('greet-form', [
    		'head' => 'Welcome to my page'
    	]);
    }

    public function greet(Request $request)
    {
    	$name = $request->name;
    	return 'Hello ' . $name;
    }
}

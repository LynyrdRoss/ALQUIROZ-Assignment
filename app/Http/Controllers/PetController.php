<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function showPets(Request $request)
    {
    	$pets = Pet::all();

    	return view('pets', compact('pets'), [
    		'title' => 'Check out my Pets!'
    	]);
    }

    public function showByType(Request $request, $type)
    {
    	$pets = Pet::where('type', '=', $type)->get();

    	return view('pets', compact('pets'));
    }

    public function showForm(Request $request)
    {
    	return view('add-pet', [
    		'title' => 'Add New Pet Form'
    	]);
    }

    public function addPet(Request $request)
    {
    	$pet = new Pet;
    	$pet->name = $request->name;
    	$pet->type = $request->type;
    	$pet->save();

    	return redirect('/pets');
    }
}
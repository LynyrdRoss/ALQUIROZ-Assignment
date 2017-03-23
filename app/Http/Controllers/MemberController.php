<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function showMembers(Request $request)
    {
    	$members = Member::all();

    	return view('members', compact('members'), [
    		'title' => 'Welcome to LVCC Members List'
    	]);
    }

    public function addMemberForm(Request $request)
    {
    	return view('add-member', [
    		'title' => 'Add New Member Form'
    	]);
    }

    public function addMember(Request $request)
    {
    	$member = new Member;
    	$member->first_name = $request->first_name;
    	$member->last_name = $request->last_name;
    	$member->email = $request->email;
    	$member->age = $request->age;
    	$member->save();

    	return redirect('/members');
    }
}

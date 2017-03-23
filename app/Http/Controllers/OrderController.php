<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;

class OrderController extends Controller
{
	public function showOrders(Request $request)
	{
		/*
		use DB;
		$query = DB::table('users')
				->join('contacts', 'users.id', '=', 'contacts.user_id')
				->join('orders', 'users.id', '=', 'orders.user_id')
				->select('users.*', 'contacts.phone', 'orders.price', 'orders.item')
				->orderby('users.id')
				->limit(30)
				->get();
		*/

		$query = User::
				join('contacts', 'users.id', '=', 'contacts.user_id')
				->join('orders', 'users.id', '=', 'orders.user_id')
				->select('users.*', 'contacts.phone', 'orders.price', 'orders.item')
				->orderby('users.id')
				->limit(15)
				->get();

		return view('orders', compact('query'), [
			'title' => 'List of Orders'
		]);
	}

    public function showOrderByUserId(Request $request, $user_id)
    {
    	$orders = User::find($user_id)->orders()->get();

    	//Working: $orders = User::find($user_id)->get();

    	//$orders = DB::table('user')->find($user_id)->orders()->get();

    	dd($orders);

    	return view('orders', compact('orders'));
    }
}

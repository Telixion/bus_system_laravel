<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bookings;

use Illuminate\Support\Facades\Input;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function store(Request $request){
    	$user = new bookings;
    	$user -> name = Input::get('name');
    	$user -> destination = Input::get('destination');
    	$user -> date = Input::get('date');
    	$user -> time = Input::get('time');
    	$user -> save();


    }
}

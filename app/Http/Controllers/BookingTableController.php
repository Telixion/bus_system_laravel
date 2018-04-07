<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bookings;

use Illuminate\Support\Facades\Input;

use DB;

class BookingTableController extends Controller
{
     public function bookingTable()
    {
        // return view('admin');
        $users = DB::select('select * from bookings');
		return view('bookingtable',['users'=>$users]);

    }

    public function return(){
    	return view('admin');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\schedule;

use Illuminate\Support\Facades\Input;

use DB;


class AdminController extends Controller
{
    public function admin()
    {
        // return view('admin');
        $users = DB::select('select * from schedules');
		return view('admin',['users'=>$users]);

    }

        public function store1(Request $request){
    	$user = new schedule;
    	$user -> plate = Input::get('plate');
    	$user -> destination = Input::get('destination');
    	$user -> date = Input::get('date');
    	$user -> time = Input::get('time');
    	$user -> save();

    	return  redirect('admin');


    }
}

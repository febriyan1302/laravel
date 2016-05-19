<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User_m;

class User_c extends Controller
{
    public function index(){
    	$data = User_m::paginate(2);
    	
    	return view('User_v', compact('data'));
    }
}

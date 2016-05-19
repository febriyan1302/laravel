<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BelajarModel;


class BelajarModelController extends Controller
{
    Public function index(){
    	$data = BelajarModel::where('jeniskelamin','=','perempuan')->get();
    	//return $data;
    	return view('BelajarModel', compact('data'));
    }
}

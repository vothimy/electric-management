<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraCuuKhacController extends Controller
{
    public function cauhoithuonggap(){
    	return view('cskh.tracuukhac.cauhoithuonggap');
    }

    public function vbphatluat(){
    	return view('cskh.tracuukhac.vbphapluat');
    }
}

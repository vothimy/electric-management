<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LichNgungCCdienController extends Controller
{
    public function theokhuvuc(){
    	return view('cskh.lichngungcungcapdien.theokhuvuc');
    }

    public function theokhachhang(){
    	return view('cskh.lichngungcungcapdien.theokhachhang');
    }
}

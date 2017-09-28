<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DongHo;
use App\User;
use App\LoaiDien;
use App\NDD;

class DongHoController extends Controller
{
    public function index(){
    	$arItems = DongHo::all();
    	$arKH = NDD::orderBy('id','DESC')->get();
    	$arLD = LoaiDien::all();

    	return view('admin.dho.index',['arItems'=>$arItems,'arKH'=>$arKH,'arLD'=>$arLD]);
    }
}

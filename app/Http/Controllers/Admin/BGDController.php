<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BGD;
use App\LoaiDien;

class BGDController extends Controller
{
    public function index(){
    	$arItems = BGD::all();
    	$arCats = LoaiDien::all();
    	return view('admin.bgd.index',['arItems'=>$arItems,'arCats'=>$arCats]);
    }
    public function edit($id){
    	$arItems = BGD::find($id);
    	$arCats = LoaiDien::all();
    	return view('admin.bgd.edit',['arItems'=>$arItems,'arCats'=>$arCats]);
    }
    public function update($id,Request $request){
    	$arItem = BGD::find($id);
    	$arItem->mald = $request->selector1;
    	$arItem->bac = $request->bac;
    	$arItem->mucqd = $request->mqd;
    	$arItem->giaban = $request->gia;
    	if($arItem->update()){
            $request->session()->flash('msg','Sửa thành công');
            return redirect()->route('admin.bgd.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi sửa');
            return redirect()->route('admin.bgd.index');
        }
    }
    public function destroy($id,Request $request){
    	$arItem = BGD::find($id);
    	if($arItem->delete()){
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.bgd.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi xóa');
            return redirect()->route('admin.bgd.index');
        }
    }
    public function create(){
    	$arCats = LoaiDien::all();
    	return view('admin.bgd.create',['arCats'=>$arCats]);
    }
    public function store(Request $request){
    	$arItem = BGD::all();
    	$arItem = array(
            'mald' => trim($request->selector1),
            'bac' => trim($request->bac),
            'mucqd' => trim($request->mqd),
            'giaban' => trim($request->gia)
        );
    	if(BGD::insert($arItem)){
            $request->session()->flash('msg','Thêm thành công');
            return redirect()->route('admin.bgd.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi thêm');
            return redirect()->route('admin.bgd.index');
        }
    }
}

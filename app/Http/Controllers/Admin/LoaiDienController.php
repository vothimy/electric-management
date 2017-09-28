<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LoaiDienRequest;
use App\Http\Controllers\Controller;
use App\LoaiDien;

class LoaiDienController extends Controller
{
    public function index(){
    	$arItems = LoaiDien::all();
    	return view('admin.loaidien.index',['arItems'=>$arItems]);
    }
    public function edit($id){
    	$arItems = LoaiDien::find($id);
    	return view('admin.loaidien.edit',['arItems'=>$arItems]);
    }
    public function update($id, LoaiDienRequest $request){
    	$arItem = LoaiDien::find($id);
    	$tenloai = $request->name;
    	$arItem->tenloai = $tenloai;
    	if($arItem->update()){
            $request->session()->flash('msg','Sửa thành công');
            return redirect()->route('admin.loaidien.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi sửa');
            return redirect()->route('admin.loaidien.index');
        }
    }
    public function destroy($id,Request $request){
    	$arItem = LoaiDien::find($id);
    	if($arItem->delete()){
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.loaidien.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi xóa');
            return redirect()->route('admin.loaidien.index');
        }
    }
    public function create(){
    	return view('admin.loaidien.create');
    }
    public function store(LoaiDienRequest $request){
    	$arItem = LoaiDien::all();
    	$arItem = array(
            'tenloai' => trim($request->name),
        );
    	if(LoaiDien::insert($arItem)){
            $request->session()->flash('msg','Thêm thành công');
            return redirect()->route('admin.loaidien.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi thêm');
            return redirect()->route('admin.loaidien.index');
        }
    }
}

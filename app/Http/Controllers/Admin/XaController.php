<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\XaRequest;
use App\Http\Controllers\Controller;
use App\Xa;

class XaController extends Controller
{
    public function index(){
    	$arItems = Xa::all();
    	return view('admin.xa.index',['arItems'=>$arItems]);
    }
    public function edit($id){
    	$arItems = Xa::find($id);
    	return view('admin.xa.edit',['arItems'=>$arItems]);
    }
    public function update($id, XaRequest $request){
    	$arItem = Xa::find($id);
    	$tenxa = $request->name;
    	$arItem->tenxa = $tenxa;
    	if($arItem->update()){
            $request->session()->flash('msg','Sửa thành công');
            return redirect()->route('admin.xa.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi sửa');
            return redirect()->route('admin.xa.index');
        }
    }
    public function destroy($id,Request $request){
    	$arItem = Xa::find($id);
    	if($arItem->delete()){
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.xa.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi xóa');
            return redirect()->route('admin.xa.index');
        }
    }
    public function create(){
    	return view('admin.xa.create');
    }
    public function store(XaRequest $request){
    	$arItem = Xa::all();
    	$arItem = array(
            'tenxa' => trim($request->name),
        );
    	if(Xa::insert($arItem)){
            $request->session()->flash('msg','Thêm thành công');
            return redirect()->route('admin.xa.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi thêm');
            return redirect()->route('admin.xa.index');
        }
    }
}

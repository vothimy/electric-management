<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ThonRequest;
use App\Http\Controllers\Controller;
use App\Xa;
use App\Thon;

class ThonController extends Controller
{
    public function index(){
    	$arCats = Xa::all();
    	$arItems = Thon::all();
    	return view('admin.thon.index',['arItems'=>$arItems,'arCats'=>$arCats]);
    }
    public function edit($id){
    	$arItems = Thon::find($id);
        $arCats = Xa::all();
    	return view('admin.thon.edit',['arItems'=>$arItems,'arCats'=>$arCats]);
    }
    public function update($id, ThonRequest $request){
    	$arItem = Thon::find($id);
        $arItem->tenthon = $request->name;
    	$arItem->maxa = $request->selector1;
    	if($arItem->update()){
            $request->session()->flash('msg','Sửa thành công');
            return redirect()->route('admin.thon.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi sửa');
            return redirect()->route('admin.thon.index');
        }
    }
    public function destroy($id,Request $request){
    	$arItem = Thon::find($id);
    	if($arItem->delete()){
            $request->session()->flash('msg','Xóa thành công');
            return redirect()->route('admin.thon.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi xóa');
            return redirect()->route('admin.thon.index');
        }
    }
    public function create(){
        $arCats = Xa::all();
    	return view('admin.thon.create',['arCats'=>$arCats]);
    }
    public function store(ThonRequest $request){
    	$arItem = Thon::all();
    	$arItem = array(
            'tenthon' => trim($request->name),
            'maxa' => trim($request->selector1),
        );
    	if(Thon::insert($arItem)){
            $request->session()->flash('msg','Thêm thành công');
            return redirect()->route('admin.thon.index');
        }else{
            $request->session()->flash('msg','Có lỗi khi thêm');
            return redirect()->route('admin.thon.index');
        }
    }
}

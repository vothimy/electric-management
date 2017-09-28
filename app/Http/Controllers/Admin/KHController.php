<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Thon;
use App\Xa;

class KHController extends Controller
{
    public function index(){
		$arItems = User::all();
		return view('admin.cus.index',['arItems' => $arItems]);
	}
	
	public function destroy($id, Request $request){
		$arItem = User::find($id);
		if($arItem->id == 1){
			$request->session()->flash('msg','Bạn không thể xóa admin');
			return redirect()->route('admin.cus.index');
		}
		if($arItem->delete()){
			$request->session()->flash('msg','Xóa thành công');
			return redirect()->route('admin.cus.index');
		}else{
			$request->session()->flash('msg','Có lỗi khi xóa');
			return redirect()->route('admin.cus.index');
		}
		
	}
	public function change(Request $request){
		if($request->ajax()){
			$id = $request->id;
			$arT = Thon::where('maxa','=',$id)->get();
			$tmp = null;
			foreach($arT as $item){
				$tmp .= '<option value="'.$item['id'].'">'.$item['tenthon'].'</option>';
			}
			echo $tmp;
			// return response()->json($arT);
		}

	}
	// public function edit($id){
	// 	$arItem = User::find($id);
	// 	return view('admin.user.edit',['arItem' =>$arItem]);
	// }
	// public function update($id,UserEditRequest $request){
	// 	$arItem = User::find($id);
	// 	// $arUser = Auth::user();
	// 	// if($arItem->username != $arUser->username && $arUser->username != 'admin'){
	// 	// 	$request->session()->flash('msg','Bạn không thể sửa thông tin của người khác');
	// 	// 	return redirect()->route('admin.user.index');
	// 	// }
	// 	$password = $request->password;
	// 	$fullname = $request->fullname;
	// 	$arItem->fullname = $fullname;
	// 	if($password != ''){
	// 		$password = bcrypt(trim($request->password));
	// 		$arItem->password = $password;
	// 	}
	// 	if($arItem->update()){
	// 		$request->session()->flash('msg','Sửa thành công');
	// 		return redirect()->route('admin.cus.index');
	// 	}else{
	// 		$request->session()->flash('msg','Có lỗi khi sửa');
	// 		return redirect()->route('admin.cus.index');
	// 	}
	// }
	public function ajax(Request $request){
        $id = $request->aid;
        $arItem = User::find($id);
        if($arItem->status == 0){
            $arItem->status = 1;
        }else{
            $arItem->status = 0;
        }
        $arItem->update();
        return response()->json($arItem);
    }
}

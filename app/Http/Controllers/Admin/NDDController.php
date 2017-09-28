<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NDDRequest;
use App\NDD;
use App\Thon;
use App\LoaiDien;
use App\HoaDon;
use App\HoaDon2;
use App\Xa;
use App\DongHo;

class NDDController extends Controller
{
    public function index(){
		$arItems = NDD::all();
		return view('admin.ndd.index',['arItems' => $arItems]);
	}
	public function create(){
		$arX = Xa::all();
		$arT = Thon::all();
		$arLD = LoaiDien::all();
		return view('admin.ndd.create',['arX'=>$arX,'arT'=>$arT,'arLD'=>$arLD]);
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
	public function store(NDDRequest $request){
		$arItem = array(
			'tenkh' => trim($request->tenkh),
			'sdt' => $request->sdt,
			'diachi' => $request->diachi,
			'cmnd' => $request->cmnd,
			'noicap' => $request->noicap,
			'thon' => $request->selector2,
			'email' => $request->email,
			'status' => 0,
			'ngaycap' => $request->nam . '/' . $request->thang . '/' . $request->ngay,
			);
		
		if(NDD::insert($arItem)){
			$id = NDD::select('id')->orderBy('id','desc')->take(1)->get();
			$arDH = array(
			'mald' => $request->loaidien,
			'makh' => $id[0]['id']
		);
			if(DongHo::insert($arDH)){
				$request->session()->flash('msg','Thêm thành công');
				return redirect()->route('admin.ndd.index');
			}
		}else{
			$request->session()->flash('msg','Có lỗi khi thêm');
			return redirect()->route('admin.ndd.index');
		}
	}
	public function destroy($id, Request $request){
		$arItem = NDD::find($id);
		if($arItem->delete()){
			$request->session()->flash('msg','Xóa thành công');
			return redirect()->route('admin.ndd.index');
		}else{
			$request->session()->flash('msg','Có lỗi khi xóa');
			return redirect()->route('admin.ndd.index');
		}
		
	}
	public function edit($id){
		$arItem = NDD::find($id);
		$arT = Thon::all();
		$arX = Xa::all();
		return view('admin.ndd.edit',['arItem' =>$arItem,'arT' =>$arT,'arX' =>$arX]);
	}
	public function update($id,Request $request){
		$arItem = NDD::find($id);
		
		$arItem->tenkh = $request->tenkh;
		$arItem->diachi = $request->diachi;
		$arItem->email = $request->email;
		$arItem->sdt = $request->sdt;
		$arItem->cmnd = $request->cmnd;
		$arItem->ngaycap = $request->nam . '/' . $request->thang . '/' . $request->ngay;
		$arItem->noicap = $request->noicap;
		if($arItem->update()){
			$request->session()->flash('msg','Sửa thành công');
			return redirect()->route('admin.ndd.index');
		}else{
			$request->session()->flash('msg','Có lỗi khi sửa');
			return redirect()->route('admin.ndd.index');
		}
	}
	public function ajax(Request $request){
        $id = $request->aid;
        $madh = DongHo::where('makh','=',$id)->get();
//return ($madh[0]->id); exit();
        $arItem = NDD::find($id);
        if($arItem->status == 0){
            $arItem->status = 1;
            if($madh[0]->mald == 4){
            	$arHoaDon  = array(
	            	'madh' => $madh[0]->id,
	            	'chisocu' => 0, 
	            	'chisomoi' => 0, 
	            	'chisothang' => 0, 
	            	'trangthai' => 0, 
	            	'tongtien' => 0
	            );
	            if(HoaDon::insert($arHoaDon)){
	            	$arItem->update();
	            }
            }
            else{
            	$arHoaDon  = array(
	            	'madh' => $madh[0]->id,
	            	'giothapdiem' => 0, 
	            	'giobinhthuong' => 0, 
	            	'giocaodiem' => 0, 
	            	'trangthai' => 0, 
	            	'tongtien' => 0
	            );
	            if(HoaDon2::insert($arHoaDon)){
	            	$arItem->update();
	            }	
            }
        }else{
            $arItem->status = 0;
            if($madh[0]->mald == 4){
            	$arD = HoaDon::where('madh','=',$madh[0]->id)->get();
	            $id = $arD[0]->id;
	            $arX = HoaDon::find($id);
	            $arX->delete();
            }else{
            	$arD = HoaDon2::where('madh','=',$madh[0]->id)->get();
	            $id = $arD[0]->id;
	            $arX = HoaDon2::find($id);
	            $arX->delete();
            }
            $arItem->update();
        }
        return response()->json($arItem);
    }
    }

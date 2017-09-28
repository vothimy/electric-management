<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Dangkydien;
use App\User;

class ThanhtoanTiendienController extends Controller
{
    public function lichsu(){
        $user = Auth::user();
        if(isset($user)){
            //echo 1;die;
            $username = $user->username;
            $arUser = User::where('username','=',$username)->get();
            $cmnd = $arUser[0]->cmnd;
            $arKH = Dangkydien::where('cmnd','=',$cmnd)->first();
            //dd($cmnd);
            return view('cskh.thanhtoantiendien.lichsu',['arKH'=>$arKH]);
        }else{
            return view('cskh.thanhtoantiendien.lichsu');
        }
    }
    public function postlichsu(Request $request){
        $makh = $request->TxtMKH;
        $arLS = DB::table('dangkydien')
        ->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
        ->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
        ->select('dangkydien.*', 'dongho.*','dongho.id as madh','hoadon.*','dongho.mald as mald','hoadon.id as hid')
        ->where('dangkydien.id','=',$makh)->orderBy('hid','DESC')->limit(12)
        ->get();
        
        if(!isset($arLS[0])){
            $request->session()->flash('msg','MÃ KHÁCH HÀNG CỦA BẠN ĐÃ THANH LÝ HOẶC NHẬP CHƯA CHÍNH XÁC');
            return view('cskh.thanhtoantiendien.lichsu');
        }

        return view('cskh.thanhtoantiendien.xemlichsu',['arLS'=>$arLS]);
    }

    public function thanhtoanonline(){
    	return view('cskh.thanhtoantiendien.thanhtoanonline');
    }

    public function thanhtoannganhang(){
    	return view('cskh.thanhtoantiendien.thanhtoannganhang');
    }

    public function thanhtoandienluc(){
    	return view('cskh.thanhtoantiendien.thanhtoandienluc');
    }

    public function thanhtoantrunggian(){
    	return view('cskh.thanhtoantiendien.thanhtoantrunggian');
    }

    public function diemthanhtoan(){
    	return view('cskh.thanhtoantiendien.diemthanhtoan');
    }

    public function tracuuhoadon(){
    	return view('cskh.thanhtoantiendien.tracuuhoadon');
    }

    
}

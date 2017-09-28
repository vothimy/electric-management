<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DangKyDien;
use App\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
    	return view('cskh.index.index');
    }
    public function reg(){
    	return view('cskh.index.reg');
    }
    public function postreg(Request $request){
    	$arItems = DangKyDien::all();
    	$arUser = User::all();
    	$makh = $request->txtMaKH;
    	foreach ($arItems as $item) {
    		if($makh == $item->id){
    			$username = trim($request->txtUsername);
    			$password = bcrypt($request->txtMatKhau);
    			$arNND = DangKyDien::where('id','=',$makh)->first();
                $trangthai = $arNND->status;
                if($trangthai==0){
                    $request->session()->flash('msg','Tài khoản của bạn chưa được kích hoạt nên bạn không thể đăng ký khách hàng');
                    return redirect()->route('public.index.reg');
                }
    			$email = $arNND->email;
    			$fullname = $arNND->tenkh;
    			$sdt = $arNND->sdt;
    			$cmnd = $arNND->cmnd;
    			//$dob = $arNND->dob;
    			$address = $arNND->diachi;
    			$i = 0;
    			foreach ($arUser as $user) {
    				if($user->fullname == $fullname){
    					$i++;    					
    				}
    			}
    			//echo $i;die;
    			if($i == 0){
    				$arKH = array(
		    				'username' => $username,
		    				'fullname' => $fullname,
		    				'sdt' => $sdt,
		    				'cmnd' => $cmnd,
		    				'address' => $address,
		    				'password' => $password,
		    				'email' => $email,
		    				'role' => 2
		    			);
    				User::insert($arKH);
    				if (Auth::attempt(['username' => $username, 'password' => $request->txtMatKhau,'role' => 2])) {
    					//echo 12;die;
			            return redirect()->route('public.index.index');
			        }else{//đn sai
			        	//echo "sai";die;
			        	$request->session()->flash('msg','Đăng ký thất bại');
			        	return redirect()->route('public.index.reg');
			        }
	    			//return view('cskh.index.reg');
				}else{
					$request->session()->flash('msg','Mã khách hàng này đã đăng ký tài khoản');
			        return redirect()->route('public.index.reg');
				}	
    			// 
    			
    		}
    	}
    	echo "<script>alert('Mã khách hàng không phù hợp');</script>";
    	return view('cskh.index.reg');
    	
    	 
    }
    public function postlogin(Request $request){
    	$name = $request->name;
    	$pass = $request->pass;
    	if (Auth::attempt(['username' => $name, 'password' => $pass,'role' => 2])) {
            return redirect()->route('public.index.index');
        }else{//đn sai        	
        	$request->session()->flash('msg-e','Đăng nhập thất bại. Vui lòng kiểm tra lại Tên người dùng và mật khẩu');
        	return redirect()->route('public.index.index');

        }
    }
}

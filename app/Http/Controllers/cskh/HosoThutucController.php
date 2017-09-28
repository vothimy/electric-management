<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Http\Requests\RequestDangKyDien;
use App\DangKyDien;
use App\DongHo;
use App\Thon;
use App\Xa;
use Illuminate\Support\Facades\DB;

class HosoThutucController extends Controller
{
    public function capdienhoso(){
    	return view('cskh.hosothutuc.capdienhoso');
    }

    public function capdienyeucau(){
    	return view('cskh.hosothutuc.capdienyeucau');
    }
    public function change1(Request $request){
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
    public function postCapdien(RequestDangKyDien $request){
        $tenkh = $request->tenkh;
        $cmnd = $request->cmnd;
        $noicap = $request->noicap;
        $ngaycap = $request->nam.'-'.$request->thang.'-'.$request->ngay;
        $diachi = $request->diachi;
        $thon = $request->thon;
        $email = $request->email;
        $sdt = $request->sdt;
        $mucdich = $request->mucdichsudung;
        
        $arCMND = DangKyDien::where('cmnd','=',$cmnd)->get();
        //dd($arCMND);
        if(isset($arCMND[0])){
            $request->session()->flash('msg','<script type="text/javascript">alert("Chứng minh nhân dân của bạn không hợp lệ. Vui lòng kiểm tra lại");</script>');
            
            return redirect()->route('public.hosothutuc.capdienyeucau');
        }

        $arItem = array(
            'tenkh'    => $tenkh,
            'cmnd' => $cmnd,
            'noicap' => $noicap,
            'ngaycap' => $ngaycap,
            'diachi' => $diachi,
            'thon' => $thon,
            'email' => $email,
            'sdt' => $sdt
        );

        if(DangKyDien::insert($arItem)){
            $id=DangKyDien::select('id')->orderBy('id','desc')->take(1)->get();
            $arItem2 = array(
                'makh' => $id[0]['id'],
                'mald' => $mucdich
            );
            DongHo::insert($arItem2);
            $arXa = DB::table('xa')->join('thon','xa.id','=','thon.maxa')->where('thon.id','=',$thon)->select('xa.tenxa as tenxa')->get();
            $ngay = $request->ngay.' / '.$request->thang.' / '.$request->nam;
            $data=['name'=>$tenkh,'cmnd'=>$cmnd,'noicap'=>$noicap,'ngaycap'=>$ngay,'diachi'=>$diachi,
                    'thon'=>$thon,'xa'=>$arXa[0]->tenxa,'sdt'=>$sdt,'email'=>$email];
            Mail::send('emails.sendemail',$data,function($msg) use ($data){
                $msg->from('buihung.bqh@gmail.com','Tổng công ty Điện Lực Miền Trung - Chi nhánh huyện Thăng Bình');
                $msg->to($data['email'])->subject('Thông báo đăng ký sử điện');
            });

            $request->session()->flash('msg','<script type="text/javascript">alert("Bạn đã đăng ký thành công. Vui lòng kiểm tra email để xác nhận lại các thông tin bạn đã đăng ký với chúng tôi và xem các giấy tờ có cần thiết để hoàn tất thủ tục đăng ký");</script>');
            
            return redirect()->route('public.index.index');
        }
    }

	public function thaydoihuongdan(){
    	return view('cskh.hosothutuc.thaydoihuongdan');
    }   
    
    public function thaydoiyeucau(){
    	return view('cskh.hosothutuc.thaydoiyeucau');
    }    

    public function thaydoiyeucau2(){
    	return view('cskh.hosothutuc.thaydoiyeucau2');
    }   

    public function thaydoittkh(){
    	return view('cskh.hosothutuc.thaydoittkh');
    }  

    public function thaydoinhansms(){
    	return view('cskh.hosothutuc.thaydoinhansms');
    }  

    public function bieugia(){
    	return view('cskh.hosothutuc.bieugia');
    }  

    public function giabanle(){
    	return view('cskh.hosothutuc.giabanle');
    }  

    public function giabanbuon(){
    	return view('cskh.hosothutuc.giabanbuon');
    }   

    public function tinh1(){
    	return view('cskh.hosothutuc.tinh1');
    }   

    public function tinh2(){
    	return view('cskh.hosothutuc.tinh2');
    }    
}

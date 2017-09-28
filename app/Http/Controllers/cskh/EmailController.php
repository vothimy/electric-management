<?php

namespace App\Http\Controllers\cskh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\User;
use App\Mail\OrderShipped;
use App\Mail\UserEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmailController extends Controller
{
    

    public function sendEmail(Request $request)
    {
    	$data=['name'=>'Bui Quang Hưng'];
        Mail::send('emails.sendemail',$data,function($msg){
        	$msg->from('buihung.bqh@gmail.com','Bùi Hưng');
        	$msg->to('buihung.bqh@gmail.com')->subject('Thông báo đăng ký sử dụng điện');
        });
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\DongHo;
use App\ChiTietHD;
use PDF;
use Session;

class PDFController extends Controller
{
	public function pdf(Request $request){
	
		$thang = $request->thang;
		$nam = $request->nam;
		if($thang < 10){
			$thangnam =  $nam . '-0' . $thang;
		}else{
			$thangnam = $nam . '-' . $thang;
		}
		$mathon = Session::get('mathon');
		$arItems = DB::table('dangkydien')
			->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
			->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
			->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','dangkydien.thon as thon','hoadon.created_at as created','hoadon.id as hid','hoadon.tongtien as tongtienhd')
			->where([ 
				['thon','=',$mathon],
				['status','=',1],
				['mald','=',4],
				['hoadon.tongtien','>',0],
				['hoadon.created_at','LIKE',"%$thangnam%"],
				])
			->get();
			$arCTHD = ChiTietHD::all();
		$pdf = PDF::loadView('admin.hoadon.pdf',['item' => $arItems,'arCTHD'=>$arCTHD]);
		$namefile = 'HDTD/'. $thangnam . '-Thon-' . $mathon .'.pdf';	
		return $pdf->download($namefile);	
		
	}
	public function exportPDF($id, Request $request){
		$mathon = Session::get('mathon');
		$arItems = DB::table('dangkydien')
			->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
			->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
			->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','dangkydien.thon as thon','hoadon.created_at as created','hoadon.id as hid','hoadon.tongtien as tongtien')
			->where([ 
				['thon','=',$mathon],
				['status','=',1],
				['mald','=',4],
				['hoadon.id','=',$id],
				])
			->get();
		
		$arCTHD = ChiTietHD::all();
		$pdf = PDF::loadView('admin.hoadon.pdf',['item' => $arItems,'arCTHD'=>$arCTHD]);

		$namefile = 'HDTD-'. $arItems[0]->hid . '-' . $arItems[0]->idd .'.pdf';	
		return $pdf->download($namefile);	
	}
}

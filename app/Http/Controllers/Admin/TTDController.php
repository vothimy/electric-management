<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NDDRequest;
use App\NDD;
use App\Thon;
use App\LoaiDien;
use App\HoaDon;
use App\HoaDon2;
use App\Xa;
use App\DongHo;
use App\ChiTietHD;
use Session;

class TTDController extends Controller
{
	public function index(){
		$arX = Xa::all();
		$arT = Thon::all();
		return view('admin.ttd.index',['arX'=>$arX,'arT'=>$arT]);
	}
	//index sản xuất
	public function indexsx(){
		$arX = Xa::all();
		$arT = Thon::all();
		return view('admin.ttd.indexsx',['arX'=>$arX,'arT'=>$arT]);
	} 
	public function show(Request $request){
		$mathon = $request->selector2;
		Session::put('mathon', $mathon);

		$arItems = DB::table('dangkydien')
		->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
		->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
		->select('dangkydien.*', 'dongho.*','dangkydien.id as idndd','hoadon.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','hoadon.created_at as created')
		->where([ 
			['thon','=',$mathon],
			['status','=',1],
			['mald','=',4],
			])
		->get();
		//dd($arItems);
		$arLD = LoaiDien::all();
		return view('admin.ttd.show',['arItems'=>$arItems,'arLD'=>$arLD]);
	}
	public function showsx(Request $request){
		$mathon = $request->selector2;
		Session::put('mathon', $mathon);

		$arItems = DB::table('dangkydien')
		->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
		->join('hoadon2', 'hoadon2.madh', '=', 'dongho.id')
		->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon2.*','dongho.mald as mald')
		->where([ 
			['thon','=',$mathon],
			['status','=',1],
			['mald','=',1],
			])
		->get();
		//dd($arItems);
		$arLD = LoaiDien::all();
		return view('admin.ttd.showsx',['arItems'=>$arItems,'arLD'=>$arLD]);
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


	public function changethang(Request $request){
		if($request->ajax()){
			$thangabc = $request->thangabc;
			$namabc = $request->namabc;
			if($thangabc < 10){
				$thangnam = $namabc . '-0' . $thangabc;
			}else{
				$thangnam = $namabc . '-' . $thangabc;
			}
			$mathon = Session::get('mathon');
			//echo $thangnam;die;
			$arItems = DB::table('dangkydien')
			->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
			->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
			->select('dangkydien.*', 'dongho.*','dangkydien.id as idndd','hoadon.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','hoadon.created_at as created')
			->where([ 
				['thon','=',$mathon],
				['status','=',1],
				['mald','=',4],
				['hoadon.created_at','LIKE',"%$thangnam%"],
				])
			->get();
			
			$tmp = null;
			
			$arLD = LoaiDien::all();

			foreach($arItems as $item){
				$date = $item->created;
                $d = getdate(strtotime($date));
                $ngay = $d['mon'].'/'.$d['year'];

				$tmp = '<tr> 
				<th scope="row"> '. $item->idndd .'</th> 
				<td>'. $item->tenkh .'</td> ';							
				foreach($arLD as $ld){
					if($item->mald == $ld->id){
						$tmp .=	'<td>' . $ld->tenloai .'</td> ';							
					}
				}	
				$tmp .= '	<td>'.  $item->madh .' </td> ';
				$tmp .= '<td>'. $item->chisocu .' </td>	'	;				
				$tmp .= '<td style="cursor: pointer;" class="chiso">';
				$tmp .= '<input style="width: 60px" type="number" min="'.$item->chisocu.'" class="chisomoish" value="'.$item->chisomoi.'" name="chisomoi" id="'. $item->idd .' ">
			</td> <td>'.$ngay.'</td>';

			$tmp .= '<td id="tien'. $item->idd .'">'.number_format($item->tongtien) .' VNĐ</td></tr>';		
			echo $tmp;
		}
	}
}
public function changethangsx(Request $request){
	if($request->ajax()){
		$thangabc = $request->thangabc;
		$namabc = $request->namabc;
		if($thangabc < 10){
			$thangnam = $namabc . '-0' . $thangabc;
		}else{
			$thangnam = $namabc . '-' . $thangabc;
		}
		$mathon = Session::get('mathon');
			//echo $thangnam;die;
		$arItems = DB::table('dangkydien')
		->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
		->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
		->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald')
		->where([ 
			['thon','=',$mathon],
			['status','=',1],
			['mald','=',1],
			['hoadon.created_at','LIKE',"%$thangnam%"],
			])
		->get();

		$tmp = null;

		$arLD = LoaiDien::all();
		
		foreach($arItems as $item){
			$tmp = '<tr> 
			<th scope="row">'. $item->idndd .'</th> 
			<td>'. $item->tenkh .'</td> ';							
			foreach($arLD as $ld){
				if($item->mald == $ld->id){
					$tmp .=	'<td>' . $ld->tenloai .'</td> ';							
				}
			}	
			$tmp .= '	<td>'.  $item->madh .' </td> ';
			$tmp .= '<td>'. $item->chisocu .' </td>						
			<td style="cursor: pointer;" id="'. $item->idd .'" class="chiso">
				<input style="width: 60px" type="number" min="'.$item->chisocu.'" class="chisomoi" value="'.$item->chisomoi.'" name="chisomoi" id="'. $item->idd .'">
			</td> ';

			$tmp .='<td id="tien'. $item->idd .'">'.number_format($item->tongtien) .' VNĐ</td></tr> ';		
			echo $tmp;
		}
	}
}
public function tinhtiendien(Request $request){
	if($request->ajax()){
		$idhd = $request->id;//id hóa đơn
		$value = $request->value;//chỉ số mới
		$arItems = HoaDon::find($idhd);		
		$chisocu = $arItems->chisocu;	
		if($chisocu > $value){
			echo '<script>
					alert("Chi");
				</script>';die;
		}
		$chisothang = $value - $chisocu;
		$arItems->chisomoi = $value;		
		$arItems->chisothang = $chisothang;
		if($chisothang <= 50){
			$tongtien = 1484*$chisothang;
			$arCTHD = ChiTietHD::where('mahd','=',$idhd)->get();			
			if(isset($arCTHD[0])){
				foreach ($arCTHD as $item) {
					$id = $item->id;
					$arCT = ChiTietHD::find($id);
					$arCT->delete();
				}
			}
			$arCT2 = array(
				'mahd' => $idhd, 
				'chisomuc' => $chisothang, 
				'dongiact' => 1484 
				);
			ChiTietHD::insert($arCT2);

		}elseif ($chisothang >50 && $chisothang<= 100) {
			$chiso = $chisothang - 50;
			$tongtien = (1533*$chiso)+(50*1484);
			$arCTHD = ChiTietHD::where('mahd','=',$idhd)->get();
			if(isset($arCTHD[0])){
				foreach ($arCTHD as $item) {
					$id = $item->id;
					$arCT = ChiTietHD::find($id);
					$arCT->delete();
				}
			}
			$arCT2 = array(
				'mahd' => $idhd, 
				'chisomuc' => 50, 
				'dongiact' => 1484 
				);
			ChiTietHD::insert($arCT2);
			$arCT3 = array(
				'mahd' => $idhd, 
				'chisomuc' => $chiso, 
				'dongiact' => 1533 
				);
			ChiTietHD::insert($arCT3);
		}
		elseif ($chisothang >100 && $chisothang<= 200) {
			$chiso = $chisothang - 100;
			$tongtien = (1786*$chiso)+(50*1533)+(50*1484);

			$arCTHD = ChiTietHD::where('mahd','=',$idhd)->get();
			if(isset($arCTHD[0])){
				foreach ($arCTHD as $item) {
					$id = $item->id;
					$arCT = ChiTietHD::find($id);
					$arCT->delete();
				}
			}
			$arCT2 = array(
				'mahd' => $idhd, 
				'chisomuc' => 50, 
				'dongiact' => 1484 
				);
			ChiTietHD::insert($arCT2);
			$arCT3 = array(
				'mahd' => $idhd, 
				'chisomuc' => 50, 
				'dongiact' => 1533 
				);
			ChiTietHD::insert($arCT3);
			$arCT4 = array(
				'mahd' => $idhd, 
				'chisomuc' => $chiso, 
				'dongiact' => 1786 
				);
			ChiTietHD::insert($arCT4);

		}
		elseif ($chisothang >=200) {
			$chiso = $chisothang - 200;
			$tongtien = (2242*$chiso)+(1786*100)+(50*1533)+(50*1484);

			$arCTHD = ChiTietHD::where('mahd','=',$idhd)->get();
			if(isset($arCTHD[0])){
				foreach ($arCTHD as $item) {
					$id = $item->id;
					$arCT = ChiTietHD::find($id);
					$arCT->delete();
				}
			}
			$arCT2 = array(
				'mahd' => $idhd, 
				'chisomuc' => 50, 
				'dongiact' => 1484 
				);
			ChiTietHD::insert($arCT2);
			$arCT3 = array(
				'mahd' => $idhd, 
				'chisomuc' => 50, 
				'dongiact' => 1533 
				);
			ChiTietHD::insert($arCT3);
			$arCT4 = array(
				'mahd' => $idhd, 
				'chisomuc' => 100, 
				'dongiact' => 1786 
				);
			ChiTietHD::insert($arCT4);
			$arCT5 = array(
				'mahd' => $idhd, 
				'chisomuc' => $chiso, 
				'dongiact' => 2242 
				);
			ChiTietHD::insert($arCT5);

		}
		$arItems->tongtien = $tongtien;
		// echo $tongtien;
		$arItems->update();
		
		//hóa đơn tháng sau
		$date = $arItems->created_at;
        $d = getdate(strtotime($date));
		if($d['mon'] == 12){
        	$d['mon'] =  1;
        	$d['year'] = $d['year'] + 1;
        }
        if($d['mon'] < 9){
        	$d['mon'] =  $d['mon'] + 1;
        	$ngay = $d['year'].'-0'.$d['mon'].'-01 00:00:00';
        }else{
        	$d['mon'] =  $d['mon'] + 1;
        	$ngay = $d['year'].'-'.$d['mon'].'-01 00:00:00';
        }

		$arHDTS1 = HoaDon::where([ 
			['madh','=',$arItems->madh],
			['created_at','LIKE', "%$ngay%"]
			])->first();
		$arHoaDon = array(
				'madh' => $arItems->madh,
				'chisocu' => $value+0,
				'chisomoi' => 0,
				'chisothang' => 0,
				'tongtien' => 0,
				'trangthai' => 0,
				'created_at' => $ngay,
				'updated_at' => $ngay
			);
		// return response()->json($arHDTS2);die;
		if(isset($arHDTS1)){
			$arHDTS2 = HoaDon::find($arHDTS1->id);
			$arHDTS2->delete();
			HoaDon::insert($arHoaDon);
		}else{
			HoaDon::insert($arHoaDon);
		}
		$sum = number_format($tongtien).' VNĐ';
		return response()->json(['tongtien'=>$sum,'chisomoi'=>$value,'chisothang'=>$chisothang]);
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
	$arItem = NDD::find($id);
	if($arItem->status == 0){
		$arItem->status = 1;
	}else{
		$arItem->status = 0;
	}
	$arItem->update();
	return response()->json($arItem);
}

}

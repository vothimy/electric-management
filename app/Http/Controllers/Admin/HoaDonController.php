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
use App\Xa;
use App\DongHo;
use App\ChiTietHD;
use Session;

class HoaDonController extends Controller
{
//điện sinh hoạt
  public function index(){
    $arX = Xa::all();
    $arT = Thon::all();
    return view('admin.hoadon.index',['arX'=>$arX,'arT'=>$arT]);
  }
  public function show(Request $request){
    $mathon = $request->selector2;
    Session::put('mathon', $mathon);

    $arItems = DB::table('dangkydien')
    ->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
    ->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
    ->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','dangkydien.thon as thon','hoadon.created_at as created','hoadon.id as idhdd')
    ->where([ 
      ['thon','=',$mathon],
      ['status','=',1],
      ['mald','=',4],
      ])
    ->get();
    $arLD = LoaiDien::all();
    $arThon = DB::table('thon')
    ->join('xa', 'thon.maxa', '=', 'xa.id')
    ->select('thon.*', 'xa.tenxa')
    ->where('thon.id','=',$mathon)
    ->first();
    $arCTHD = ChiTietHD::all();
    return view('admin.hoadon.show',['arItems'=>$arItems,'arLD'=>$arLD,'arThon'=>$arThon,'arCTHD'=>$arCTHD]);
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

  public function changehd(Request $request){
    if($request->ajax()){

function convert_number_to_words($number) {

$hyphen      = ' ';
$conjunction = '  ';
$separator   = ' ';
$negative    = 'âm ';
$decimal     = ' phẩy ';
$dictionary  = array(
0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);

if (!is_numeric($number)) {
return false;
}

if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
trigger_error(
  'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
  E_USER_WARNING
  );
return false;
}

if ($number < 0) {
return $negative . convert_number_to_words(abs($number));
}

$string = $fraction = null;

if (strpos($number, '.') !== false) {
list($number, $fraction) = explode('.', $number);
}

switch (true) {
case $number < 21:
$string = $dictionary[$number];
break;
case $number < 100:
$tens   = ((int) ($number / 10)) * 10;
$units  = $number % 10;
$string = $dictionary[$tens];
if ($units) {
  $string .= $hyphen . $dictionary[$units];
}
break;
case $number < 1000:
$hundreds  = $number / 100;
$remainder = $number % 100;
$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
if ($remainder) {
  $string .= $conjunction . convert_number_to_words($remainder);
}
break;
default:
$baseUnit = pow(1000, floor(log($number, 1000)));
$numBaseUnits = (int) ($number / $baseUnit);
$remainder = $number % $baseUnit;
$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
if ($remainder) {
  $string .= $remainder < 100 ? $conjunction : $separator;
  $string .= convert_number_to_words($remainder);
}
break;
}

if (null !== $fraction && is_numeric($fraction)) {
$string .= $decimal;
$words = array();
foreach (str_split((string) $fraction) as $number) {
  $words[] = $dictionary[$number];
}
$string .= implode(' ', $words);
}

return $string;
}


      $thanghd = $request->thanghd;
      $namhd = $request->namhd;
      if($thanghd < 10){
        $thangnam = $namhd . '-0' . $thanghd;
      }else{
        $thangnam = $namhd . '-' . $thanghd;
      }
      $mathon = Session::get('mathon');
      $arItems = DB::table('dangkydien')
      ->join('dongho', 'dongho.makh', '=', 'dangkydien.id')
      ->join('hoadon', 'hoadon.madh', '=', 'dongho.id')
      ->select('dangkydien.*', 'dongho.*','dangkydien.id as idd','dongho.id as madh','hoadon.*','dongho.mald as mald','hoadon.created_at as created','hoadon.id as idhdd')
      ->where([ 
        ['thon','=',$mathon],
        ['status','=',1],
        ['mald','=',4],
        ['hoadon.created_at','LIKE',"%$thangnam%"],
        ])
      ->get();
      $tmp = null;

      $arLD = LoaiDien::all();
      $arCTHD = ChiTietHD::all();
      foreach($arItems as $item){
       $date = $item->created;
       $d = getdate(strtotime($date));
       $ngay = $d['mon'].'/'.$d['year'];
       $tmp = '<tr> 
       <th scope="row">'. $item->idd .'</th> 
       <td>'. $item->tenkh .'</td> ';                          
       foreach($arLD as $ld){
        if($item->mald == $ld->id){
          $tmp .= '<td>' . $ld->tenloai .'</td> ';                            
        }
      }   
      $tmp .= '   <td>'.  $item->madh .' </td> ';
      $tmp .= '<td>'. $item->chisocu .' </td> '   ;               
      $tmp .= '<td>'. $item->chisomoi .'</td> ';
      $tmp .= '<td id="tien'. $item->idd .'">'.number_format($item->tongtien) .' VNĐ</td>
      <td>'. $ngay .'</td> 
      <td><a style="cursor: pointer;" data-toggle="modal" data-target="#HienHInh'.$item->idd.'">Xem chi tiết</a>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="HienHInh'.$item->idd.'">
          <div class="modal-dialog modal-lg" style="width: 80%;">
            <div  class="modal-content"  style="padding: 30px">
              <h2 class="modal-title" style="margin-top: 0px;text-align: center;color: #354E9B" id="myModalLabel">CHI TIẾT HÓA ĐƠN TIỀN ĐIỆN</h2>
              <p style="text-align: center;">Tháng: '.$ngay.'</p>
              <p style="color: #354E9B;font-weight: bold;">CÔNG TY ĐIỆN LỰC THĂNG BÌNH - Điện lực Quảng Nam</p>
              <p style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">Công ty Điện lực huyện Thăng Bình - Quảng Nam</span></p>
              <span style="color: #354E9B">Điện thoại: <span style="color: black">19001909</span></span>
              <span style="color: #354E9B;margin-left: 60px">Mã số thuế: <span style="color: black">0400101394005</span></span>
              <span style="color: #354E9B;margin-left: 60px">ĐT sửa chữa: <span style="color: black">19001909</span></span>
              <p style="color: #354E9B;font-weight: bold;margin-top: 20px;margin-bottom: 5px">Tên khách hàng: <span style="color: black">'. $item->tenkh .'</span></p>
              <span style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">'. $item->diachi .'</span></span>
              <span style="color: #354E9B;margin-left: 60px">Điện thoại: <span style="color: black">0'. $item->sdt .'</span></span>
              <span style="color: #354E9B;margin-left: 60px">Mã khách hàng: <span style="color: black">'. $item->idd .'</span></span>
              <div style="margin-top: 20px"></div>
              <table style="border: 1px solid black;margin:0 auto !important" class="table hoadon table-hover" >
                <tr style="background: #DAD7D7 !important ; border-bottom: 1px solid #000;">
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">CHỈ SỐ MỚI</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">CHỈ SỐ CŨ</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">ĐN TIÊU THỤ</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">ĐN TRỰC TIẾP</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">ĐN TRỪ PHỤ</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">ĐN THỰC TẾ</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">ĐƠN GIÁ</th>
                  <th style="padding:5px;font-weight:bold;font-size: 15px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">THÀNH TIỀN</th>
                </tr>
                <tr style=" border-bottom: 1px solid #000;padding: 8px !important">
                  <td style="font-size: 12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">'. $item->chisomoi .'</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">'. $item->chisocu .'</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">'. $item->chisothang .'</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">0</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">0</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">'. $item->chisothang .'</td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
                  <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
                </tr>';
                foreach($arCTHD as $cthd){
                  if($item->idhdd == $cthd->mahd){
                    $tmp .= '    <tr style=" border-bottom: 1px solid #000;">
                    <td style="border-right: 1px solid #000;"></td>
                    <td style="border-right: 1px solid #000;"></td>
                    <td style="border-right: 1px solid #000;"></td>
                    <td style="border-right: 1px solid #000;"></td>
                    <td style="border-right: 1px solid #000;"></td>
                    <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">'. $cthd->chisomuc .'</td>
                    <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">'. $cthd->dongiact .'</td>
                    <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;text-align: right;">'. number_format($cthd->dongiact*$cthd->chisomuc) .'</td>
                  </tr>';
                }
              }
              $tmp .= ' <tr style=" border-bottom: 1px solid #000;">
              <td style="border-right: 1px solid #000;" colspan="5" style="color:#000;">Cộng:</td>
              <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">'. $item->chisothang .'</td>
              <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
              <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">'. number_format($item->tongtien) .'</td>
            </tr>';
            $tmp .= '  <tr style=" border-bottom: 1px solid #000;">
            <td colspan="5" style="text-align:left;border-right: 1px solid #000;">Thuế suất GTGT: 10%</td>
            <td colspan="2" style="text-align:left;border-right: 1px solid #000;">Thuế GTGT:</td>
            <td style="text-align:right;border-right: 1px solid #000;">'. number_format($item->tongtien*0.1) .'</td>
          </tr>';
          $tmp .= '<tr style=" border-bottom: 1px solid #000;">
          <td colspan="7" style="color:#000;border-right: 1px solid #000;">
            Tổng cộng tiền thanh toán:  
          </td>
          <td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">'. number_format($item->tongtien+$item->tongtien*0.1) .'</td>
        </tr>
        <tr style=" border-bottom: 1px solid #000;">
            <td colspan="8" style="color:#000; ">Số tiền viết bằng chữ: '.convert_number_to_words($item->tongtien+$item->tongtien*0.1).' đồng </td>
          
          </tr>
        ';

      

$d = getdate(strtotime($item->created_at));
      $create = $d['mday'].'/'.$d['mon'].'/'.$d['year']; 
      $tmp .= ' <tr style=" border-bottom: 1px solid #000;">
      <td style="text-align: right;color: #000;font-weight: bold;" colspan="8">

        <p>Ngày ký: '. $create .'</p>
        <p>Người ký (Ông/Bà): CÔNG TY ĐIỆN LỰC THĂNG BÌNH</p>
      </td>
    </tr>
    <tr style=" border-bottom: 1px solid #000;">
      <td style="text-align: left;color: #000" colspan="8">
        <p style="font-weight: bold;">Lưu ý:</p>
        <p>- Khi khách hàng nhận được giấy báo này, Khách hàng vui lòng thanh toán trong vòng 5 ngày tại các điểm thu gần nhất.</p>
        <p>-  Quý khách hàng có thể thanh toán UNT, UNC qua Ngân hàng, qua thẻ ATM hoặc các điểm giao dịch có quầy thu tiền điện.</p>
        <p>-  Nếu khách hàng trả bằng Ủy nhiệm chi, Khi trả gửi kèm giấy báo này.</p>
      </td>

    </tr>
  </table>
</div>
</div>
</div>
</td>
<td>
  <a href="'. route('admin.hoadon.exportpdf',[$item->idhdd]).'">Xuất hóa đơn</a>
</td>
<td>
  <div onclick="changeTT('. $item->idhdd .')">';
    if($item->trangthai == 1)  {
      $tmp .= '    <input type="checkbox" checked="checked">';
    }
    else{
       $tmp .= '      <input type="checkbox">';
    }
  $tmp .= '  </div>
</td>
</tr>';      
echo $tmp;
}
}
}
public function ajax(Request $request){
  $id = $request->aid;
  $arItem = HoaDon::find($id);
  if($arItem->trangthai == 0){
    $arItem->trangthai = 1;
  }else{
    $arItem->trangthai = 0;
  }
  $arItem->update();
  return response()->json($arItem);
}

}
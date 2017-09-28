<?php
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
?>
<html>
<head>
<title>Hóa đơn tiền điện</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="{{$adminUrl}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{$adminUrl}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{$adminUrl}}/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="{{$adminUrl}}/js/jquery-1.10.2.min.js"></script>
<script src="{{$adminUrl}}/js/amcharts.js"></script>	
<script src="{{$adminUrl}}/js/serial.js"></script>	
<script src="{{$adminUrl}}/js/light.js"></script>	
<script src="{{$adminUrl}}/js/radar.js"></script>	
<link href="{{$adminUrl}}/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="{{$adminUrl}}/css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="{{$adminUrl}}/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="{{$adminUrl}}/js/skycons.js"></script>

<script src="{{$adminUrl}}/js/jquery.easydropdown.js"></script>
<link rel="Shortcut Icon" href="{{$adminUrl}}/images/NewIcon.ico" type="image/x-icon" />

<!--//skycons-icons-->
</head> 
@foreach($item as $val)
<?php  
$date = $val->created;
$d = getdate(strtotime($date));
$ngay = $d['mon'].'/'.$d['year'];
?>

<body style="background-color:#F9FDFE !important">
<div  class="modal-content"  style="padding: 30px">
	<h2 class="modal-title" style="margin-top: 0px;text-align: center;color: #000" id="myModalLabel">CHI TIẾT HÓA ĐƠN TIỀN ĐIỆN</h2>
	<p style="text-align: center;">Tháng: {{ $ngay }}</p>
	<p style="color: #354E9B;font-weight: bold;">CÔNG TY ĐIỆN LỰC THĂNG BÌNH - Điện lực Quảng Nam</p>
	<p style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">Công ty Điện lực huyện Thăng Bình - Quảng Nam</span></p>
	<span style="color: #354E9B">Điện thoại: <span style="color: black">19001909</span></span>
	<span style="color: #354E9B;margin-left: 25px">Mã số thuế: <span style="color: black">0400101394005</span></span>
	<span style="color: #354E9B;margin-left: 25px">ĐT sửa chữa: <span style="color: black">19001909</span></span>
	<p style="color: #354E9B;font-weight: bold;margin-top: 20px;margin-bottom: 5px">Tên khách hàng: <span style="color: black">{{ $val->tenkh }}</span></p>
	<span style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">{{ $val->diachi }}</span></span><br>
	<span style="color: #354E9B;">Điện thoại: <span style="color: black">{{ $val->sdt }} </span></span><br>
	<span style="color: #354E9B;">Mã khách hàng: <span style="color: black">{{ $val->idd }}</span></span>
	<table border="1" cellpadding="0" cellspacing="0" style="border: 1px solid black;margin:20 auto !important;" class="table hoadon table-hover" >
		<tr style="background: #DAD7D7 !important ; border-bottom: 5px solid #000;font-size: 10px">
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">CHỈ SỐ MỚI</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">CHỈ SỐ CŨ</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">ĐN TIÊU THỤ</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">ĐN TRỰC TIẾP</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">ĐN TRỪ PHỤ</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">ĐN THỰC TẾ</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;color: #354E9B !important;text-align: center;">ĐƠN GIÁ</th>
			<th style="padding-top:5px;padding-bottom:5px;font-weight:bold;;color: #354E9B !important;text-align: center;">THÀNH TIỀN</th>
		</tr>
		<tr style=" padding: 10px !important;font-size: 11px">
			<td style="color: #354E9B !important;text-align: center"> {{ $val->chisomoi }} </td>
			<td style="color: #354E9B !important;text-align: center">{{ $val->chisocu }}  </td>
			<td style="color: #354E9B !important;text-align: center">{{ $val->chisothang }}</td>
			<td style="color: #354E9B !important;text-align: center">0</td>
			<td style="color: #354E9B !important;text-align: center">0</td>
			<td style="color: #354E9B !important;text-align: center">{{ $val->chisothang }}</td>
			<td style="color: #354E9B !important"></td>
			<td style="color: #354E9B !important"></td>
		</tr>
		@foreach($arCTHD as $cthd)
		@if($val->id == $cthd->mahd)
		<tr style=" font-size: 11px">
			<td style=""></td>
			<td style=""></td>
			<td style=""></td>
			<td style=""></td>
			<td style=""></td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;"> {{ $cthd->chisomuc }}</td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;"> {{ $cthd->dongiact }}</td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;"> {{ number_format($cthd->dongiact*$cthd->chisomuc) }}</td>
		</tr>
		@endif
		@endforeach
		<tr style=" font-size: 12px;">
			<td colspan="5" style="color:#000;padding-left: 10px;">Cộng:</td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;">{{ $val->chisothang }} </td>
			<td style="color: #354E9B !important"></td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;"> {{ number_format($val->tongtien) }} </td>
		</tr>
		<tr style=" font-size: 12px;">
			<td colspan="5" style="text-align:left;padding-left: 10px;">Thuế suất GTGT: 10%</td>
			<td colspan="2" style="text-align:left;padding-left: 10px;">Thuế GTGT:</td>
			<td style="text-align:right;padding-right: 10px;">{{ number_format($val->tongtien*0.1) }}  </td>
		</tr>
		<tr style=" font-size: 12px;">
			<td colspan="7" style="color:#000;padding-left: 10px;">
				Tổng cộng tiền thanh toán:	
			</td>
			<td style="color: #354E9B !important;text-align: right;padding-right: 10px;"> {{ number_format($val->tongtien+$val->tongtien*0.1) }} </td>

		</tr>
		<tr style=" font-size: 12px;">
			<td colspan="8" style="color:#000; padding-left: 10px;"><?php echo 'Số tiền viết bằng chữ: '.convert_number_to_words($val->tongtien+$val->tongtien*0.1).' đồng '; ?></td>
		</tr>
		<?php $d = getdate(strtotime($val->created_at));
		$create = $d['mday'].'/'.$d['mon'].'/'.$d['year']; ?>
		<tr style=" font-size: 12px;border-bottom: none;">
			<td style="text-align: right;color: #000;font-weight: bold;" colspan="8">

				<p>Ngày ký: {{$create}}</p>
				<p>Người ký (Ông/Bà): CÔNG TY ĐIỆN LỰC THĂNG BÌNH</p>
			</td>
		</tr>
		<tr style=" font-size: 13px;border-top: none;">
			<td style="text-align: left;color: #000;padding-left: 10px;" colspan="8">
				<p style="font-weight: bold;">Lưu ý:</p>
				<p>- Khi khách hàng nhận được giấy báo này, Khách hàng vui lòng thanh toán trong vòng 5 ngày tại các điểm thu gần nhất.</p>
				<p>-  Quý khách hàng có thể thanh toán UNT, UNC qua Ngân hàng, qua thẻ ATM hoặc các điểm giao dịch có quầy thu tiền điện.</p>
				<p>-  Nếu khách hàng trả bằng Ủy nhiệm chi, Khi trả gửi kèm giấy báo này.</p>
			</td>
		</tr>
	</table>
</div>
</body>
@endforeach
</html>

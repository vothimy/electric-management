@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
<!--/forms-->
@if(Session::has('msg'))

    <?php
    $msg = Session::get('msg');
        echo $msg;
    ?>
@endif
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
<div class="forms-main">
<h2 class="inner-tittle">Hóa đơn xã {{ $arThon->tenxa }} - thôn {{ $arThon->tenthon }}</h2>

<div class="graph-form">
<div class="validation-form">
@if(Session::has('msg'))
	<script type="text/javascript">alert("{{ Session::get('msg') }}")</script>
@endif
	<form action="{{ route('admin.hoadon.pdf') }}" method="POST">
	{{ csrf_field() }}
		<div class="vali-form">
			<?php 
			$thang = date("m");
			$nam = date("Y");
			?>
			<div class="col-md-3 form-group1">
				<label class="control-label">Tháng</label>
				<select name="thang" class="form-control" id="thanghd">
					@for($i = 1;$i <= 12; $i++)
					<option value="{{$i}}">{{$i}}</option>
					@endfor
				</select>
			</div>
			<div class="col-md-3 form-group1">
				<label class="control-label">Năm</label>
				<select name="nam" class="form-control" id="namhd">
					@for($i = 2017;$i >= 2016; $i--)
						@if($i == $nam)
							<option value=" {{$i}}" selected="selected">{{$i}}</option>
						@else
							<option value="{{$i}}">{{$i}}</option>
						@endif
					@endfor
				</select>
			</div>
			<div class="col-md-3 form-group1">
			<!-- <label class="control-label">hjg</label> -->
				<div style="margin-top: 24px;"><input type="submit" name="" value="In hóa đơn theo tháng"></div>
			</div>
			<div class="clearfix"> </div>
		</div>
		</form>
		<div class="clearfix"> </div>
		<table class="table table-hover">
			<thead> 
				<tr>
					<th>Mã NDĐ</th> 
					<th>Tên người dùng</th> 
					<th>Loại điện</th> 
					<th>Mã đồng hồ</th> 
					<th>Chỉ số cũ</th> 
					<th>Chỉ số mới</th> 
					<th>Tổng tiền</th> 
					<th>Tháng</th> 
					<th>Xem chi tiết</th> 
					<th>Xuất hóa đơn</th>
					<th>TT nộp tiền</th>
				<!-- <th><input type="submit" name="" id="inhoadon" value="In hóa đơn"></th>  -->
				</tr> 
			</thead>
			<tbody  id="result"> 
				@foreach($arItems as $item)
				<?php  
				$date = $item->created;
				$d = getdate(strtotime($date));
				$ngay = $d['mon'].'/'.$d['year'];
				?>
				<tr> 
					<th scope="row">{{$item->idd}}</th> 
					<td>{{ $item->tenkh }}</td> 						
					@foreach($arLD as $ld)
					@if($item->mald == $ld->id)
					<td>{{ $ld->tenloai}}</td>							
					@endif
					@endforeach	
					<td>{{  $item->madh }}</td> 
					<td>{{ $item->chisocu }}</td>						
					<td>{{ $item->chisomoi }}</td> 
					<td>{{number_format($item->tongtien) }} VNĐ</td>
					<td>{{ $ngay }}</td> 
					<td><a style="cursor: pointer;" data-toggle="modal" data-target="#HienHInh{{$item->idhdd}}">Xem chi tiết</a>

						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="HienHInh{{$item->idhdd}}">
							<div class="modal-dialog modal-lg" style="width: 80%;">
								<div  class="modal-content"  style="padding: 30px">
									<h2 class="modal-title" style="margin-top: 0px;text-align: center;color: #354E9B" id="myModalLabel">CHI TIẾT HÓA ĐƠN TIỀN ĐIỆN</h2>
									<p style="text-align: center;">Tháng: {{$ngay}}</p>
									<p style="color: #354E9B;font-weight: bold;">CÔNG TY ĐIỆN LỰC THĂNG BÌNH - Điện lực Quảng Nam</p>
									<p style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">Công ty Điện lực huyện Thăng Bình - Quảng Nam</span></p>
									<span style="color: #354E9B">Điện thoại: <span style="color: black">19001909</span></span>
									<span style="color: #354E9B;margin-left: 60px">Mã số thuế: <span style="color: black">0400101394005</span></span>
									<span style="color: #354E9B;margin-left: 60px">ĐT sửa chữa: <span style="color: black">19001909</span></span>
									<p style="color: #354E9B;font-weight: bold;margin-top: 20px;margin-bottom: 5px">Tên khách hàng: <span style="color: black">{{ $item->tenkh }}</span></p>
									<span style="color: #354E9B;margin-bottom: 5px">Địa chỉ: <span style="color: black">{{ $item->diachi }}</span></span>
									<span style="color: #354E9B;margin-left: 60px">Điện thoại: <span style="color: black">0{{ $item->sdt }}</span></span>
									<span style="color: #354E9B;margin-left: 60px">Mã khách hàng: <span style="color: black;">{{ $item->idd }}</span></span>
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
											<td style="font-size: 12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">{{ $item->chisomoi }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">{{ $item->chisocu }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">{{ $item->chisothang }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">0</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">0</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: center">{{ $item->chisothang }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
										</tr>
										@foreach($arCTHD as $cthd)
										@if($item->id == $cthd->mahd)
										<tr style=" border-bottom: 1px solid #000;">
											<td style="border-right: 1px solid #000;"></td>
											<td style="border-right: 1px solid #000;"></td>
											<td style="border-right: 1px solid #000;"></td>
											<td style="border-right: 1px solid #000;"></td>
											<td style="border-right: 1px solid #000;"></td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">{{ $cthd->chisomuc }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">{{ $cthd->dongiact }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;text-align: right;">{{ number_format($cthd->dongiact*$cthd->chisomuc) }}</td>
										</tr>
										@endif
										@endforeach
										<tr style=" border-bottom: 1px solid #000;">
											<td style="border-right: 1px solid #000;" colspan="5" style="color:#000;">Cộng:</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">{{ $item->chisothang }}</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important"></td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right;">{{ number_format($item->tongtien) }}</td>
										</tr>
										<tr style=" border-bottom: 1px solid #000;">
											<td colspan="5" style="text-align:left;border-right: 1px solid #000;">Thuế suất GTGT: 10%</td>
											<td colspan="2" style="text-align:left;border-right: 1px solid #000;">Thuế GTGT:</td>
											<td style="text-align:right;border-right: 1px solid #000;">{{ number_format($item->tongtien*0.1) }}</td>
										</tr>
										<tr style=" border-bottom: 1px solid #000;">
											<td colspan="7" style="color:#000;border-right: 1px solid #000;">
												Tổng cộng tiền thanh toán:	
											</td>
											<td style="font-size:12px;border-right: 1px solid #000;color: #354E9B !important;text-align: right">{{ number_format($item->tongtien+$item->tongtien*0.1) }}</td>

										</tr>
										<tr style=" border-bottom: 1px solid #000;">
											<td colspan="8" style="color:#000; "><?php echo 'Số tiền viết bằng chữ: '.convert_number_to_words($item->tongtien+$item->tongtien*0.1).' đồng '; ?></td>
										</tr>
										<?php $d = getdate(strtotime($item->created_at));
										$create = $d['mday'].'/'.$d['mon'].'/'.$d['year']; ?>
										<tr style=" border-bottom: 1px solid #000;">
											<td style="text-align: right;color: #000;font-weight: bold;" colspan="8">

												<p>Ngày ký: {{ $create }}</p>
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
					@if($item->tongtien==0)
						<a href="javascript:void(0)" onclick="return window.alert('Bạn không thể xuất hóa đơn này. Vui lòng tính tiền');">Xuất hóa đơn</a>
					@else
						<a href="{{ route('admin.hoadon.exportpdf',[$item->idhdd]) }}">Xuất hóa đơn</a>
					@endif
						
					</td>
					<td>
						<div onclick="changeTT({{ $item->idhdd }})">
							@if($item->trangthai == 1)	
								<input type="checkbox" checked="checked">
							@else
								<input type="checkbox">
							@endif
						</div>
					</td>
				</tr> 
				@endforeach
			</tbody> 
		</table>
		<div class="clearfix"> </div>
</div>
</div>
</div> 
<!--//forms-->	
<script type="text/javascript">
	function changeTT(id){
		$.ajax({
			url: '{{ route("admin.hoadon.ajax") }}',  
			type: 'get',
			cache: false,
			data: {
				aid : id
			},
			success: function(result){
				if(result.trangthai == 1){
					alert('Đã nộp tiền');
				}else{
					alert('Bỏ trạng thái đã nộp');
				}						
			}
		});     
	}
</script>
</div>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#inhoadon").click(function(){
			var thang = $("select[id='thanghd']").val();
			var nam = $("select[id='namhd']").val();
			if(thang == 0){
				alert("Chọn tháng để in hóa đơn");
				
			}else{
				var x = confirm("Bạn có chắc chắn in hóa đơn tháng "+thang+" năm "+nam + "?");
				
		        if(x){
		            $.ajax({
						url:'hoadon/pdf',
						type:'get',
						data:{'thang':thang,'nam':nam},
						success:function(data){
							console.log(data);
							// $('body').html(data);
						}
					});
		        }else{
		            return false;
		        }
		        
			}
			
		})
	})
</script> -->
@stop
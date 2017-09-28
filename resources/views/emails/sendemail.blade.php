<h2 style="text-align: center;">Thông báo đăng ký điện</h2>
<p>Bạn vừa đăng ký sử dụng điện trực tuyến</p>
<p>Tên khách hàng: {{ $name }}</p>
<p>Số điện thoại: {{ $sdt }}</p>
<p>CMND: {{ $cmnd }}</p>
<p>Nơi cấp: {{ $noicap }}</p>
<p>Ngày cấp: {{ $ngaycap }}</p>
<p>Địa chỉ dùng điện: {{ $diachi }}</p>

@foreach($arThon as $item)
	@if($item->id==$thon)
		<p>Thôn: {{ $item->tenthon }}</p>
	@endif
@endforeach
<p>Xã: {{ $xa }}</p>
<br>
<p>Bạn vui lòng chuẩn bị ít nhất 1 trong các loại giấy tờ sau để quá trình đăng ký sử dụng điện của quý khách được hoàn thành sớm nhất có thể:</p>
<p style="margin-left: 10px">1. Hộ khẩu thường trú/Sổ tạm trú</p>
<p style="margin-left: 10px">2. Giấy chứng nhận quyền sử dụng đất/Giấy chứng nhận quyền sở hữu nhà</p>
<p style="margin-left: 10px">3. Quyết định phân nhà/Hợp đồng mua bán nhà/Hợp đồng ủy quyền quản lý & sử dụng nhà/Hợp đồng thuê nhà</p>
<p style="margin-left: 10px">4. Giấy ủy quyền của các hộ sử dụng điện chung/ Danh sách hộ dùng chung</p>
<p style="margin-left: 10px">5. Bản xác nhận đã thanh toán hết nợ tiền điện của Hộ tách mới</p>


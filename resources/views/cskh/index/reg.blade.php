@extends('templates.public.master')
@section('main-content')

<div class="container content" id="topscroll">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="reg-page" >
				<div class="reg-header">
					<h2>Đăng ký tài khoản</h2>
					@if(Session::has('msg'))
						<div class="form-title" style="color: red">{{ Session::get('msg') }}</div>
					@endif
				</div>

				<form action="{{ route('public.index.reg') }}" method="POST" id="formDK">
					{{ csrf_field() }}
					<div class="input-group margin-bottom-10">
						<span class="input-group-addon"><i class="fa fa-file-code-o" aria-hidden="true"></i></span>
						<input name="txtMaKH" type="text" id="ContentPlace_txtMaKH" placeholder="Mã khách hàng" class="form-control" />
					</div>
					<div class="input-group margin-bottom-10">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input name="txtUsername" type="text" id="ContentPlace_txtUsername" placeholder="Tên người dùng" class="form-control" />
					</div>
					<div class="input-group margin-bottom-10">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input name="txtMatKhau" type="password" id="ContentPlace_txtMatKhau" placeholder="Mật khẩu" class="form-control" />
					</div>
					<div class="input-group margin-bottom-10">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input name="txtMatKhau_Nhaplai" type="password" id="ContentPlace_txtMatKhau_Nhaplai" placeholder="Nhập lại mật khẩu" class="form-control" />
					</div>
					<div class="row">
						<div class="col-md-6" style="right:5%;"> 
							<input type="submit" name="btnDangky" value="Đăng ký"  id="ContentPlace_btnDangky" class="btn-u pull-right" />
						</div>   
					</div>
				</form>
				<div class="input-group">
					<span id="ContentPlace_cvlVerifyPassword" style="color:Red;visibility:hidden;">Mật khẩu nhập lại không đúng, vui lòng kiểm tra lại</span>
					<span id="ContentPlace_revTenDangNhap" style="color:Red;visibility:hidden;">Tên đăng nhập không được có khoảng trắng hoặc tiếng Việt có dấu</span>
				</div>
				<hr />
				<h4>Nếu không nhớ mã khách hàng ?</h4>
				<p>Bạn có thể 
					<a onclick="hidenotic()();" id="ContentPlace_btnTim" class="color-green" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnTim&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" style="border-bottom: none;padding:0px;">Bấm vào đây</a> để tìm mã khách hàng.</p>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top:15px">
			<div class="col-md-12">
				<div class="form-horizontal">
					<!--Div tìm kiếm-->

					<!--End Div tìm kiếm-->

					<!--Kết quả tìm kiếm-->

					<!--End Kết quả tìm kiếm-->
				</div>
			</div>
		</div><!--/row-->
	</div><!--/container-->        
</div> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#formDK").validate({
			ignore:[],
			debug:false,
			rules:{
				"txtMatKhau":{
					required:true,
					minlength:8
				},
				"txtMatKhau_Nhaplai":{
					required:true,
					equalTo:"#ContentPlace_txtMatKhau"
				},
				"txtMaKH":{
					required:true,
				},
				"txtUsername":{
					required:true,
				},
			},
			messages:{
				"txtMatKhau":{
					required:"Không được để trống mật khẩu",
					minlength:"Mật khẩu phải dài tối thiểu 8 ký tự",
				},
				"txtMatKhau_Nhaplai":{
					required:"Không được để trống mật khẩu",
					equalTo:"Nhập mật khẩu trùng với mật khẩu cũ"
				},
				"txtMaKH":{
					required:"Không được để trống mã khách hàng",
				},
				"txtUsername":{
					required:"Không được để trống tên khách hàng",
				},
			}
		})	
	});
</script>
@stop
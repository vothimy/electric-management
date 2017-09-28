@extends('templates.public.master')
@section('main-content')
<style>
    label{color:#666;font-size: 14px;font-weight: 400;}
    .sky-form .checkbox i
        {
            top:12px;    
        }
     .sky-form .radio i
        {
            top:12px;    
        }
</style>
    <!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Yêu cầu cấp điện mới</h1>
				<ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
					<li><a href='Default.aspx'>Trang chủ</a></li>
					<li><a href='#'>Cấp điện mới</a></li>
					<li class='active'>Yêu cầu cấp điện mới</li>
				</ul>
			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->
        <!--=== Blog Posts ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<!-- Tab v3 -->
				<div class="row tab-v3" >
					<div class="col-lg-3">
						<ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#sinhhoat" data-toggle="tab" >Cấp điện sinh hoạt</a></li>
                          
						</ul>
					</div>
					<div class="col-lg-9">
                        <div class="tag-box tag-box-v3 form-page" >
					        <div class="tab-content" style="background:white;border:none">
                                <!--Sinh hoạt-->
							    <div class="tab-pane fade in active" id="sinhhoat">
                                      

<style>
    th{text-align:center;}
    label{color:#666;font-size: 14px;font-weight: 400;}
</style>
<div id="ContentPlace_ctrlCapdienSH2_UpdatePanel">
	
		    <script type="text/javascript" language="javascript">
		        function hidenotic() {
		            $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);

		            // Chỉ nhập số cho số CMND
		            $("#ContentPlace_ctrlCapdienSH2_txtSoCMND").keydown(function (e) {
		                // Allow: backspace, delete, tab, escape, enter and .
		                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		                // Allow: Ctrl+A, Command+A
                        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
		                // Allow: home, end, left, right, down, up
                        (e.keyCode >= 35 && e.keyCode <= 40)) {
		                    // let it happen, don't do anything
		                    return;
		                }
		                // Ensure that it is a number and stop the keypress
		                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		                    e.preventDefault();
		                }
		            });
                    // Remove các textbox có require, thì mới ĐK được
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtCustomerName").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtTenDaiDien").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtSoCMND").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtCA").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtHouseNo").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtStreet").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_TxtPhonenum").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_tbCongsuatsudung").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienNgoaiSH1_txtmucdich").removeAttr("required");
		            $("#ContentPlace_ctrlCapdienSH2_TxtPhonenum").removeAttr("required");
		        }
		        Sys.Application.add_load(hidenotic);
		    </script>
<!-- Horizontal Form -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<center><h3> Cấp điện mới sinh hoạt - Cấp điện hạ áp mục đích sinh hoạt</h3></center>
	<form action="{{ route('public.hosothutuc.capdienyeucau') }}" method="POST" id="frmDK">
	{{ csrf_field() }}
	<div class="panel-body">
		<div id="ContentPlace_ctrlCapdienSH2_Div1" class="form-horizontal" role="form">
			
			
            <div class="form-group">
				<label class="col-lg-4 control-label">Tên khách hàng</label>
                
				<div class="col-lg-8">
					<input name="tenkh" type="text" id="ContentPlace_ctrlCapdienSH2_txtCustomerName" class="form-control color-blue" placeholder="Nhập tên người đăng ký mua điện"  />
				</div>
			</div>
            
            <div class="form-group">
				<label class="col-lg-4 control-label">Số CMND/Hộ chiếu</label>
				<div class="col-lg-4">
					<input name="cmnd" type="text" maxlength="10" id="ContentPlace_ctrlCapdienSH2_txtSoCMND" class="form-control color-blue" placeholder="Nhập số CNND/Hộ chiếu"  />
				</div>
				<div class="col-lg-4">
					<input name="noicap" type="text" id="ContentPlace_ctrlCapdienSH2_txtCA" class="form-control color-blue" placeholder="Nhập nơi cấp"  />
				</div>
			</div>
            <div class="form-group">
				<label class="col-lg-4 control-label">Cấp ngày</label>
                <div class="col-lg-2">
                	<?php
                		$ngay = date("d");
                		$thang = date("m");
                		$nam = date("Y");
                	?>
					<select name="ngay" id="ContentPlace_ctrlCapdienSH2_ddNgayCap" class="form-control color-blue">
						@for($i=1;$i<=31;$i++)
							@if($i==$ngay)
								<option selected="selected" value="{{$i}}">{{$i}}</option>
							@endif
							<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</div>
                <label class="col-lg-1 control-label">Tháng</label>
                <div class="col-lg-2">
					<select name="thang" id="ContentPlace_ctrlCapdienSH2_ddThangCap" class="form-control color-blue">
						@for($i=1;$i<=12;$i++)
							@if($i==$thang)
								<option selected="selected" value="{{$i}}">{{$i}}</option>
							@endif
								<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</div>
                <label class="col-lg-1 control-label">Năm</label>
                <div class="col-lg-2">
					<select name="nam" id="ContentPlace_ctrlCapdienSH2_ddNamCap" class="form-control color-blue">
						@for($i=1915;$i<=2017;$i++)
							@if($i==$nam)
								<option selected="selected" value="{{$i}}">{{$i}}</option>
							@endif
								<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</div>
			</div>

            <div class="form-group">
				<label class="col-lg-4 control-label">Địa chỉ dùng điện</label>
				<div class="col-lg-8">
					<input name="diachi" type="text" id="ContentPlace_ctrlCapdienSH2_txtAddUseElec" class="form-control color-blue" placeholder="Nhập địa chỉ dùng điện" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">Xã</label>
				<div class="col-lg-8">
                    <select name="xa" id="ContentPlace_xa" class="form-control color-blue">
                    <option value="">-----Chọn Xã-----</option>
                    	@foreach($arXa as $itemx)
                    		<option value="{{$itemx->id}}">{{$itemx->tenxa}}</option>
                    	@endforeach
					</select>
				</div>
			</div>
            <div class="form-group">
				<label class="col-lg-4 control-label">Thôn</label>
				<div class="col-lg-8">
                    <select name="thon" id="ContentPlace_thon" class="form-control color-blue">
                    	<option value="">-----Chọn Thôn-----</option>
                    	@foreach($arThon as $item)
                    		<option value="{{$item->id}}">{{$item->loai}}</option>
                    	@endforeach
					</select>
				</div>
			</div>
            <div class="form-group">
				<label class="col-lg-4 control-label">Email(Liên hệ)</label>
				<div class="col-lg-8">
					<input name="email" type="text" id="ContentPlace_ctrlCapdienSH2_txtEmail" class="form-control color-blue" placeholder="Nhập Email liên hệ" />
				</div>
			</div>
            <div class="form-group">
				<label class="col-lg-4 control-label">Số điện thoại(Liên hệ)</label>
				<div class="col-lg-8">
					<input name="sdt" type="text" id="ContentPlace_ctrlCapdienSH2_TxtPhonenum" class="form-control color-blue" placeholder="Nhập SĐT liên hệ"  />
				</div>
			</div>
            <input type="hidden" name="mucdichsudung" value="4">
            
			<div class="form-group">
				<div class="col-lg-offset-5 col-lg-2 col-md-12 " style="text-align:center;">
                    <input type="submit" name="submit1" value="Đăng ký" id="ContentPlace_ctrlCapdienSH2_btnDangkySH" class="btn-u btn-u-blue" />
				</div>
                <div class="col-lg-4">
				    <div id="loading">
					    <div id="ContentPlace_ctrlCapdienSH2_UpdateProgress" style="display:none;">
		 
							    <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
						    
	</div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
    </form>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#frmDK").validate({
            ignore:[],
            debug:false,
            rules:{
                "tenkh":{
                    required:true,
                },
                "cmnd":{
                    required:true,
                     minlength:9,
                    maxlength:9,
                    digits:true
                },
                "noicap":{
                    required:true,
                },
                "diachi":{
                    required:true,
                },
                "email":{
                    required:true,
                    email:true
                },
                "sdt":{
                    required:true,
                    minlength:10,
                    maxlength:11,
                    digits:true
                },
                "xa":{
                    required:true,
                },
            },
            messages:{
            	"tenkh":{
                    required:"<p style='color:red'>Không được để trống tên khách hàng</p>",
                },
                "cmnd":{
                    required:"<p style='color:red'>Không được để trống chứng minh nhân dân</p>",
                    minlength:"<p style='color:red'>Số CNND phải tối thiểu 9 số</p>",
                    maxlength:"<p style='color:red'>Số CNND phải tối đa 9 số</p>",
                    digits:"<p style='color:red'>Số CMND phải nhập số</p>"
                },
                "noicap":{
                    required:"<p style='color:red'>Không được để trống nơi cấp</p>",
                },
                "diachi":{
                    required:"<p style='color:red'>Không được để trống tên địa chỉ dùng điện</p>",
                },
                "xa":{
                    required:"<p style='color:red'>Chọn xã</p>",
                },
                "sdt":{
                    required:"<p style='color:red'>Không được để trống số điện thoại</p>",
                    minlength:"<p style='color:red'>Số điện thoại phải tối thiểu 10 số</p>",
                    maxlength:"<p style='color:red'>Số điện thoại phải tối đa 11 số</p>",
                    digits:"<p style='color:red'>Số điện thoại phải nhập số</p>"
                },
                "email":{
                    required:"<p style='color:red'>Không được để trống email</p>",
                    email:"<p style='color:red'>Email không hợp lệ</p>",
                }
            }
        })  
    });
</script>	
<script type="text/javascript">
	$(document).ready(function(){
	$("#ContentPlace_xa").change(function(){
		var id = $(this).val();
		$.ajax({
			url:"{{route('public.hosothutuc.change1')}}",
			type:'get',
			data:{'id':id},
			success:function(data){
				console.log(data);
				$('#ContentPlace_thon').html(data);
			}
		});
	})
})


</script>
</div>
							    </div><!--End Cấp điện sinh hoạt-->
 <!--........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................Cấp điện ngoài sinh hoạt..........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................-->
					
						    </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
      
@stop
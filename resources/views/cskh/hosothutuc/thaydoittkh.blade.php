@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center}
        label{color:#666;font-size: 14px;font-weight: 400;}
    </style>
    <div id="ContentPlace_UpdatePanel">
	
    <script type="text/javascript" language="javascript">
        function hidenotic() {
            $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);
        }
        Sys.Application.add_load(hidenotic);
    </script>
    <!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left"><span id="ContentPlace_lbTieude">Yêu cầu thay đổi thông tin khách hàng</span></h1>
				<ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
					<li><a href='Default.aspx'>Trang chủ</a></li>
					<li><a href='#'>Hồ sơ thủ tục</a></li>
                    <li><a href='#'>Thay đổi dùng điện</a></li>
					<li class='active'>Thay đổi thông tin khách hàng</li>
				</ul>
			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->
        <!--=== Content ===-->
		<div class="bg-color-light">
	        <div class="container content-sm">
		        <div class="row tab-v3" >
			        <div class="col-lg-12">
                        <div class="tag-box tag-box-v3 form-page" >
				            <div class="tab-content" style="background:white;border:none">
					            <div class="form-horizontal" >
					                  <blockquote>
	                                        <h2>Thông tin hiện tại của khách hàng</h2>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Mã Khách hàng</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$lblMA_KHANG" type="text" value="PC05II0730790" id="ContentPlace_lblMA_KHANG" disabled="disabled" class="aspNetDisabled form-control color-blue" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Tên Khách hàng</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$lblTEN_KHANG" type="text" value="Bùi Quang Hưng" id="ContentPlace_lblTEN_KHANG" disabled="disabled" class="aspNetDisabled form-control color-blue" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Địa chỉ</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$lblAddress" type="text" value=" Xã Điện Nam Bắc" id="ContentPlace_lblAddress" disabled="disabled" class="aspNetDisabled form-control color-blue" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
		                                        <label class="col-lg-3 control-label">SĐT Liên hệ</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$lblTel" type="text" value="01655734708" id="ContentPlace_lblTel" disabled="disabled" class="aspNetDisabled form-control color-blue" />
		                                        </div>
	                                        </div>
                                        </blockquote>
                                        <blockquote>
	                                        <h2>Thông tin khách hàng cần thay đổi</h2>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Địa chỉ</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$txtdiachi" type="text" id="ContentPlace_txtdiachi" class="form-control color-blue" placeholder="Nhập địa chỉ" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">SĐT liên lạc lại</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$dthoaillac" type="text" id="ContentPlace_dthoaillac" class="form-control color-blue" placeholder="Nhập số điện thoại liên lạc lại" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Email</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$txtemail" type="text" id="ContentPlace_txtemail" class="form-control color-blue" placeholder="Nhập địa chỉ email" />
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Lý do thay đổi(bắt buộc)</label>
		                                        <div class="col-lg-5">
			                                        <input name="ctl00$ContentPlace$txtlydo" type="text" id="ContentPlace_txtlydo" class="form-control color-blue" placeholder="Nhập lý do thay đổi" />
		                                        </div>
	                                        </div>
                                        </blockquote>
                                        <blockquote>
                                            <div class="form-group">
		                                        <div class="col-lg-4"></div>
		                                        <div class="col-lg-2">
			                                        <input type="submit" name="ctl00$ContentPlace$btnLay" value="Đăng ký" id="ContentPlace_btnLay" class="form-control btn-u btn-u-blue btn-mar" style="left:0px;" />
		                                        </div>
		                                        <div class="col-lg-1">
			                                        <div id="loading">
				                                        <div id="ContentPlace_UpdateProgress" style="display:none;">
		 
						                                        <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
					                                        
	</div>
			                                        </div>
		                                        </div>
	                                        </div>
	                                        <div class="form-group">
		                                        <div class="col-8">
			                                        
		                                        </div>
		                                        <div class="col-2"></div>
	                                        </div>
                                     </blockquote>
					            </div>
				            </div>
                        </div>
			        </div>
		        </div>
	        </div>
        </div>
    
</div>
    
@stop
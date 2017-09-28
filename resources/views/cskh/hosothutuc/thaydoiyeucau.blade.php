@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center;}
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
				<h1 class="pull-left"><span id="ContentPlace_lbTieude">Yêu cầu thay đổi công suất</span></h1>
				<ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
					<li><a href='Default.aspx'>Trang chủ</a></li>
					<li><a href='#'>Hồ sơ thủ tục</a></li>
                    <li><a href='#'>Thay đổi dùng điện</a></li>
					<li class='active'>Yêu cầu thay đổi công suất</li>
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
					                <div class="form-group">
	                                    <label class="col-lg-3 control-label">Mã Khách hàng</label>
	                                    <div class="col-lg-5">
		                                    <input name="ctl00$ContentPlace$lbMakh" type="text" id="ContentPlace_lbMakh" class="aspNetDisabled form-control color-blue" />
	                                    </div>
                                    </div>
                                    <div class="form-group">
	                                    <label class="col-lg-3 control-label">Tên Khách hàng</label>
	                                    <div class="col-lg-5">
		                                    <input name="ctl00$ContentPlace$lbTenKH" type="text" id="ContentPlace_lbTenKH"  class="aspNetDisabled form-control color-blue" />
	                                    </div>
                                    </div>
                                    <div class="form-group">
	                                    <label class="col-lg-3 control-label">Địa chỉ</label>
	                                    <div class="col-lg-5">
		                                    <input name="ctl00$ContentPlace$lbDiachi" type="text" id="ContentPlace_lbDiachi" class="aspNetDisabled form-control color-blue" />
	                                    </div>
                                    </div>
                                    <div class="form-group">
	                                    <label class="col-lg-3 control-label">Địa chỉ mới (nếu có)</label>
	                                    <div class="col-lg-5">
		                                    <input name="ctl00$ContentPlace$tbDiachimoi" type="text" id="ContentPlace_tbDiachimoi" class="form-control color-blue" placeholder="Nhập địa chỉ mới (nếu có).." />
	                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">SĐT Liên hệ</label>
	                                    <div class="col-lg-5">
		                                    <input name="ctl00$ContentPlace$tbsdt" type="text" id="ContentPlace_tbsdt" class="form-control color-blue" placeholder="Nhập số điện thoại liên hệ.." />
	                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Đang sử dụng vào mục đích</label>
	                                    <div class="col-lg-5">
		                                    <select name="ctl00$ContentPlace$drMucdich" id="ContentPlace_drMucdich" class="form-control color-blue">
		<option value="SH">Sinh hoạt</option>
		<option value="SX">Sản xuất</option>
		<option value="KDDV">Kinh doanh dịch vụ</option>
		<option value="KHAC">Kh&#225;c</option>

	</select>
	                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Vị trí lắp đặt hệ thống đo đếm hiện tại</label>
	                                    <div class="col-lg-5">
		                                    <select name="ctl00$ContentPlace$drVitri" id="ContentPlace_drVitri" class="form-control color-blue">
		<option value="TN">Trong nh&#224;</option>
		<option value="NT">Ngo&#224;i trụ</option>
		<option value="KHAC">Kh&#225;c</option>

	</select>
	                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Lý do đề nghị thay đổi công suất</label>
	                                    <div class="col-lg-5">
		                                    <textarea name="ctl00$ContentPlace$ghichu" rows="3" cols="20" id="ContentPlace_ghichu" class="form-control color-blue" placeholder="Nhập lý do đề nghị thay đổi công suất.." style="width:100%;resize:vertical;">
</textarea>
	                                    </div>
                                    </div>
                                    <br />
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
	                                    <div class="col-2"></div>
	                                    <div class="col-8">
		                                    
	                                    </div>
	                                    <div class="col-2"></div>
                                    </div>
					            </div>
				            </div>
                        </div>
			        </div>
		        </div>
	        </div>
        </div><!--=== End Content ===-->
    
</div>


@stop
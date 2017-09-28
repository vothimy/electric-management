@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center;}
        label{color:#666;font-size: 14px;font-weight: 400;}
        input[type="submit"] {position:static}
    </style>
    <script type="text/javascript" language="javascript">
        function UpdatePanelOnly() {

            // Ẩn/Hiện Tel
            $('#chkSMS').change(function () {
                if ($(this).is(":checked")) {
                    $("#txtTelephone").prop('disabled', false);
                }
                else
                { $("#txtTelephone").prop('disabled', true); }
            });

            // Ẩn/Hiện Email
            $('#chkEmail').change(function () {
                if ($(this).is(":checked")) {
                    $("#txtEmail").prop('disabled',false);
                }
                else
                { $("#txtEmail").prop('disabled', true); }
            });

            // Ẩn/Hiện Bank
            $('#chkBank').change(function () {
                if ($(this).is(":checked")) {
                    $("#drlBank").prop('disabled', false);
                    $("#txtBankNumber").prop('disabled', false); 
                }
                else {
                    $("#drlBank").prop('disabled', true);
                    $("#txtBankNumber").prop('disabled', true);
                }
            });


            // Chỉ nhập số cho số CMND
            $("#txtBankNumber").keydown(function (e) {
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
            // Chỉ nhập số cho công suất
            $("#txtTelephone").keydown(function (e) {
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
        }
        Sys.Application.add_load(UpdatePanelOnly);
    </script>
    <!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left"><span id="ContentPlace_lbTieude">Nhận thông tin qua Email/SMS</span></h1>
				<ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
					<li><a href='Default.aspx'>Trang chủ</a></li>
					<li class='active'>Nhận thông tin qua Email/SMS</li>
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
			                            <label class="col-lg-2 control-label">Điện thoại</label>
			                            <div class="col-lg-4">
				                            <input name="ctl00$ContentPlace$txtTelephone" type="text" id="txtTelephone" disabled="disabled" class="aspNetDisabled form-control color-blue" placeholder="Vui lòng nhập số điện thoại" />
			                            </div>
                                        <div class="col-lg-4">
				                            <label class="checkbox"><input id="chkSMS" type="checkbox" name="ctl00$ContentPlace$chkSMS" /><i></i>Gửi qua SMS</label>
			                            </div>
		                            </div>
                                    <div class="form-group">
			                            <label class="col-lg-2 control-label">Email</label>
			                            <div class="col-lg-4">
                                            <input name="ctl00$ContentPlace$txtEmail" type="text" value="buihung.bqh@gmail.com" id="txtEmail" class="form-control color-blue" placeholder="Vui lòng nhập Email" />
			                            </div>
                                        <div class="col-lg-4">
                                            <label class="checkbox"><input id="chkEmail" type="checkbox" name="ctl00$ContentPlace$chkEmail" checked="checked" /><i></i>Gửi qua Email</label>
			                            </div>
		                            </div>
                                    <div class="form-group">
			                            <label class="col-lg-2 control-label">Ngân hàng</label>
			                            <div class="col-lg-4">
				                            <select name="ctl00$ContentPlace$drlBank" id="drlBank" disabled="disabled" class="aspNetDisabled form-control color-blue">
	<option selected="selected" value="">------Vui l&#242;ng chọn ng&#226;n h&#224;ng------</option>
	<option value="970401">Ng&#226;n h&#224;ng Ngoại thương Việt Nam</option>
	<option value="970402">Ng&#226;n h&#224;ng Đầu tư v&#224; Ph&#225;t triển Việt Nam</option>
	<option value="970403">Ng&#226;n h&#224;ng C&#244;ng thương Việt Nam</option>
	<option value="970404">Ng&#226;n h&#224;ng NN &amp; PTNN Việt Nam</option>
	<option value="970406">Ng&#226;n h&#224;ng HSBC</option>
	<option value="970407">Ng&#226;n h&#224;ng CitiBank</option>
	<option value="970408">Ng&#226;n h&#224;ng TMCP An B&#236;nh</option>
	<option value="970409">Ng&#226;n h&#224;ng Kỹ thương Việt Nam</option>

</select>
			                            </div>
                                        <div class="col-lg-4">
                                            <label class="checkbox"><input id="chkBank" type="checkbox" name="ctl00$ContentPlace$chkBank" /><i></i>Nhu cầu thu qua ngân hàng</label>
			                            </div>
		                            </div>
                                    <div class="form-group">
			                            <label class="col-lg-2 control-label">Tài khoản ngân hàng</label>
			                            <div class="col-lg-4">
				                            <input name="ctl00$ContentPlace$txtBankNumber" type="text" id="txtBankNumber" disabled="disabled" class="aspNetDisabled form-control color-blue" placeholder="Vui lòng nhập tài khoản ngân hàng" />
			                            </div>
		                            </div>
                                    <div class="form-group">
                                        <div class="col-lg-2"></div>
			                            <div class="col-lg-4">
				                            <input type="submit" name="ctl00$ContentPlace$btnRegister" value="Đăng ký" id="ContentPlace_btnRegister" class="form-control btn-u btn-u-blue" style="width:50%" />
			                            </div>
		                            </div>
					            </div>
				            </div>
                        </div>
			        </div>
		        </div>
	        </div>
        </div><!--=== End Content ===-->
   

    
@stop
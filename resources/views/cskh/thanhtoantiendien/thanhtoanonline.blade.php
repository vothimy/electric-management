@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center;}
        label{color:#666;font-size: 14px;font-weight: 400;}

         table td {           
            vertical-align: middle;            
            display: table-cell;
            position: relative;
            display:inline-block;
        }


    </style>
    
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left"><span id="ContentPlace_lbTieude">Thanh toán tiền điện trực tuyến</span></h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li><a href='#'>Thanh toán tiền điện</a></li>
                    <li><a href='#'>Hình thức thanh toán tiền điện</a></li>
                    <li class='active'>Thanh toán tiền điện trực tuyến</li>
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
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10">
                                        <p><u>Lưu ý</u>:“Dịch vụ này chỉ áp dụng cho những khách hàng đã có tài khoản Internet Banking. Đối với những khách hàng chưa đăng kí tài khoản Internet Banking, vui lòng đến tại quầy giao dịch của ngân hàng để làm thủ tục lấy user và mật khẩu.”</p>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã khách hàng</label>
                                    <div class="col-lg-4">
                                        <input name="ctl00$ContentPlace$txtMaKHANG" type="text" value="PC05II0730790" id="ContentPlace_txtMaKHANG" class="form-control color-blue" placeholder="Nhập mã khách hàng" />
                                    </div>
                                    <label class="col-lg-2 control-label">Điện thoại</label>
                                    <div class="col-lg-4">
                                        <input name="ctl00$ContentPlace$TextBox1" type="text" id="ContentPlace_TextBox1" class="form-control color-blue" placeholder="Nhập số điện thoại" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-4">
                                        <input name="ctl00$ContentPlace$TextBox2" type="text" id="ContentPlace_TextBox2" class="form-control color-blue" placeholder="Nhập Email" />
                                    </div>
                                    <label class="col-lg-2 control-label">Mã xác thực</label>
                                    <div class="col-lg-2">
                                        <input name="ctl00$ContentPlace$txtVerifyCode" type="text" id="ContentPlace_txtVerifyCode" class="form-control color-blue" placeholder="Nhập mã xác thực" />
                                    </div>
                                    <div class="col-lg-2">
                                         <div style='background-color:White;' ><img src="CaptchaImage.axd?guid=67f04b16-4f1b-4d30-9609-0bc5bc82dffa" border="0" alt="Captcha" width="90" height="31" /></div>
                                        <span id="ContentPlace_Label1" style="color: #FF3300"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <center><h3>Vui lòng nhấp vào biểu tượng của ngân hàng cần thanh toán</h3></center>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12" style="text-align:center">
                                        <div class="thanhtoan_tructuyen">
                                            <div class="bank_logos">
                                                <table id="ContentPlace_dtlBank" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl00$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_0" value="True" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl00$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_0" src="{{ $publicUrl }}/Images/Bank/AnBinh.gif" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlace$dtlBank$ctl00$btnBankClick&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl01$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_1" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl01$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_1" src="{{ $publicUrl }}/Images/Bank/Vietcombank.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl02$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_2" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl02$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_2" src="{{ $publicUrl }}/Images/Bank/Techcombank.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl03$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_3" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl03$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_3" src="{{ $publicUrl }}/Images/Bank/BIDV.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl04$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_4" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl04$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_4" src="{{ $publicUrl }}/Images/Bank/Vietinbank.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl05$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_5" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl05$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_5" src="{{ $publicUrl }}/Images/Bank/Agribank.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl06$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_6" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl06$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_6" src="{{ $publicUrl }}/Images/Bank/VPBank.png" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl07$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_7" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl07$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_7" src="{{ $publicUrl }}/Images/Bank/Sacombank.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl08$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_8" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl08$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_8" src="{{ $publicUrl }}/Images/Bank/MB.jpg" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl09$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_9" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl09$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_9" src="{{ $publicUrl }}/Images/Bank/Payoo.png" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl10$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_10" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl10$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_10" src="{{ $publicUrl }}/Images/Bank/LienViet.png" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl11$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_11" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl11$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_11" src="{{ $publicUrl }}/Images/Bank/VIB.png" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td><td align="center" valign="middle">
                                                            <div class="logo">
                                                                <input name="ctl00$ContentPlace$dtlBank$ctl12$hddCPC_CONNECTION" type="hidden" id="ContentPlace_dtlBank_hddCPC_CONNECTION_12" value="False" />
                                                                <span><input type="image" name="ctl00$ContentPlace$dtlBank$ctl12$btnBankClick" id="ContentPlace_dtlBank_btnBankClick_12" src="{{ $publicUrl }}/Images/Bank/ECPAY.png" style="border-width:0px;height:43px;width:119px;" /></span>
                                                            </div>
                                                    </td>
    </tr>
</table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  margin-bottom-30">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
            </div>
        </div>
@stop
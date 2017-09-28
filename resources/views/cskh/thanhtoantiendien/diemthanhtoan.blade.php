@extends('templates.public.master')
@section('main-content')
<style>
    input[type="submit"] {position:static}
</style>
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Điểm thanh toán</h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li class='active'>Thanh toán tiền điện</a></li>
                </ul>
            </div>
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->
        <!--=== Blog Posts ===-->
        <div class="bg-color-light">
            <div class="container content-sm">
                <!-- Tab v3 -->
                <div class="row tab-v3" >
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#home-2" data-toggle="tab">Điểm thanh toán Điện lực</a></li>
                            <li><a href="#profile-2" data-toggle="tab" >Điểm thanh toán Ngân hàng</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tag-box tag-box-v3 form-page" >
                        <div class="tab-content" style="background:white;border:none">
                            <div class="tab-pane fade in active" id="home-2">
                                <h3>ĐIỂM THANH TOÁN ĐIỆN LỰC</h3>
                                

<style>
    th{text-align:center;}
    label{color:#666;font-size: 14px;font-weight: 400;}
    /*gridview*/
        .table table  tbody  tr  td a ,
        .table table  tbody  tr  td  span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
        }

        .table table > tbody > tr > td > span {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7;
        }

        .table table > tbody > tr > td:first-child > a,
        .table table > tbody > tr > td:first-child > span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        }

        .table table > tbody > tr > td:last-child > a,
        .table table > tbody > tr > td:last-child > span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        }

        .table table > tbody > tr > td > a:hover,
        .table   table > tbody > tr > td > span:hover,
        .table table > tbody > tr > td > a:focus,
        .table table > tbody > tr > td > span:focus {
        z-index: 2;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd;
        }
        /*end gridview */
</style>

<!--=== Content ===-->
            <div id="ContentPlace_ctrlDiemthutiendien_dienluc2_UpdatePanel">
    
                <script type="text/javascript" language="javascript">
                    function hidenotic() {
                        $("#ContentPlace_ctrlDiemthutiendien_nganhang1_divThongbaoKH").show(0).delay(20000).hide(0);
                    }
                    Sys.Application.add_load(hidenotic);
                </script>
                <!--Div tìm kiếm-->
                <div class="form-horizontal sky-form" style="border:none">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tỉnh/Thành</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$ddlTinh" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$ddlTinh\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlace_ctrlDiemthutiendien_dienluc2_ddlTinh" class="form-control color-blue">
        <option value="44">Quảng B&#236;nh</option>
        <option value="45">Quảng Trị</option>
        <option value="46">Thừa Thi&#234;n Huế</option>
        <option value="48">Đ&#224; Nẵng</option>
        <option selected="selected" value="49">Quảng Nam</option>
        <option value="51">Quảng Ng&#227;i</option>
        <option value="52">B&#236;nh Định</option>
        <option value="54">Ph&#250; Y&#234;n</option>
        <option value="55">Kh&#225;nh H&#242;a</option>
        <option value="62">Kon Tum</option>
        <option value="64">Gia Lai</option>
        <option value="66">Đắk Lắk</option>
        <option value="67">Đắk N&#244;ng</option>

    </select>
                            </div>
                            <label class="col-lg-2 control-label">Quận/Huyện</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$ddlHuyen" id="ContentPlace_ctrlDiemthutiendien_dienluc2_ddlHuyen" class="form-control color-blue">
        <option value="">-- Tất cả --</option>
        <option value="49502">Th&#224;nh phố Tam Kỳ</option>
        <option value="49503">Th&#224;nh phố Hội An</option>
        <option value="49504">Huyện T&#226;y Giang</option>
        <option value="49505">Huyện Đ&#244;ng Giang</option>
        <option value="49506">Huyện Đại Lộc</option>
        <option value="49507">Huyện Điện B&#224;n</option>
        <option value="49508">Huyện Duy Xuy&#234;n</option>
        <option value="49509">Huyện Quế Sơn</option>
        <option value="49510">Huyện Nam Giang</option>
        <option value="49511">Huyện Phước Sơn</option>
        <option value="49512">Huyện Hiệp Đức</option>
        <option value="49513">Huyện Thăng B&#236;nh</option>
        <option value="49514">Huyện Ti&#234;n Phước</option>
        <option value="49515">Huyện Bắc Tr&#224; My</option>
        <option value="49516">Huyện Nam Tr&#224; My</option>
        <option value="49517">Huyện N&#250;i Th&#224;nh</option>
        <option value="49518">Huyện Ph&#250; Ninh</option>
        <option value="49519">Huyện N&#244;ng Sơn</option>

    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Loại quầy thu</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$ddlLoai" id="ContentPlace_ctrlDiemthutiendien_dienluc2_ddlLoai" class="form-control color-blue">
        <option value="0">Quầy Điện lực</option>
        <option value="3">Điểm thu tập trung</option>

    </select>
                            </div>
                            <label class="col-lg-2 control-label">Địa chỉ</label>
                            <div class="col-lg-4">
                                <input name="ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$txtDiaChi" type="text" id="ContentPlace_ctrlDiemthutiendien_dienluc2_txtDiaChi" class="form-control color-blue" placeholder="Nhập địa chỉ" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2"></div>        
                            <div class="col-lg-2 par_btn ">
                                <input type="submit" name="ctl00$ContentPlace$ctrlDiemthutiendien_dienluc2$btnSearch" value="Xem" id="ContentPlace_ctrlDiemthutiendien_dienluc2_btnSearch" class="form-control btn-u btn-u-blue" />
                            </div>
                            <div class="col-lg-1">
                                <div id="loading">
                                    <div id="ContentPlace_ctrlDiemthutiendien_dienluc2_UpdateProgress" style="display:none;">
         
                                            <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
                                        
    </div>
                                </div>
                            </div>
                        </div>
                
                    <!--Thông báo-->
                    <div class="form-group">
                        <div class="col-lg-12">
                            
                        </div>
                    </div><!--End Thông báo-->
                    <!--Kết quả tìm kiếm-->
                    
                </div>
            
</div>
<!--=== End Content ===-->
                            </div>
                            <div class="tab-pane fade in" id="profile-2">
                                <h3>ĐIỂM THANH TOÁN NGÂN HÀNG</h3>
                                

<style>
        th{text-align:center;}
        label{color:#666;font-size: 14px;font-weight: 400;}
    </style>

<!--=== Content ===-->
            <div id="ContentPlace_ctrlDiemthutiendien_nganhang1_UpdatePanel">
    
                <script type="text/javascript" language="javascript">
                    function hidenotic() {
                        $("#ContentPlace_ctrlDiemthutiendien_nganhang1_divThongbaoKH").show(0).delay(20000).hide(0);
                    }
                    Sys.Application.add_load(hidenotic);
                </script>
                <!--Div tìm kiếm-->
                <div class="form-horizontal sky-form" style="border:none">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tỉnh/Thành</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$ddlTinh" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$ddlTinh\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlace_ctrlDiemthutiendien_nganhang1_ddlTinh" class="form-control color-blue">
        <option value="44">Quảng B&#236;nh</option>
        <option value="45">Quảng Trị</option>
        <option value="46">Thừa Thi&#234;n Huế</option>
        <option value="48">Đ&#224; Nẵng</option>
        <option selected="selected" value="49">Quảng Nam</option>
        <option value="51">Quảng Ng&#227;i</option>
        <option value="52">B&#236;nh Định</option>
        <option value="54">Ph&#250; Y&#234;n</option>
        <option value="55">Kh&#225;nh H&#242;a</option>
        <option value="62">Kon Tum</option>
        <option value="64">Gia Lai</option>
        <option value="66">Đắk Lắk</option>
        <option value="67">Đắk N&#244;ng</option>

    </select>
                            </div>
                            <label class="col-lg-2 control-label">Quận/Huyện</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$ddlHuyen" id="ContentPlace_ctrlDiemthutiendien_nganhang1_ddlHuyen" class="form-control color-blue">
        <option value="">-- Tất cả --</option>
        <option value="49502">Th&#224;nh phố Tam Kỳ</option>
        <option value="49503">Th&#224;nh phố Hội An</option>
        <option value="49504">Huyện T&#226;y Giang</option>
        <option value="49505">Huyện Đ&#244;ng Giang</option>
        <option value="49506">Huyện Đại Lộc</option>
        <option value="49507">Huyện Điện B&#224;n</option>
        <option value="49508">Huyện Duy Xuy&#234;n</option>
        <option value="49509">Huyện Quế Sơn</option>
        <option value="49510">Huyện Nam Giang</option>
        <option value="49511">Huyện Phước Sơn</option>
        <option value="49512">Huyện Hiệp Đức</option>
        <option value="49513">Huyện Thăng B&#236;nh</option>
        <option value="49514">Huyện Ti&#234;n Phước</option>
        <option value="49515">Huyện Bắc Tr&#224; My</option>
        <option value="49516">Huyện Nam Tr&#224; My</option>
        <option value="49517">Huyện N&#250;i Th&#224;nh</option>
        <option value="49518">Huyện Ph&#250; Ninh</option>
        <option value="49519">Huyện N&#244;ng Sơn</option>

    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Loại quầy thu</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$ddlLoai" id="ContentPlace_ctrlDiemthutiendien_nganhang1_ddlLoai" class="form-control color-blue">
        <option value="1">Quầy GD Ng&#226;n h&#224;ng</option>
        <option value="2">ATM Ng&#226;n H&#224;ng</option>

    </select>
                            </div>
                            <label class="col-lg-2 control-label">Ngân hàng</label>
                            <div class="col-lg-4 sky-form" style="border:none">
                                <select name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$drlNganhang" id="ContentPlace_ctrlDiemthutiendien_nganhang1_drlNganhang" class="form-control color-blue">
        <option value="970408">ABBank</option>
        <option value="970401">Vietcombank</option>
        <option value="970409">Techcombank</option>
        <option value="970402">BIDV</option>
        <option value="970403">Vietinbank</option>
        <option value="970404">Agribank</option>
        <option value="970418">VPBank</option>
        <option value="970423">Sacombank</option>
        <option value="970413">MBBank</option>
        <option value="970412">LienVietPostBank</option>
        <option value="970410">VIBank</option>

    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Địa chỉ</label>
                            <div class="col-lg-4">
                                <input name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$txtDiaChi" type="text" id="ContentPlace_ctrlDiemthutiendien_nganhang1_txtDiaChi" class="form-control color-blue" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="col-lg-2"></div>        
                            <div class="col-lg-2 par_btn " >
                                <input type="submit" name="ctl00$ContentPlace$ctrlDiemthutiendien_nganhang1$btnSearch" value="Xem" id="ContentPlace_ctrlDiemthutiendien_nganhang1_btnSearch" class="form-control btn-u btn-u-blue" />
                            </div>
                            <div class="col-lg-1">
                                <div id="loading">
                                    <div id="ContentPlace_ctrlDiemthutiendien_nganhang1_UpdateProgress" style="display:none;">
         
                                            <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
                                        
    </div>
                                </div>
                            </div>
                        </div>
                
                    <!--Thông báo-->
                    <div class="form-group">
                        <div class="col-lg-12">
                            
                        </div>
                    </div><!--End Thông báo-->
                    <!--Kết quả tìm kiếm-->
                    
                    <div id="ContentPlace_ctrlDiemthutiendien_nganhang1_div1" class="form-group">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 form-control" style="height:100%;border:none;">
                            <table style="margin-left:8px;margin-top:8px;">
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "http://www.vietcombank.com.vn/ATM/Default.aspx" target = "_blank">Danh sách điểm ATM VietcomBank</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "http://bidv.com.vn/chinhanh/ATM.aspx" target = "_blank">Danh sách điểm ATM BIDV</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "http://agribank.com.vn/71/1147/mang-luoi---atm-pos.aspx" target = "_blank">Danh sách điểm ATM AgriBank</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "https://card.vietinbank.vn/sites/home/vi/diem-dat-atm/" target = "_blank">Danh sách điểm ATM ViettinBank</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "https://card.vietinbank.vn/sites/home/vi/diem-dat-atm/" target = "_blank">Danh sách điểm ATM ViettinBank</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "http://www.dongabank.com.vn/atm" target = "_blank">Danh sách điểm ATM ngân hàng Đông Á</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "https://www.sc.com/vn/atms-and-branchs/acb-atms/vn/" target = "_blank">Danh sách điểm ATM Ngân hàng TMCP Á Châu</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "https://tpb.vn/mang-luoi-atm/" target = "_blank">Danh sách điểm ATM Ngân hàng Tiên Phong</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    </td>
                                    <td><a href = "https://mbbank.com.vn/mangluoi/Lists/ATM/AllItems.aspx" target = "_blank">Danh sách điểm ATM ngân hàng quân đội MB</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            
</div>
<!--=== End Content ===-->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Tab v3 -->
            </div>
        </div>

@stop
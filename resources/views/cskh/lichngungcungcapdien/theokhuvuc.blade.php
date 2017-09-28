@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center;}
        label{color:#666;font-size: 14px;font-weight: 400;}
        input[type="submit"] {position:static}
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
    
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left"><span id="ContentPlace_lbTieude">Lịch tạm ngừng cấp điện theo khu vực</span></h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li class='active'>Lịch theo khu vực</li>
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
                                <div id="ContentPlace_UpdatePanel1">
    
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Chọn Công ty điện lực</label>
                                            <div class="col-lg-4">
                                                <select name="ctl00$ContentPlace$drlDonvi" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlace$drlDonvi\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlace_drlDonvi" class="form-control color-blue">
        <option value="">-- Chọn đơn vị -- </option>
        <option value="PC">Tổng c&#244;ng ty Điện lực miền Trung</option>
        <option value="PC01">C&#244;ng ty Điện lực Quảng B&#236;nh</option>
        <option value="PC02">C&#244;ng ty Điện lực Quảng Trị</option>
        <option value="PC03">C&#244;ng ty Điện lực TT-Huế</option>
        <option selected="selected" value="PC05">C&#244;ng ty Điện lực Quảng Nam</option>
        <option value="PC06">C&#244;ng ty Điện lực Quảng Ng&#227;i</option>
        <option value="PC07">C&#244;ng ty Điện lực B&#236;nh Định</option>
        <option value="PC08">C&#244;ng ty Điện lực Ph&#250; Y&#234;n</option>
        <option value="PC10">C&#244;ng ty Điện lực Gia Lai</option>
        <option value="PC11">C&#244;ng ty Điện lực Kon Tum</option>
        <option value="PC12">C&#244;ng ty Điện lực Đăk Lăk</option>
        <option value="PC13">C&#244;ng ty Điện lực Đắk N&#244;ng</option>
        <option value="PP">C&#244;ng ty TNHH MTV Điện lực Đ&#224; Nẵng</option>
        <option value="PQ">C&#244;ng ty Cổ Phần Điện lực Kh&#225;nh Ho&#224;</option>

    </select>
                                            </div>
                                            <label class="col-lg-2 control-label">Chọn  Điện lực</label>
                                            <div class="col-lg-4">
                                                <select name="ctl00$ContentPlace$drlDienluc" id="ContentPlace_drlDienluc" class="form-control color-blue">
        <option value="">-- Tất cả -- </option>
        <option value="PC05AA">Điện lực Tam Kỳ</option>
        <option value="PC05BB">Điện Lực N&#250;i Th&#224;nh</option>
        <option value="PC05CC">Điện lực Hội An</option>
        <option value="PC05DD">Điện lực Duy Xuy&#234;n</option>
        <option value="PC05EE">Điện lực Ti&#234;n Phước</option>
        <option value="PC05FF">Điện lực Thăng B&#236;nh</option>
        <option value="PC05GG">Điện Lực Đại Lộc</option>
        <option value="PC05HH">Điện lực Hiệp Đức</option>
        <option selected="selected" value="PC05II">Điện lực Điện B&#224;n</option>
        <option value="PC05KK">Điện lực Đ&#244;ng Giang</option>
        <option value="PC05LL">Điện lực  B&#225;n điện L&#224;o</option>
        <option value="PC05MM">Điện lực Quế Sơn</option>
        <option value="PC05NN">Điện lực Tr&#224; My</option>
        <option value="PC05PP">Điện Lực Nam Giang</option>

    </select>
                                            </div>
                                        </div>
                                    
</div>
                                <!--Ngoài update panel-->
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Từ ngày</label>
                                    <div class="col-lg-4 sky-form" style="border:none">
                                        <label class="input color-blue">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input name="ctl00$ContentPlace$start" type="text" id="ContentPlace_start" placeholder="Ngày bắt đầu" />
                                        </label>
                                    </div>
                                    <label class="col-lg-2 control-label">Đến ngày</label>
                                    <div class="col-lg-4 sky-form" style="border:none">
                                        <label class="input color-blue">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input name="ctl00$ContentPlace$finish" type="text" id="ContentPlace_finish" placeholder="Ngày kết thúc" />
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Mã trạm</label>
                                    <div class="col-lg-4">
                                        <input name="ctl00$ContentPlace$tbMatram" type="text" id="ContentPlace_tbMatram" class="form-control color-blue" placeholder="Nhập mã trạm" />
                                    </div>
                                    <label class="col-lg-2 control-label">Mã sổ</label>
                                    <div class="col-lg-4">
                                        <input name="ctl00$ContentPlace$tbSoGCS" type="text" id="ContentPlace_tbSoGCS" class="form-control color-blue" placeholder="Nhập mã sổ GCS" />
                                    </div>
                                </div>
                                <div id="ContentPlace_UpdatePanel">
    
                                        <script type="text/javascript" language="javascript">
                                            function hidenotic() {
                                                $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);
                                            }

                                            Sys.Application.add_load(hidenotic);
                                        </script>
                                        <div class="form-group">
                                            <div class="col-lg-offset-8 col-lg-2">
                                                <input type="submit" name="ctl00$ContentPlace$btnLay" value="Lấy dữ liệu" id="ContentPlace_btnLay" class="form-control btn-u btn-u-blue" />
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
            </div>
        </div>
@stop
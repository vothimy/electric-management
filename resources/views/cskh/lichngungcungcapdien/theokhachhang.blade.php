@extends('templates.public.master')
@section('main-content')
<style>
        th{text-align:center}
        label{color:#666;font-size: 14px;font-weight: 400;}
        input[type="submit"] {position:static}
    </style>
    
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left"><span id="ContentPlace_lbTieude">Lịch tạm ngừng cung cấp điện theo khách hàng</span></h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li class='active'>Lịch theo khách hàng</li>
                </ul>
            </div>
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->
        <!--=== Blog Posts ===-->
        <div class="bg-color-light">
            <div class="container content-sm">
                <div class="row tab-v3" >
                    <div class="col-lg-12">
                        <div class="tag-box tag-box-v3 form-page" >
                        <div class="tab-content" style="background:white;border:none">
                            <div class="form-horizontal" >
                                 <div id="ContentPlace_UpdatePanel">
    
                                        <script type="text/javascript" language="javascript">
                                            function hidenotic() {
                                                $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);
                                            }
                                            Sys.Application.add_load(hidenotic);
                                        </script>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Mã khách hàng</label>
                                            <div class="col-lg-4">
                                                <input name="ctl00$ContentPlace$txtMA_KHANG" type="text" value="PC05II0730790" readonly="readonly" id="ContentPlace_txtMA_KHANG" class="form-control color-blue" placeholder="Nhập mã khách hàng" />
                                            </div>
                                            <div class="col-lg-2 par_btn">
                                                <input type="submit" name="ctl00$ContentPlace$btnLay" value="Lấy dữ liệu" id="ContentPlace_btnLay" class="form-control btn-u btn-u-blue" />
                                            </div>
                                            <div class="col-lg-4">
                                                <div id="loading">
                                                    <div id="ContentPlace_UpdateProgress" style="display:none;">
         
                                                            <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
                                                        
    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                
                                            </div>
                                            <div class="col-lg-1"></div>
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
@extends('templates.public.master')
@section('main-content')
 <style>
        th{text-align:center;}
        label{color:#666;font-size: 14px;font-weight: 400;}
        input[type="submit"] {position:static}
    </style>
    
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left"><span id="ContentPlace_lbTieude">Lịch sử thanh toán/sử dụng điện</span></h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li class='active'>Lịch sử thanh toán/sử dụng điện</li>
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
                                <div id="ContentPlace_UpdatePanel">
    
                                        <script type="text/javascript" language="javascript">
                                            function hidenotic() {
                                                $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);
                                            }
                                            Sys.Application.add_load(hidenotic);
                                        </script>
                                       @if(Session::has('msg'))
                                            <div class="form-title" style="color:#000 !important;font-weight: bold;">{{ Session::get('msg') }}</div>
                                        @endif
                                        <form action="{{ route('public.thanhtoantiendien.lichsu') }}" method="POST" id="frmXLS">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Mã khách hàng</label>
                                            <div class="col-lg-4">
                                            @if(isset($arKH))
                                                <input name="TxtMKH" type="text" value="{{ $arKH->id }}" id="ContentPlace_TxtMKH" class="form-control color-blue" placeholder="Nhập mã khách hàng" />
                                            @else
                                                <input name="TxtMKH" value="" id="ContentPlace_TxtMKH" class="form-control color-blue" placeholder="Nhập mã khách hàng" />

                                            @endif

                                            </div>
                                            <label class="col-lg-2 control-label"></label>
                                            <div class="col-lg-2">
                                                <input type="submit" name="ctl00$ContentPlace$btnLay" value="Lấy dữ liệu" id="ContentPlace_btnLay" class="form-control btn-u btn-u-blue" style="text-align: center;" ></a>
                                            </div>

                                           </form> 

                                            <div class="col-lg-4">
                                                <div id="loading">
                                                    <div id="ContentPlace_UpdateProgress" style="display:none;">
         
                                                            <img id="imgloading" alt="Đang lấy..." src="{{ $publicUrl }}/Images/Icon/loader.gif"/>
                                                        
    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <div class="col-lg-2">
                                            </div>
                                            <div class="col-lg-10">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                               <center><h3><span id="ContentPlace_lbTitle"></span></h3></center>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-2"></div>
                                            <div class="col-8">
                                                
                                            </div>
                                            <div class="col-2"></div>
                                        </div>
                                        <!--Div tìm kiếm-->
                                        @if(!isset($arKH))
                                            <p style="color:blue;text-align:center;">(Mã khách hàng: là  ký tự được in ở Giấy báo tiền điện hoặc Hóa đơn tiền điện)</p>
                                        @endif
                                        <!--End Div tìm kiếm-->

                                        <!--Kết quả tìm kiếm-->
                                        
                                        <!--End Kết quả tìm kiếm-->
                                    
</div>  
<script type="text/javascript">
    $(document).ready(function(){
        $("#frmXLS").validate({
            ignore:[],
            debug:false,
            rules:{
                "TxtMKH":{
                    required:true,
                }
            },
            messages:{
                "TxtMKH":{
                    required:"<p style='color:#000'>Không được để trống mã khách hàng</p>",
                }
            }
        })  
    });
</script>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
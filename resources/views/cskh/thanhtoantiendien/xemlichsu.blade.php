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
                                <div class="form-group">
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
                                <h2 style="text-align:center">TIỀN ĐIỆN VÀ NỢ CỦA KHÁCH HÀNG HIỆN TẠI</h2>
                                <table id="tblxemlichsu">
                                    <tr >
                                        <th >Tháng</th>
                                        <th>Năm</th>
                                        <th>Kỳ</th>
                                        <th>Số hóa đơn</th>
                                        <th>Loại hóa đơn</th>
                                        <th>Tiền phát sinh</th>
                                        
                                        <th>Tiền nợ</th>
                                    </tr>
                                    @foreach($arLS as $item)
                                    <?php  
                                        $date = $item->created_at;
                                        $d = getdate(strtotime($date));
                                        $thang = $d['mon'];
                                        $nam = $d['year'];
                                    ?>
                                        <tr>
                                            <td>{{ $thang }}</td>
                                            <td>{{ $nam }}</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>TD-PS</td>
                                            <td>{{ number_format($item->tongtien) }} VNĐ</td>
                                            
                                            @if($item->trangthai == 1)
                                                <td>0 VNĐ</td>
                                            @else
                                                <td>{{ number_format($item->tongtien) }} VNĐ</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </table>
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

                        <!--End Div tìm kiếm-->

                        <!--Kết quả tìm kiếm-->

                        <!--End Kết quả tìm kiếm-->

                    </div>  

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
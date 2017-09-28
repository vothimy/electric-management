@extends('templates.public.master')
@section('main-content')
<style type="text/css">
        input[type="submit"] {position:static}
        th{text-align:center;color:#555}
        td{color:#555}
        .modalBackground {
            background-color: Black;
            filter: alpha(opacity=90);
            opacity: 0.8;
        }
        .modalPopup {
            background-color: #FFFFFF;
            border-width: 3px;
            border-style: solid;
            border-color: black;
            padding-top: 10px;
            padding-left: 10px;
            width: 800px;
            height: 560px;
            overflow:auto;
        }
        th{text-align:center}
        label{color:#666;font-size: 14px;font-weight: 400;}
        .sky-form .form-control {
            padding: 0px;
        }
        .back-info {
                background: #006bb3;
                padding: 0 3px;
                font-size:14px;
                line-height:2;
        }  
        .tag-box {
            margin-bottom:5px;
        }
        .font-wei {
            font-weight: bold;
        }
        .tag-box .col-lg-4 > p , .tag-box  .margin-bottom-10  p{
            color: #555;
        }

        .tag-box .col-lg-4 > p > span , .tag-box .margin-bottom-10  p span {
            color: #006bb3;
        }
    </style>
    <script type="text/javascript">

            function pageLoad() {
                var mpe = $find("MPE");
                var background = mpe._backgroundElement;
                background.onclick = function () { $find("MPE").hide(); }

            }

            function PrintPanel() {
                var panel = document.getElementById("divHDDTImage");
                var printWindow = window.open('', '', 'height=640,width=800');
                printWindow.document.write('<html><head>');
                printWindow.document.write('</head><body >');
                printWindow.document.write(panel.innerHTML);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                setTimeout(function () {
                    printWindow.print();
                }, 500);
                return false;
            }

    </script>
    
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left"><span id="ContentPlace_lbTieude">Tra cứu hóa đơn điện tử</span></h1>
            <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                <li><a href='Default.aspx'>Trang chủ</a></li>
                <li><a href='#'>Thanh toán tiền điện</a></li>
                <li class='active'>Hóa đơn điện tử</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->
    <!--=== Content ===-->
    <div class="bg-color-light">
        <div class="container">
            <div class="row tab-v3" >
                <div class="col-lg-12">
                    <div class="tab-content" style="background:white">
                        <div class="form-horizontal" >
                            <div class="form-group">
                                <div id="needscroll" class="col-md-12">
                                    <div class="col-md-12 back-info margin-bottom-10">
                                        <div class="tag-box tag-box-v1 box-shadow font-wei">
                                            <h3 class="font-wei"> Thông tin khách hàng</h3>
                                            <div class="row margin-bottom-10 ">
                                                <div class="col-lg-4">
                                                    <p>- Thông tin khách hàng: <span id="ContentPlace_lblTenKHang" class="control-label">Bùi Quang Thắm</span></p>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p>- Địa chỉ: <span id="ContentPlace_lblDiaChi" class="control-label">Xã Điện Nam Bắc</span></p>                                                    
                                                </div>
                                                <div class="col-lg-4">
                                                    <p>- Khách hàng: <span id="ContentPlace_lblKhachHang" class="control-label">Tư nhân</span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p>- Mã khách hàng: <span id="ContentPlace_lblMaKHang" class="control-label">PC05II0730790</span></p>
                                                </div>
                                                <div class="col-lg-4">
                                                    <p>- Số hợp đồng: <span id="ContentPlace_lblSoHopDong" class="control-label">49507110485029</span></p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="ContentPlace_UpdatePanel1">
    
                                        <div class="col-lg-12">
                                            <div class="col-md-12 shadow-wrapper">
                                                <div class="tag-box tag-box-v1 box-shadow shadow-effect-1">
                                                    <h3 class="font-wei"> Tra cứu hóa đơn điện tử</h3>
                                                    <label class="col-lg-1 control-label" >Kỳ</label>
                                                    <div class="col-lg-1 sky-form" style="border:none">
                                                        <label class="input">
                                                            <select name="ctl00$ContentPlace$drlKy" id="ContentPlace_drlKy" class="form-control color-blue">
        <option selected="selected" value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
                                                        </label>
                                                    </div>
                                                    <label class="col-lg-1 control-label">Tháng</label>
                                                    <div class="col-lg-1 sky-form" style="border:none">
                                                        <label class="input">
                                                            <select name="ctl00$ContentPlace$drlThang" id="ContentPlace_drlThang" class="form-control color-blue">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option selected="selected" value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>

    </select>
                                                        </label>
                                                    </div>
                                                    <label class="col-lg-1 control-label">Năm</label>
                                                    <div class="col-lg-1 sky-form" style="border:none">
                                                        <label class="input">
                                                            <select name="ctl00$ContentPlace$drlNam" id="ContentPlace_drlNam" class="form-control color-blue">
        <option selected="selected" value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>

    </select>
                                                        </label>
                                                    </div>
                                                    <div class="div-btn">
                                                    <div class="col-lg-2 par_btn" ">
                                                        <input type="submit" name="ctl00$ContentPlace$btnTracuu" value="Tìm kiếm" onclick="hidenotic()();" id="ContentPlace_btnTracuu" class="form-control btn-u btn-u-blue" />
                                                    </div>
                                                    <div class="col-lg-2 chir_btn" ">
                                                        
                                                    </div>

                                                    
                                                    </div>
                                                    <div class="col-lg-1" style="text-align:left">
                                                        <div id="loading">
                                                            <div id="ContentPlace_UpdateProgress" style="display:none;">
         
                                                                    <img id="imgloading" alt="Đang lấy..." src="Images/Icon/loader.gif"/>
                                                                
    </div>
                                                        </div>
                                                    </div>
                                                    <div id="ContentPlace_Div1" class="row">
                                                        <div class="col-lg-12">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                        <div id="ContentPlace_divResult" style="margin-left:8px; margin-right:8px; margin-top: 10px">
                                                            <div>

    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12" style="height:100%;border:none;">
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div id="needscroll2" class="col-lg-12">
                                                <a id="btnShow" href="javascript:__doPostBack(&#39;ctl00$ContentPlace$btnShow&#39;,&#39;&#39;)"></a>
                                                <!-- ModalPopupExtender -->
                                                
                                                <div id="Panel1" class="modalPopup" align="center" style="display: none">
        
                                                    <div id="divHDDTImage">
                                                        <img id="ContentPlace_HDDTImage" src="" style="height:100%;width:100%;" />
                                                    </div>
                                                    <input type="submit" name="ctl00$ContentPlace$btnPrint" value="In" onclick="return PrintPanel();" id="ContentPlace_btnPrint" class="form-control btn-u btn-u-blue" style="width:60px" />
                                                    <input type="submit" name="ctl00$ContentPlace$btnClose" value="Đóng" id="ContentPlace_btnClose" class="form-control btn-u btn-u-blue" style="width:60px" />
                                                
    </div>
                                                <script type="text/javascript" language="javascript">
                                                    function hidenotic() {
                                                        $("#ContentPlace_divnotice").show(0).delay(20000).hide(0);
                                                        $("#ContentPlace_divThongbaoKH").show(0).delay(20000).hide(0);
                                                        $('#ContentPlace_btnTracuu').click(function () {
                                                            $('html, body').animate({
                                                                scrollTop: $("#needscroll").offset().top
                                                            },  300);
                                                        });
                                                        $('#scrolltoHD').click(function () {
                                                            $('html, body').animate({
                                                                scrollTop: $("#needscroll2").offset().top
                                                            }, 300);
                                                        });
                                                    }
                                                    Sys.Application.add_load(hidenotic);
                                                </script>
                                            </div>
                                        </div>
                                    
</div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12" style="height:100%;border:none;">
                                    <div class="col-md-12 shadow-wrapper">
                                        <div class="tag-box tag-box-v1 box-shadow shadow-effect-1">
                                            <h3 class="font-wei"> Hướng dẫn sử dụng</h3>
                                            <div class="row margin-bottom-10">
                                                <div class="tab-v2 col-md-12">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab-1" data-toggle="tab">Hướng dẫn tải hóa đơn</a></li>
                                                        <li><a href="#tab-2" data-toggle="tab">Hướng dẫn in hóa đơn</a></li>
                                                    </ul>
                                                    <div class="tab-content" style="background:white">
                                                        <div class="tab-pane fade in active" id="tab-1">                                                            
                                                            <div class="row">
                                                                <div class="col-md-12 md-margin-bottom-40">
                                                                    <b>HƯỚNG DẪN TẢI HÓA ĐƠN ĐIỆN TỬ</b><p>
                                                                    Hiện tại, việc tải về hóa đơn điện tử của khách hàng thường hay xảy ra lỗi không
                                                                    thể tải được do các trình duyệt internet thường được thiết lập mặc định chặn Pop-up
                                                                    Blocker. Những mô tả dưới đây được áp dụng trên các trình duyệt Mozilla Firefox,
                                                                    Google Chrome, Internet Explorer (IE).<p>
                                                                    Sau khi đăng nhập xem hóa đơn, chọn <b>Tra cứu -> Hóa đơn điện tử</b><p>
                                                                    <b>1. Đối với trình duyệt Mozilla Firefox</b><p>
                                                                    Khi click vào mục tải hóa đơn về, phía trên trình duyệt sẽ xuất hiện thông báo về
                                                                    Pop-up như hình dưới.
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/0.bmp" height="307" width="500" class="img-responsive">
                                                                    </p>
                                                                    Trong trường hợp này, hãy click vào Options, sẽ xuất hiện thông báo như hình dưới,
                                                                    chọn <b>Allow pop-up</b> để trình duyệt cho phép tải hóa đơn về
                                                                    <p align="center">
                                                                        <img width="500" height="205" class="img-responsive" alt="" src="Images/HDSD/2.bmp" />
                                                                    </p>
                                                                    Sau khi click chọn, trình duyệt sẽ cho tải về dữ liệu hóa đơn điện tử như hình dưới:
                                                                    <p align="center">
                                                                        <img width="500" height="359" class="img-responsive" alt="" src="Images/HDSD/3.bmp" />
                                                                    </p>
                                                                    <b>2. Đối với trình duyệt Google Chrome</b><p>
                                                                    Khi click để tải về hóa đơn điện tử, phía trên trình duyệt sẽ xuất hiện biểu tượng
                                                                    về Pop-up như hình dưới. Click chọn vào biểu tượng đó.
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/4.bmp" class="img-responsive" height="307" width="500">
                                                                    </p>
                                                                    Trên trình duyệt sẽ xuất hiện thông báo cho phép tải về như hình dưới, khi đó hãy
                                                                    chọn mục cho phép website: http://cskh.dnp.com.vn/, sau đó sẽ tải được hóa đơn điện
                                                                    tử về máy tính.
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/5.bmp" class="img-responsive" height="309" width="500">
                                                                    </p>
                                                                    <b>3. Đối với trình duyệt Internet Explorer (IE)</b><p>
                                                                    Xuất hiện mục “tải về” để cho tải về hóa đơn điện tử, như hình dưới. Click chọn
                                                                    vào biểu tượng đó.
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/6.bmp" class="img-responsive" height="322" width="500">
                                                                    </p>
                                                                    Tiếp theo trình duyệt sẽ hiện thông báo về Pop-up như hình dưới, click chọn Allow
                                                                    once để trình duyệt cho phép tải hóa đơn điện tử về
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/7.bmp" class="img-responsive" height="458" width="500">
                                                                    </p>
                                                                    <p class="MsoNormal" style="text-align: justify">
                                                                        &nbsp;
                                                                    </p>
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/8.bmp" class="img-responsive" height="457" width="500">
                                                                    </p>
                                                                    <p class="MsoNormal" style="text-align: justify">
                                                                        &nbsp;
                                                                    </p>
                                                                    <p align="center">
                                                                        <img alt="" src="Images/HDSD/9.bmp" class="img-responsive" height="201" width="500">
                                                                    </p>
                                                                    Hy vọng hướng dẫn trên đây sẽ giúp quý khách hàng sử dụng điện thuận lợi hơn trong
                                                                    quá trình sử dụng hóa đơn điện tử
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade in" id="tab-2">
                                                            <div class="margin-bottom-30"></div>
                                                            <div class="row">
                                                                <div class="col-md-12 md-margin-bottom-40">
                                                                    <b>HƯỚNG DẪN IN HÓA ĐƠN</b>
                                                                    <p>Để in hóa đơn, NSD thực hiện các bước sau:</p>
                                                                    <li><b>Bước 1:</b> Người dùng chọn "Xem hóa đơn", hóa đơn sẽ xuất hiện như hình dưới</li>
                                                                    <div style="text-align: center;">
                                                                        <img src="Images/help/C02_1.png" style="height: 115px; width: 551px" class="img-responsive">
                                                                    </div>
                                                                    <li><b>Bước 2:</b> Người dùng kích chọn "In hóa đơn".</li>
                                                                    <div style="text-align: center;">
                                                                        <img src="Images/help/C02_2.png" style="height: 600px; width: 593px" class="img-responsive">
                                                                    </div>
                                                                    <li><b>Bước 3:</b> Trình duyệt sẽ xuất hiện hình hộp thoại in như hình bên dưới. Hộp thoại hiển thị sẽ
                                                                        khác nhau tùy theo trình duyệt:</li>
                                                                    <ul style="list-style-type: circle;">
                                                                        <li><b>Trình duyệt IE</b>: người dùng chọn máy in và kích "Print", hóa đơn sẽ được in ra.</li>
                                                                        <div style="text-align: center;">
                                                                            <img src="Images/help/C02_3_ie.png" style="height: 343px; width: 392px" class="img-responsive">
                                                                        </div>
                                                                        <li><b>Trình duyệt Firefox</b>: người dùng chọn máy in và kích "OK", hóa đơn sẽ được in ra</li>
                                                                        <div style="text-align: center;">
                                                                            <img src="Images/help/C02_3_firefox.png" style="height: 261px; width: 389px" class="img-responsive">
                                                                        </div>
                                                                        <li><b>Trình duyệt Chrome</b>: trình duyệt hiển thị máy in mặc định, nếu người dùng muốn đổi
                                                                            sang máy in khác thì chọn "Change", nếu không thì kích chọn "Print", hóa đơn sẽ
                                                                            được in ra</li>
                                                                        <div style="text-align: center;">
                                                                            <img src="Images/help/C02_3_chrome.png" style="height: 596px; width: 500px" class="img-responsive">
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
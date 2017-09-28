@extends('templates.public.master')
@section('main-content')
@if(Session::has('msg'))

    <?php
    $msg = Session::get('msg');
        echo $msg;
    ?>
@endif
<div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner1.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner2.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner3.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner4.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner5.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner6.png" /></div>
        <div class="item">
            <img src="{{ $publicUrl }}/Images/Slider/banner7.png" /></div>
    </div>
    <!--=== Content Part ===-->
    <div class="container">
       
                <div class="row content-boxes-v1 heig-menu">
                    <div class="col-sm-2 sm-margin-bottom-40  ">
                        <h2 class="heading-sm ">
                            <a href="{{ route('public.hosothutuc.capdienyeucau') }}" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/new.png" class="img-responsive img-thumbnail  img-new  hvr-pulse-shrink  hvr-ripple-out" alt="">
                                </i>
                            </a>
                            <span>CẤP ĐIỆN MỚI</span>
                        </h2>

                        
                    </div>
                    <div class="col-sm-2 sm-margin-bottom-40">
                        <h2 class="heading-sm">
                            <a href="" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/hddt.png" class="img-responsive img-thumbnail  img-new  hvr-pulse-shrink" alt="">
                                </i>
                            </a>
                            <span>HÓA ĐƠN ĐIỆN TỬ</span>
                        </h2>
                        
                    </div>
                    <div class="col-sm-2 sm-margin-bottom-40">
                        <h2 class="heading-sm">
                            <a href="" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/cut.png" class="img-responsive img-thumbnail  img-new hvr-pulse-shrink " alt="">
                                </i>
                            </a>
                            <span>LỊCH TẠM NGỪNG CUNG CẤP ĐIỆN</span>
                        </h2>

                        
                    </div>
                    <div class="col-sm-2 sm-margin-bottom-40">
                        <h2 class="heading-sm">
                            <a href="" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/tttt.png" class="img-responsive img-thumbnail  img-new hvr-pulse-shrink " alt="">
                                </i>
                            </a>
                            <span>THANH TOÁN TRỰC TUYẾN</span>
                        </h2>

                        
                    </div>
                    <div class="col-sm-2 sm-margin-bottom-40">
                        <h2 class="heading-sm">
                            <a href="{{ route('public.hosothutuc.giabanle') }}" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/money.png" class="img-responsive img-thumbnail  img-new hvr-pulse-shrink " alt="">
                                </i>
                            </a>
                            <span>GIÁ BÁN ĐIỆN</span>
                        </h2>

                        
                    </div>

                    <div class="col-sm-2 sm-margin-bottom-40">
                        <h2 class="heading-sm">
                            <a href="" style="text-decoration: none">
                                <i>
                                    <img src="{{ $publicUrl }}/Images/Icon/Download.png" class="img-responsive img-thumbnail  img-new hvr-pulse-shrink " alt="">
                                </i>
                            </a>
                            <span>DỊCH VỤ MỚI</span>
                        </h2>

                        
                    </div>


                </div>
        <!-- End Bordered Large Boxes -->
        <!-- End Icon Boxes 23 -->
        <div class="col-md-12 md-margin-bottom-40">
            <hr class="devider devider-dotted">
        </div>
        <div class="col-md-12 md-margin-bottom-40">
            <div class="tag-box tag-box-v2 margin-bottom-40" style="font-size: 16px;">
                <marquee width="70%" direction="right">
                    <p id="changeword">
                        <a href="/frm_AppMobile.aspx">Ứng dụng Chăm sóc khách hàng trên thiết bị di động</a>
                        <i class="fa fa-recycle color-green"></i>
                        <a href="/frm_LapDatSauCTO.aspx">Dịch vụ lắp đặt sau công tơ</a>
                        <i class="fa fa-recycle color-green"></i>
                        <a href="/frm_DK_TrucTuyen.aspx">Đăng kí trực tuyến các dịch vụ về điện</a>
                    </p></marquee>
            </div>
        </div>
        <script>
//            (function () {
//                var words = [
//                'Ứng dụng Chăm sóc khách hàng trên thiết bị di động. <a href="/frm_AppMobile.aspx">Chi tiết..</a>',
//                'Dịch vụ lắp đặt sau công tơ. <a href="/frm_LapDatSauCTO.aspx">Chi tiết..</a>',
//                'Đăng kí trực tuyến các dịch vụ về điện. <a href="/frm_DK_TrucTuyen.aspx">Chi tiết..</a>'
//                ], i = 0;
//                        setInterval(function () {
//                            $('#changeword').fadeOut(function () {
//                                $(this).html(words[i = (i + 1) % words.length]).fadeIn();
//                            });
//                        }, 3000);

            //                    })();
            
            
        </script>
        <div class="col-md-9 md-margin-bottom-40">
            <a href="/frm_BannerTKD.aspx">
                <img class="img-responsive stylecustom hvr-hang banner-ta2" src="{{ $publicUrl }}/Images/tietkiem.png" style="width: 100%; height: auto;" />
            </a>
        </div>
        <div class="col-md-3 md-margin-bottom-40" >
            <a href="http://cpcemec.vn/">
                <img class="img-responsive" src="{{ $publicUrl }}/Images/bannerCPCEMEC.gif" style="width: 100%; height: auto;" />
            </a>
        </div>

        <div class="col-md-12 md-margin-bottom-40">
            <hr class="devider devider-dotted">
        </div>

        
        <!-- <div class="row  content-boxes-v1 ">
            <div class="col-sm-2  img-ta1 ">
                <div class=" thumbnail-style thumbnail-ta ">
                    <div class="thumbnail-img thumbnail-ta">
                        <div class="">
                            <a href="http://www.evn.com.vn/d6/event/Thang-Tri-an-Khach-hang-2016-2-11-51.aspx">
                                <img class="img-responsive stylecustom hvr-hang banner-ta1" src="{{ $publicUrl }}/Images/TriAn/banner03.png" style="width: 100%; height: auto;" />
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-sm-4  img-ta " >
                <div class=" thumbnail-style thumbnail-ta ">
                    <div class="thumbnail-img thumbnail-ta ">
                        <div class="">
                            <a href="frm_CPCTriAn.aspx" >
                                <img class="img-responsive stylecustom hvr-hang banner-ta1 " src="{{ $publicUrl }}/Images/TriAn/Banner.png" style="width: 100%; height: auto;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2  img-ta " >
                <div class=" thumbnail-style thumbnail-ta">
                    <div class="thumbnail-img thumbnail-ta">
                        <div class="">
                            <a href="frm_End.aspx">
                                <img class="img-responsive stylecustom hvr-hang banner-ta1" src="{{ $publicUrl }}/Images/TriAn/banner02.png" style="width: 100%; height: auto;" />
                            </a>
                        </div>
                        <h2 class="heading-sm">
                            <span class="heading-sm" style="color:#004d99; font-size:12px;">TÌM HIỂU HOẠT ĐỘNG THÁNG TRI ÂN KHÁCH HÀNG</span>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-2  img-ta ">
                <div class=" thumbnail-style thumbnail-ta ">
                    <div class="thumbnail-img thumbnail-ta">
                        <div class="">
                            <a href="frm_KH_MayMan.aspx" >
                                <img class="img-responsive stylecustom hvr-hang banner-ta1" src="{{ $publicUrl }}/Images/TriAn/banner04.png" style="width: 100%; height: auto;" />
                            </a>
                        </div>
                        <h2 class="heading-sm">
                            <span class="heading-sm" style="color:#004d99;font-size:12px;">CHƯƠNG TRÌNH "KHÁCH HÀNG MAY MẮN 2016"</span>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-2  img-ta ">
                <div class=" thumbnail-style thumbnail-ta ">
                    <div class="thumbnail-img thumbnail-ta">
                        <div class="">
                            <a href="frm_KetQuaTriAn.aspx" >
                                <img class="img-responsive stylecustom hvr-hang banner-ta1" src="{{ $publicUrl }}/Images/TriAn/banner05.png" style="width: 100%; height: auto;" />
                            </a>
                        </div>
                        <h2 class="heading-sm">
                            <span class="heading-sm" style="color:#004d99;font-size:12px;">Kết quả chương trình khách hàng may mắn năm 2016</span>
                    </h2>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Begin Content -->
        <div class="row">
            <div class="col-md-12">
                

                <div class="row margin-bottom-30" style=' display: none;'>
                    <div class="col-md-6 back-info">
                        <div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="margin-bottom: 5px;">
                            <h2 class="font-wei">Thông tin khách hàng</h2>
                            <p>
                                <span id="ContentPlace_lbDangnhap1">Vui lòng đăng nhập vào tài khoản khách hàng để xem được thông tin này</span></p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 back-info">
                        <div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="margin-bottom: 5px;">
                            <h2 class="font-wei">Thông tin khác</h2>
                            <p>
                                <span id="ContentPlace_lbDangnhap2">Vui lòng đăng nhập vào tài khoản khách hàng để xem được thông tin này</span></p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row margin-bottom-30" style=' display: none;'>
                    <div class="col-md-12 shadow-wrapper">
                        <div class="shadow-wrapper">
                            <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                                <h2 class="font-wei">Lịch sử sử dụng điện nhà quý khách hàng</h2>

                                <div id="container" style="min-width: 310px; max-width: 800px; height: 300px; margin: 0 auto;"></div>
                                <span id="ContentPlace_mesdis">Vui lòng đăng nhập vào tài khoản khách hàng để xem được thông tin này</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Content -->
        </div>
        
        
        <div class="">
            <!-- Tin tức -->
            
            <div class="col-md-12 md-margin-bottom-40">
                <div class="headline">
                    <h2 class="font-wei">Tin tức</h2>
                </div>
                <div class="row margin-bottom-20">
                    
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                    <div class="thumbnail-img">
                                        <div class="overflow-hidden" style="height: 140px">
                                            <img id="ContentPlace_rpTintuc_imgTintuc_0" class="img-responsive margin-bottom-10" src="UpLoadImg/201747_5.4.17%20kt.jpg" alt="Không hiển thị" />
                                        </div>
                                        <a class="btn-more hover-effect" href="DocDetail.aspx?strCate=1&intDocID=231">Xem thêm +</a>
                                    </div>
                                    <div class="caption">
                                        <span class="testimonial-author">
                                            <h3 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <a class="hover-effect" href='DocDetail.aspx?strCate=1&intDocID=231'>
                                                    <span id="ContentPlace_rpTintuc_Label1_0">PC Kon Tum hướng tới giao dịch thông minh, hiện đại</span></a></h3>
                                        </span>
                                        <span>
                                            <em>
                                                <i class="fa fa-clock-o"></i> Cập nhật ngày 4/7/2017 1:52:06 PM
                                            </em>
                                            <p style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">Toàn tỉnh Kon Tum hiện có hơn 125.000 khách hàng sử dụng điện. Thời gian qua, cùng với việc đầu tư phát triển hạ tầng ngành điện; Công ty Điện lực Kon Tum còn triển khai nhiều dịch vụ tiện ích từ việc thanh toán tiền điện qua ngân hàng, bưu điện đến việc hỗ trợ thông tin qua phòng giao dịch, đường dây nóng cho khách hàng... Tất cả nhằm hướng tới giao dịch thông minh, hiện đại với khách hàng sử dụng điện trên địa bàn.</p>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                    <div class="thumbnail-img">
                                        <div class="overflow-hidden" style="height: 140px">
                                            <img id="ContentPlace_rpTintuc_imgTintuc_1" class="img-responsive margin-bottom-10" src="UpLoadImg/201743_bang%20ron%20tuyen%20truyen%20tiet%20kiem%20dien.jpg" alt="Không hiển thị" />
                                        </div>
                                        <a class="btn-more hover-effect" href="DocDetail.aspx?strCate=1&intDocID=230">Xem thêm +</a>
                                    </div>
                                    <div class="caption">
                                        <span class="testimonial-author">
                                            <h3 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <a class="hover-effect" href='DocDetail.aspx?strCate=1&intDocID=230'>
                                                    <span id="ContentPlace_rpTintuc_Label1_1">PC Khánh Hòa triển khai chương trình thi đua “Gia đình tiết kiệm điện năm 2017”</span></a></h3>
                                        </span>
                                        <span>
                                            <em>
                                                <i class="fa fa-clock-o"></i> Cập nhật ngày 4/3/2017 7:51:35 AM
                                            </em>
                                            <p style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">Tiết kiệm điện là Chương trình mục tiêu quốc gia về sử dụng năng lượng tiết kiệm và hiệu quả đã được Thủ tướng Chính phủ phê duyệt. Nhằm nâng cao nhận thức của người dân, cộng đồng về ý thức sử dụng điện tiết kiệm và hiệu quả cũng như đưa hoạt động sử dụng điện tiết kiệm vào cuộc sống hằng ngày của mọi gia đình và xã hội. Hàng năm, PC Khánh Hòa đều triển khai nhiều hoạt động ý nghĩa về Chương trình tiết kiệm điện bằng nhiều hình thức khác nhau và tại nhiều địa phương khác nhau trên địa bàn toàn </p>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                    <div class="thumbnail-img">
                                        <div class="overflow-hidden" style="height: 140px">
                                            <img id="ContentPlace_rpTintuc_imgTintuc_2" class="img-responsive margin-bottom-10" src="UpLoadImg/2017331_31.3.17%20cc.jpg" alt="Không hiển thị" />
                                        </div>
                                        <a class="btn-more hover-effect" href="DocDetail.aspx?strCate=1&intDocID=229">Xem thêm +</a>
                                    </div>
                                    <div class="caption">
                                        <span class="testimonial-author">
                                            <h3 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <a class="hover-effect" href='DocDetail.aspx?strCate=1&intDocID=229'>
                                                    <span id="ContentPlace_rpTintuc_Label1_2">Chuyến đi đến với vùng đất “khoan khoan hò khoan”</span></a></h3>
                                        </span>
                                        <span>
                                            <em>
                                                <i class="fa fa-clock-o"></i> Cập nhật ngày 3/31/2017 10:37:00 AM
                                            </em>
                                            <p style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">Trở về sau chuyến đi công tác đầu tiên kể từ khi bước chân vào nghề, những CBCNV của CPCCC đều mang trong mình cảm xúc lưu luyến sau những ngày làm việc đầy ý nghĩa tại Điện lực Quảng Ninh trực thuộc PC Quảng Bình.</p>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        
                    <div class="col-md-3 col-sm-6">
                        <div class=" thumbnail-style ">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <p>
                                        <img id="ContentPlace_Image3" src="{{ $publicUrl }}/Images/wvideo.png" style="float: left; padding-top: 3px" />
                                        <span style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #003399">EVN</span>
                                        <span style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; color: red">CPC-CC</span>
                                        <span style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; color: Orange">eTV</span>
                                    </p>
                                    <p>
                                        <a id="ContentPlace_lbVideoTitle" href="eTVDetail.aspx?strID=40">Chiến dịch Giờ Trái Đất</a></p>
                                    <p>
                                        <iframe id="ContentPlace_linkyoutube" width="100%" height="160px" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/HxuE9mvtu8c?rel=0"></iframe>
                                    </p>
                                    <p style="text-align: right"><a href="frm_ListVideo.aspx">Xem thêm</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="text-align: left"><a href="frm_ListDoc.aspx?strCate=1">Xem thêm</a></p>
            </div>
            <!--End Quảng cáo-->
        </div>


        <!--Mục An toàn-->
        <div class="row margin-bottom-20">
            <!-- Welcome Block -->
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2 class="font-wei">An toàn điện</h2>
                </div>
                <div class="col-md-9 md-margin-bottom-20 col-sm-6">
                    <div class="owl-clients-v1" style="height: 180%;" id="atd">
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/7.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/8.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/9.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/10.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/11.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/12.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/13.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/14.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ $publicUrl }}/Images/Antoandien/15.jpg" alt="">
                        </div>
                    </div>
                    <div class="row caption">
                        
                        <div class="col-sm-12">

                            <span class="testimonial-author">
                                <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                    <a id="ContentPlace_LinkDetail" href="DocDetail.aspx?strCate=2&amp;intDocID=161">Một vài suy nghĩ về công tác an toàn điện trong nhân dân</a>
                                </h4>
                            </span>
                            
                            <span>
                                <em><i class="fa fa-clock-o"></i>Cập nhật ngày 
                                            <span id="ContentPlace_lbTimePost">9/30/2016 2:36:04 PM</span>
                                </em>
                            </span>

                            <p style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                <span id="ContentPlace_strTintuc_Noidung">Trong thời gian qua, với vai trò là đơn vị quản lý vận hành, PC Đắk Lắk đã đẩy mạnh công tác tuyên truyền nhằm nâng cao ý thức của khách hàng trong an toàn điện. Tuy nhiên, đơn vị vẫn ghi nhận nhiều trường hợp sự cố, tai nạn từ nhỏ đến lớn. Nhẹ thì gây mất điện phụ tải, hư hỏng thiết bị trên lưới điện mà nặng có thể gây thương tật, gây ảnh hưởng đến mạng sống con người. </span>

                            </p>
                        </div>
                        <blockquote class="hero-unify">
                            <ul class="list-unstyled margin-bottom-20">
                                
                                        <li><i class="fa fa-pencil color-green"></i>
                                            <a id="ContentPlace_MoreNews_Linkmore_0" href="DocDetail.aspx?strCate=2&amp;intDocID=57">Sử dụng thiết bị điện gia đình an toàn</a></li>
                                        <input name="ctl00$ContentPlace$MoreNews$ctl00$intDocID" type="hidden" id="ContentPlace_MoreNews_intDocID_0" value="57" />
                                    
                                        <li><i class="fa fa-pencil color-green"></i>
                                            <a id="ContentPlace_MoreNews_Linkmore_1" href="DocDetail.aspx?strCate=2&amp;intDocID=49">Những biện pháp phòng tránh điện giật và cấp cứu người khi tiếp xúc với điện</a></li>
                                        <input name="ctl00$ContentPlace$MoreNews$ctl01$intDocID" type="hidden" id="ContentPlace_MoreNews_intDocID_1" value="49" />
                                    
                                        <li><i class="fa fa-pencil color-green"></i>
                                            <a id="ContentPlace_MoreNews_Linkmore_2" href="DocDetail.aspx?strCate=2&amp;intDocID=48">Kinh nghiệm lắp đặt thiết bị điện trong nhà</a></li>
                                        <input name="ctl00$ContentPlace$MoreNews$ctl02$intDocID" type="hidden" id="ContentPlace_MoreNews_intDocID_2" value="48" />
                                    
                            </ul>
                            <p class="color-green">
                                <a id="ContentPlace_firstlink_Tintuc" href="frm_ListDoc.aspx?strCate=2">Xem thêm..</a>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-3 md-margin-bottom-20 col-sm-6">
                    
                    <div class=" thumbnail-style ">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <a href="http://edong.vn/">
                                    <img class="img-responsive" src="{{ $publicUrl }}/Images/QCbannerCPC.png" style="width: 100%; height: auto;" />
                                </a>
                                <hr />
                                <a href="#" >
                                    <img class="img-responsive stylecustom hvr-hang banner-ta2" src="{{ $publicUrl }}/Images/quangcao.png" style="width: 100%; height: auto;" />
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--End Mục An toàn-->

        <!--TK,TT,TM-->
        <div class="row margin-bottom-30">
            
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline">
                            <h2 class="font-wei">Tiết kiệm điện</h2>
                        </div>
                        <div id='header_3' class="carousel slide testimonials testimonials-v1">
                            <div class="carousel-arrow">
                                <a class="left carousel-control" href='#header_3' data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control" href='#header_3' data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="carousel-inner">
                                
                                        <div id="ContentPlace_rptNews_Detail_0_divSetActive_0" class="item active">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_0_imgTintuc_0" class="img-responsive" src="UpLoadImg/2017330_daknongkd2932017dsc_0089.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_0_LinkDetail_0" class="hover-effect" href="DocDetail.aspx?strCate=3&amp;intDocID=228">PC Đắk Nông: Ra quân tuyên truyền tiết kiệm điện và hưởng ứng sự kiện Giờ Trái đất năm 2017</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 3/30/2017 9:39:10 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">   
Thực hiện kế hoạch tuyên truyền tiết kiệm điện năm 2017, ngày 20/3/2017, PC Đắk Nông đã tổ chức ra quân tuyên truyền tiết kiệm điện và hưởng ứng sự kiện Giờ Trái đất năm 2017 trên địa bàn tỉnh Đắk Nồng.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl00$Detail$ctl00$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_0_intDocID_0" value="228" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_0_divSetActive_1" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_0_imgTintuc_1" class="img-responsive" src="UpLoadImg/2017330_img_3742.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_0_LinkDetail_1" class="hover-effect" href="DocDetail.aspx?strCate=3&amp;intDocID=227">Gia Lai hưởng ứng chiến dịch Giờ Trái đất 2017</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 3/30/2017 9:37:00 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Cùng với cả nước, PC Gia Lai đã tích cực thực hiện tháng hành động tiết kiệm điện và hưởng ứng “Giờ Trái đất năm 2017” bằng nhiều hoạt động thiết thực. Qua đó, góp phần nâng cao ý thức của các tổ chức, cá nhân trong việc sử dụng tiết kiệm và hiệu quả trên địa bàn. Giờ Trái đất năm nay được diễn ra từ 20 giờ 30 phút đến 21 giờ 30 phút ngày 25-3 với thông điệp “Tắt đèn – Bật tương lai”.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl00$Detail$ctl01$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_0_intDocID_1" value="227" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_0_divSetActive_2" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_0_imgTintuc_2" class="img-responsive" src="UpLoadImg/2017313_gtd531756317t12.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_0_LinkDetail_2" class="hover-effect" href="DocDetail.aspx?strCate=3&amp;intDocID=223">Chính thức phát động chiến dịch Giờ Trái đất năm 2017</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 3/13/2017 8:18:46 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Ngày 05/03/2017, Bộ Công Thương chính thức phát động chiến dịch Giờ Trái đất năm 2017 tại Việt Nam với thông điệp “Tắt đèn bật tương lai”.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl00$Detail$ctl02$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_0_intDocID_2" value="223" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_0_divSetActive_3" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_0_imgTintuc_3" class="img-responsive" src="UpLoadImg/2016103_2016929_kinhdoanh1.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_0_LinkDetail_3" class="hover-effect" href="DocDetail.aspx?strCate=3&amp;intDocID=163">PC Quảng Nam: Tuyên truyền tiết kiệm điện tại Khu công nghiệp</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 10/3/2016 8:45:34 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Ngày 26/9, Công đoàn PC Quảng Nam và Công đoàn các Khu công nghiệp (KCN) tỉnh Quảng Nam đã có buổi làm việc nhằm tổng kết đánh giá chương trình phối hợp thực hiện các hoạt động tuyên truyền nâng cao nhận thức sử dụng điện tiết kiệm và hiệu quả cho cán bộ, đoàn viên, người lao động trong khu công nghiệp giai đoạn 2016 - 2020 .</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl00$Detail$ctl03$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_0_intDocID_3" value="163" />
                                    
                            </div>
                        </div>
                    </div>
                    <input name="ctl00$ContentPlace$rptNews$ctl00$intCategoryID" type="hidden" id="ContentPlace_rptNews_intCategoryID_0" value="3" />
                
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline">
                            <h2 class="font-wei">Năng lượng tái tạo</h2>
                        </div>
                        <div id='header_4' class="carousel slide testimonials testimonials-v1">
                            <div class="carousel-arrow">
                                <a class="left carousel-control" href='#header_4' data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control" href='#header_4' data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="carousel-inner">
                                
                                        <div id="ContentPlace_rptNews_Detail_1_divSetActive_0" class="item active">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_1_imgTintuc_0" class="img-responsive" src="UpLoadImg/2016926_panelnangluongmattroi.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_1_LinkDetail_0" class="hover-effect" href="DocDetail.aspx?strCate=4&amp;intDocID=120">“Grid parity” hay hiệu quả kinh tế của điện mặt trời</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 9/26/2016 3:39:56 PM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Đối với các nhà hoạt động môi trường thì chỉ tiêu đánh giá hiệu quả kinh tế của điện mặt trời có lẽ là một trong những vấn đề đáng quan tâm hiện nay...</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl01$Detail$ctl00$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_1_intDocID_0" value="120" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_1_divSetActive_1" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_1_imgTintuc_1" class="img-responsive" src="UpLoadImg/201662_bainlmtmet31520166.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_1_LinkDetail_1" class="hover-effect" href="DocDetail.aspx?strCate=4&amp;intDocID=110">Tìm hiểu về thị trường điện mặt trời ở các quốc gia vùng Vịnh</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 6/2/2016 8:17:30 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Hiện nay, EVNCPC đang triển khai các thủ tục bước đầu để đầu tư nhà máy điện mặt trời tại thành phố Cam Ranh, tỉnh Khánh Hòa. Trong lĩnh vực này, đặc biệt đối với thị trường điện Việt Nam, bài toán giá thành vẫn là bài toán nan giải nhất bên cạnh bài toán về công nghệ. Vừa qua, Tiểu vương quốc Dubai thuộc Tiểu vương quốc Ả Rập thống nhất (UAE) đã thiết lập kỷ lục thế giới mới về giá điện mặt trời với mức giá thấp kỷ lục, chỉ 2.99 UScent (tương đương 666 VNĐ) cho mỗi kWh điện. Mức giá này không c</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl01$Detail$ctl01$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_1_intDocID_1" value="110" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_1_divSetActive_2" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_1_imgTintuc_2" class="img-responsive" src="UpLoadImg/2016524_Hinh%202Hinh1%20(1)crebnlmtt552016.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_1_LinkDetail_2" class="hover-effect" href="DocDetail.aspx?strCate=4&amp;intDocID=106">Đánh thức tiềm năng về năng lượng tái tạo to lớn tại Cam Ranh</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 5/24/2016 11:01:58 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Ở nước ta, với vị trí địa lý thuận lợi, tiềm năng về năng lượng mặt trời (NLMT) là rất lớn, đặc biệt ở các vùng miền Trung và miền Nam của đất nước, với số ngày nắng trung bình khoảng 300 ngày/năm và cường độ bức xạ mặt trời trung bình khoảng 5kWh/m2/ngày. Trong khi đó, cường độ bức xạ mặt trời lại thấp hơn ở các vùng phía Bắc, ước tính khoảng 4kWh/m2/ngày.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl01$Detail$ctl02$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_1_intDocID_2" value="106" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_1_divSetActive_3" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_1_imgTintuc_3" class="img-responsive" src="UpLoadImg/201656_Hinh%202Hinh1%20(1)crebnlmtt552016.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_1_LinkDetail_3" class="hover-effect" href="DocDetail.aspx?strCate=4&amp;intDocID=91">Bước đầu triển khai dự án Nhà máy điện mặt trời Điện lực miền Trung</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 5/6/2016 4:45:48 PM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Thực hiện nhiệm vụ được EVNCPC giao, CPCCREB đang khẩn trương triển khai những công việc bước đầu để thực hiện công tác chuẩn bị đầu tư cho Nhà máy điện mặt trời Điện lực miền Trung tại tỉnh Khánh Hòa.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl01$Detail$ctl03$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_1_intDocID_3" value="91" />
                                    
                            </div>
                        </div>
                    </div>
                    <input name="ctl00$ContentPlace$rptNews$ctl01$intCategoryID" type="hidden" id="ContentPlace_rptNews_intCategoryID_1" value="4" />
                
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline">
                            <h2 class="font-wei">Lưới điện thông minh</h2>
                        </div>
                        <div id='header_5' class="carousel slide testimonials testimonials-v1">
                            <div class="carousel-arrow">
                                <a class="left carousel-control" href='#header_5' data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control" href='#header_5' data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="carousel-inner">
                                
                                        <div id="ContentPlace_rptNews_Detail_2_divSetActive_0" class="item active">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_2_imgTintuc_0" class="img-responsive" src="UpLoadImg/2017221_20.2.17%20em%20ld.png" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_2_LinkDetail_0" class="hover-effect" href="DocDetail.aspx?strCate=5&amp;intDocID=217">Vai trò của IoT trong lưới điện thông minh</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 2/21/2017 8:15:22 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Trong thời gian qua, nhiều giải pháp công nghệ xuất hiện và bùng nổ, đã và đang đem lại nhiều lợi ích cho người dùng tại Việt Nam và trên toàn thế giới, điển hình như Điện toán đám mây, Mạng xã hội.... Gần đây nhất là sự xuất hiện của IoT (Internet of Things – Mạng lưới các thiết bị kết nối Internet) được xem là tác nhân có khả năng tạo nên cuộc cách mạng công nghiệp lần thứ 4 trên toàn thế giới.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl02$Detail$ctl00$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_2_intDocID_0" value="217" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_2_divSetActive_1" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_2_imgTintuc_1" class="img-responsive" src="UpLoadImg/2016926_592016-Tu%20dong%20hoa%20KT%20_FDIR.png" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_2_LinkDetail_1" class="hover-effect" href="DocDetail.aspx?strCate=5&amp;intDocID=152">Tự động hóa lưới điện phân phối: Bước quan trọng xây dựng lưới điện thông minh</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 9/26/2016 3:41:54 PM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Cùng với việc gấp rút xây dựng Trung tâm điều khiển hệ thống điện thành phố Đà Nẵng, thực hiện quá trình chuyển trạm biến áp 110kV sang chế độ vận hành ...</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl02$Detail$ctl01$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_2_intDocID_1" value="152" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_2_divSetActive_2" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_2_imgTintuc_2" class="img-responsive" src="UpLoadImg/2016621_daklak17616.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_2_LinkDetail_2" class="hover-effect" href="DocDetail.aspx?strCate=5&amp;intDocID=121">PC Đắk Lắk: Tích cực triển khai hệ thống lưới điện RF-Spider</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 6/21/2016 9:22:10 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Hiện nay, việc triển khai hệ thống thu thập số liệu công tơ từ xa bằng công nghệ RF-Spider được PC Đắk Lắk hết sức quan tâm và tích cực triển khai. Đây là một trong những hoạt động nhằm từng bước xây dựng, hoàn thiện lộ trình hiện đại hóa lưới điện thông minh và ứng dụng công nghệ vào công tác sản xuất, kinh doanh điện.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl02$Detail$ctl02$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_2_intDocID_2" value="121" />
                                    
                                        <div id="ContentPlace_rptNews_Detail_2_divSetActive_3" class="item">
                                            <div class="testimonial-info">
                                                <div class="col-sm-12">
                                                    <img id="ContentPlace_rptNews_Detail_2_imgTintuc_3" class="img-responsive" src="UpLoadImg/2016317_26216.thongmin1.jpg" alt="Không hiển thị" height="220" width="350" />
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="testimonial-author">
                                                        <h4 style="position: relative; line-height: 1.4em; height: 2.8em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                            <a id="ContentPlace_rptNews_Detail_2_LinkDetail_3" class="hover-effect" href="DocDetail.aspx?strCate=5&amp;intDocID=62">Lưới điện thông minh - một giải pháp tiết kiệm điện</a>
                                                        </h4>
                                                    </span>
                                                    <span>
                                                        <em><i class="fa fa-clock-o"></i> Cập nhật ngày 3/17/2016 10:01:37 AM</em>
                                                        <em style="position: relative; line-height: 1.4em; height: 4.2em; overflow: hidden; text-overflow: ellipsis; display: -webkit-inline-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; color: #444; font-size: 13px; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; font-style: normal">Phát triển lưới điện thông minh là chủ trương của Tập đoàn điện lực Việt Nam hướng đến. Hiện nay, Tổng công ty Điện lực miền Trung đang triển khai thí điểm lưới điện thông minh ở một số nơi. Xây dựng lưới điện thông minh là một trong những giải pháp để tiết kiệm điện.</em>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input name="ctl00$ContentPlace$rptNews$ctl02$Detail$ctl03$intDocID" type="hidden" id="ContentPlace_rptNews_Detail_2_intDocID_3" value="62" />
                                    
                            </div>
                        </div>
                    </div>
                    <input name="ctl00$ContentPlace$rptNews$ctl02$intCategoryID" type="hidden" id="ContentPlace_rptNews_intCategoryID_2" value="5" />
                
        </div>
        <!--End TK,TT,TM-->


        <!-- Owl Clients v1 -->
        <div class="row margin-bottom-20">
            <div class="col-md-6 md-margin-bottom-30">
                <div class="headline">
                    <h2 class="font-wei">Liên kết nội bộ</h2>
                </div>
                <div class="owl-clients-v1" id="link">
                    <div class="item">
                        <a href="https://cpc.vn/Home/default.aspx" style="text-decoration: none" title="Tổng Công ty Điện lực miền Trung" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/cpc_logo.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.qbpc.vn/" style="text-decoration: none" title="Công ty Điện lực Quảng Bình" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC01_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcquangtri.cpc.vn/" style="text-decoration: none" title="Công ty Điện lực Quảng Trị" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC02_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pctth.vn/" style="text-decoration: none" title="Công ty Điện lực Thừa Thiên Huế" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC03_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://dnp.com.vn/" style="text-decoration: none" title="Công ty TNHH MTV Điện lực Đà Nẵng" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PP_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.eqn.com.vn/" style="text-decoration: none" title="Công ty Điện lực Quảng Nam" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC05_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcquangngai.cpc.vn/" style="text-decoration: none" title="Công ty Điện lực Quảng Ngãi" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC06_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcbinhdinh.com.vn/" style="text-decoration: none" title="Công ty Điện lực Bình Định" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC07_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcphuyen.cpc.vn/" style="text-decoration: none" title="Công ty Điện lực Phú Yên" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC08_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.khpc.com.vn/" style="text-decoration: none" title="Công ty CP Điện lực Khánh Hòa" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PQ_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pckontum.com.vn/" style="text-decoration: none" title="Công ty Điện lực Kon Tum" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC11_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://gialaipc.com.vn/" style="text-decoration: none" title="Công ty Điện lực Gia Lai" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC10_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcdaklak.cpc.vn/" style="text-decoration: none" title="Công ty Điện lực Đăk Lăk" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC12_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://pcdaknong.cpc.vn/" style="text-decoration: none" title="Công ty Điện lực Đăk Nông" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/PC13_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.etc3.com.vn/" style="text-decoration: none" title="Công ty TNHH MTV thí nghiệm Điện miền Trung" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/ETC_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.cgc.vn/Home/default.aspx" style="text-decoration: none" title="Công ty Lưới Điện cao thế miền Trung" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/CGC_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.pc3invest.vn/" style="text-decoration: none" title="Công ty Cổ phần đầu tư Điện lực 3" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/IJSC_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.cpcit.vn/" style="text-decoration: none" title="Công ty CNTT Điện lực miền trung" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/cpcit_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://cpcemec.vn/" style="text-decoration: none" title="Trung tâm sản xuất thiết bị đo điện tử Điện lực miền Trung" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Noibo/emec_logo.png" alt="" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 md-margin-bottom-30">
                <div class="headline">
                    <h2 class="font-wei">Liên kết thành viên</h2>
                </div>
                <div class="owl-clients-v1" id="link1">
                    <div class="item">
                        <a href="http://www.moit.gov.vn/vn/Pages/Trangchu.aspx" style="text-decoration: none" title="Bộ Công thương Việt Nam" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/bct_logo.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.evn.com.vn/" style="text-decoration: none" title="Tập đoàn Điện lực Việt Nam" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/LogoEVN.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://cskh.npc.com.vn/" style="text-decoration: none" title="Trung tâm CSKH Tổng công ty Điện lực miền Bắc" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/npc_logo.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://cskh.evnhanoi.com.vn/" style="text-decoration: none" title="Trung tâm CSKH Tổng công ty Điện lực Hà Nội" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/hanoi_logo.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://cskh.evnspc.vn/CSKHEVN/" style="text-decoration: none" title="Trung tâm CSKH Tổng công ty Điện lực miền Nam" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/spc_logo.png" class="img-responsive" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://cskh.hcmpc.com.vn/" style="text-decoration: none" title="Trung tâm CSKH Tổng công ty Điện lực Hồ Chí Minh" target="_blank">
                            <img src="{{ $publicUrl }}/Images/Logo/Thanhvien/hcmc_logo.png" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Owl Clients v1 -->
    </div>
    <!--/container-->
    <!-- End Content Part -->

@stop
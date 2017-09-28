@extends('templates.public.master')
@section('main-content')
<style>
        input[type="submit"] {position:static}
    </style>
    <script type="text/javascript">
        $(function () {
            $("img").addClass("img-responsive");
        });

      </script>
    <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Thanh toán qua ngân hàng</h1>
                <ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb">
                    <li><a href='Default.aspx'>Trang chủ</a></li>
                    <li><a href='#'>Hình thức thanh toán tiền điện</a></li>
                    <li class='active'>Thanh toán qua ngân hàng</li>
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
                            <li class="active"><a href="#home-2" data-toggle="tab">Các phương thức thanh toán</a></li>
                            <li><a href="#profile-2" data-toggle="tab" >Tài khoản ngân hàng</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tag-box tag-box-v3 form-page" >
                        <div class="tab-content" style="background:white;border:none">
                            <div class="tab-pane fade in active" id="home-2">
                                <h3>CÁC PHƯƠNG THỨC THANH TOÁN</h3>
                                <p><span id="ContentPlace_lblNoidung"><p style="text-align: justify;"><font size="4">&nbsp;</font><strong style="font-family: 'times new roman', times;"><font size="4">1. Thanh toán Internet Banking</font></strong></p>
<p style="text-align: justify;"><span style="font-family: 'times new roman', times;"><font size="4">Khách hàng chỉ cần đăng kí dịch vụ Internet Banking tại các ngân hàng có liên kết với điện lực để thực hiện dịch vụ thanh toán tiền điện. Lấy ví dụ đơn cử của dịch vụ Internet Banking của ngân hàng Ngoại thương Việt Nam (VCB). Sau khi khách hàng của ngân hàng VCB đã được cung cấp một mã truy cập vào hệ thống internet baking của VCB, khách hàng thực hiện các bước sau để tiến hành thanh toán tiền điện:</font></span></p>
<p style="text-align: justify;"><span style="font-family: 'times new roman', times;"><font size="4"><strong>&nbsp;</strong><strong>Bước 1: &nbsp;Đăng nhập vào hệ thống internet banking</strong></font></span></p>
<p style="text-align: justify;"><span style="font-family: 'times new roman', times;"><font size="4">Truy cập vào địa chỉ&nbsp;<a href="https://www.vietcombank.com.vn/" target="_blank">https://www.vietcombank.com.vn&nbsp;</a>để đăng nhập bằng username, password do ngân hàng cung cấp. Sau khi đăng nhập thành công, giao diện với khách hàng sẽ hiển thị như hình dưới:</font></span></p><p style="text-align: justify;"><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/1.jpg"></p>
<div style="text-align: justify;"><strong style="font-family: 'times new roman', times;"><font size="4">Bước 2: Chọn thanh toán tiền điện</font></strong></div><div style="text-align: justify;">
    <p><span style="font-family: 'times new roman', times;"><font size="4">Khách hàng chọn tiếp vào&nbsp;<strong>Nhà cung cấp dịch vụ&nbsp;</strong>để chọn thanh toán&nbsp;<strong>EVN Miền Trung – Thanh toán tiền điện</strong>&nbsp;như hình dưới:</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/2.jpg"></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4"><strong>Lưu ý:</strong>&nbsp;Từ&nbsp;<strong>Bước 3</strong>&nbsp;đến&nbsp;<strong>Bước 5</strong>&nbsp;là trường hợp dành cho khách hàng đăng ký thanh toán lần đầu nên phải đăng ký số điện thoại.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 3: Chọn mức cần thanh toán</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/3.jpg"></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Sau đó nhấn nút&nbsp;<strong>Xác nhận</strong>&nbsp;đã thông qua dịch vụ ngân hàng điện tử.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Trường hợp Khách hàng VCB chưa đăng ký thanh toán tiền điện qua dịch vụ này thì để sử dụng dịch vụ trên, khách hàng cần phải thao tác như sau:</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 4: &nbsp;Xác nhận mật khẩu OTP</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">&nbsp;</font></strong></span><img src="http://cskh.cpc.vn/Images/IBanking/4.jpg"><span style="font-family: 'times new roman', times; font-size: large;">&nbsp;</span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 5: &nbsp;Xác nhận điện thoại khách hàng nhận tin nhắn SMS:</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/5.jpg"><span style="font-family: 'times new roman', times; font-size: large;">&nbsp;</span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Nếu đồng ý chọn SĐT này để nhận các tin nhắn từ hệ thống Internet banking thì nhấn vào nút Chấp nhận.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 6: &nbsp;Xác nhận lại SĐT đăng ký nhận SMS từ ngân hàng</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/6.jpg"></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 7: &nbsnbsp;Xác nhận lại SĐT đã đăng ký</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><span style="font-size: large; font-family: 'times new roman', times;">Sau khi nhấn nút Xác nhận thì hệ thống gửi đến SĐT đã đăng ký ở trên mã (ví dụ: 77da60cc89) và nhập vào ô Mã giao dịch để đăng ký.</span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><strong style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></strong><img src="http://cskh.cpc.vn/Images/IBanking/7.jpg"></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">Bước 8: &nbsp;Thực hiện thanh toán</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Nếu khách hàng VCB đã đăng ký thành công rồi thì chỉ cần nhấn vào menu “Thanh toán hóa đơn” và chọn mã Khách hàng mà chủ tài khoản VCB muốn thanh toán. Lúc này, màn hình xuất hiện giao diện như sau:</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/8.jpg"><strong style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></strong></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4"><strong>Bước 9: &nbsp;&nbsp;Xác nhận của Ngân hàng</strong>:&nbsp;</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><span style="font-size: large; font-family: 'times new roman', times;">a. Qua điện thoại: Internet banking sẽ gửi tin nhắn SMS đến SĐT của khách hàng thông tin số tiền đã được thành toán và số tiền còn lại trong tài khoản thanh toán (thông tin trong các hình dưới trích xuất từ tài khoản demo, có tính chất minh họa và đã được sự đồng ý của chủ tài khoản).</span></p>
    <p style="text-align: center; "><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span><img src="http://cskh.cpc.vn/Images/IBanking/9.jpg"><span style="font-family: 'times new roman', times; font-size: large;">&nbsp;</span></p>
    <p style="text-align: left;" align="center"><span style="font-family: 'times new roman', times;"><font size="4">b. Qua&nbsp; Email: Internet banking sẽ gửi đến email của khác hàng biên lai chuyển tiền:</font></span></p>
    <p align="center"><img src="http://cskh.cpc.vn/Images/IBanking/10.jpg" style="text-align: justify;"><span style="font-size: large; font-family: 'times new roman', times; text-align: justify;">&nbsp;</span></p>
    <p style="text-align: left;" align="center"><span style="font-family: 'times new roman', times;"><font size="4">Bước 9 này là thông tin phản hồi của internet banking đến với khách hàng thanh toán, để khẳng định hơn tính hiệu quả và an toàn khi thực hiện thanh toán bằng hình thức này.</font></span></p>
    <p style="text-align: left;" align="center"><span style="font-family: 'times new roman', times;"><font size="4">Đối với các ngân hàng khác Techcombank, BIDV, Viettinbank, VIB,LienVietBank&nbsp;và thời gian đến là ABBank và MBBank thì cách thức thanh toán cũng tương tự.&nbsp;</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">2. Thanh toán SMS</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Dịch vụ thanh toán hóa đơn tiền điện qua SMS một tiện ích của dịch vụ Mobile Banking, cho phép khách hàng của 200 đơn vị điện lực trên toàn quốc có thể trả tiền điện thông qua chiếc điện thoại của mình. Khách hàng có thể thanh toán tiền điện cho mình hoặc thanh toán hộ cho người thân mọi lúc mọi nơi bằng cách. Bài viết minh họa cách thức thanh toán SMS qua ngân hàng Agribank.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;-&nbsp;&nbsp; Đến chi nhánh đã mở tài khoản và tiến hành đăng ký sử dụng dịch vụ thanh toán hoá đơn nằm trong gói dịch vụ Mobile Banking.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp; &nbsp; -&nbsp;&nbsp; Nếu quý khách đã đăng ký dịch vụ Mobile Banking của ngân hàng, chỉ cần nhắn tin để kích hoạt dịch vụ theo cú pháp:</font></span></p>
    <p align="center"><span style="font-family: 'times new roman', times;"><font size="4"><strong>VBA&nbsp;&nbsp; DK&nbsp;&nbsp; 4</strong>&nbsp;&nbsp; gửi tới &nbsp;<strong>&nbsp;8149</strong></font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp; &nbsp;&nbsp;&nbsp;Sau khi đăng ký, hệ thống tự động khởi tạo mật khẩu mặc định và gửi tin nhắn về điện thoại của Khách hàng. Khách hàng soạn tin nhắn để đổi mật khẩu:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></p>
    <p align="center"><span style="font-family: 'times new roman', times;"><font size="4"><strong>VBA&nbsp;&nbsp; MK&nbsp;&nbsp; MậtKhẩuMặcĐịnh&nbsp;&nbsp; MậtKhẩuMới</strong>&nbsp;&nbsp; gửi tới&nbsp;&nbsp;&nbsp;<strong>8149</strong></font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4"><strong><span style="font-family: 'times new roman', times;">Lưu ý</span></strong><strong>:</strong>&nbsp;Mật khẩu có độ dài 8 ký tự. Mật khẩu này cũng chính là mật khẩu của dịch vụ Chuyển khoản. Nếu Quý khách đã đặt mật khẩu Chuyển khoản trước đó thì không cần thực hiện đặt mật khẩu nữa.</font></span></p>
    <p><font size="4"><span style="font-family: 'times new roman', times;">Thanh toán tiền điện bằng cách soạn tin nhắn&nbsp;</span><span style="font-family: 'times new roman', times;">&nbsp;</span></font></p><p style="text-align: center;"><font size="4"><strong style="font-family: 'times new roman', times;">VBA&nbsp;&nbsp; TT&nbsp;&nbsp; DL&nbsp;&nbsp; MãKháchHàng</strong><span style="font-family: 'times new roman', times;">&nbsp; &nbsp;gửi tới&nbsp;&nbsp;&nbsp;</span><strong style="font-family: 'times new roman', times;">8149</strong></font></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;Hóa đơn tiền điện của khách hàng sẽ được gạch nợ và Số tiền cước được trừ trực tiếp trong tài khoản ngân hàng của khách hàng. Hóa đơn tài chính sẽ được nhà cung cấp dịch vụ gửi về cho khách hàng qua đường bưu điện hoặc phát tại nhà.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;Với dịch vụ này, khách hàng không cần mất nhiều thời gian, công sức đi lại đến điểm nộp cước hay phải sắp xếp gặp nhân viên thu cước tại nhà mà có thể hoàn toàn chủ động chọn cách thanh toán phù hợp nhất với mình. Khách hàng khi đi công tác nước ngoài hoặc ở vùng núi cao, hải đảo.. vẫn có thể yên tâm thanh toán tiền điện cho gia đình mình đầy đủ mà không phải lo lắng bị ngừng dịch vụ vì chưa nộp cước kịp thời.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;<strong>3.</strong><strong>&nbsp;Ủy nhiệm thanh toán tự động</strong></font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Khách hàng chủ động đăng ký với ngân hàng về việc đến kỳ hóa đơn của khách hàng, ngân hàng kiểm tra số dư của khách hàng và tự động trích tiền từ tài khoản của khách hàng, chuyển sang tài khoản của công ty điện lực để thanh toán hóa đơn.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">4. &nbsp;Thanh toán ATM</font></strong></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Các bước thanh toán cơ bản tại máy ATM - ví dụ đơn cử thanh toán qua ATM Agribank</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước 1:&nbsp;Khách hàng đưa thẻ vào máy ATM, nhập mã số PIN, chọn chức năng “THANH TOÁN HÓA ĐƠN”.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước&nbsp; 2:&nbsp;Khách hàng lựa chọn loại dịch vụ cần thanh toán.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước 3:&nbsp;Chọn nhà cung cấp dịch vụ cần thanh toán. Màn hình ATM sẽ hiển thị danh sách các nhà cung cấp dịch vụ hiện có.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước 4:&nbsp;Nhập mã khách hàng/mã sinh viên cần thanh toán các dịch vụ điện, nước, điện thoại và nhập mã sinh viên khi thanh toán học phí.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước 5:&nbsp;Thông tin nợ cước được hiển thị.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Bước 6:&nbsp;Khách hàng chọn số hóa đơn cần thanh toán bằng cách nhấn số thứ tự hóa đơn cần thanh toán trên bàn phím ATM.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">&nbsp;</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><font size="4">Hoàn tất các bước giao dịch trên, máy ATM sẽ thông báo kết quả giao dịch thành công và in hóa đơn cho khách hàng. Hệ thống sẽ tự động trừ tiền trong tài khoản của khách hàng (nếu số tiền trong tài khoản đủ để trả tiền hoá đơn) và gạch nợ cước cho khách hàng. Nhà cung cấp dịch vụ sẽ gửi hoá đơn giá trị gia tăng cho khách hàng qua đường thư tín.</font></span></p>
    <p><span style="font-family: 'times new roman', times;"><strong><font size="4">5. Thanh toán tại quầy giao dịch ngân hàng</font></strong></span></p>
    <p><font size="4"><span style="font-family: 'times new roman', times;">&nbsp;</span><span style="font-family: 'times new roman', times;">Nộp tiền mặt vào tài khoản điện lực tại quầy giao dịch ngân hàng.</span></font></p>
</div></span></p>
                            </div>
                            <div class="tab-pane fade in" id="profile-2">
                                <h3>TÀI KHOẢN NGÂN HÀNG</h3>
                                

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
            <div id="ContentPlace_ctrlTaikhoannganhang2_UpdatePanel">
    
                <script type="text/javascript" language="javascript">
                    function hidenotic() {
                        $("#ContentPlace_ctrlTaikhoannganhang2_divThongbaoKH").show(0).delay(20000).hide(0);
                    }
                    Sys.Application.add_load(hidenotic);
                </script>
                <!--Div tìm kiếm-->
                <div class="form-horizontal sky-form" style="border:none">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Công ty</label>
                        <div class="col-lg-8 sky-form" style="border:none">
                            <select name="ctl00$ContentPlace$ctrlTaikhoannganhang2$drlDonvi" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlace$ctrlTaikhoannganhang2$drlDonvi\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlace_ctrlTaikhoannganhang2_drlDonvi" class="form-control color-blue">
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

                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Điện lực</label>
                        <div class="col-lg-8 sky-form" style="border:none">
                            <select name="ctl00$ContentPlace$ctrlTaikhoannganhang2$drlDienluc" id="ContentPlace_ctrlTaikhoannganhang2_drlDienluc" class="form-control color-blue">
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
                    <div class="form-group">
                        <div class="col-lg-2"></div>        
                        <div class="col-lg-3">
                            <input type="submit" name="ctl00$ContentPlace$ctrlTaikhoannganhang2$btnSearch" value="Tìm khách hàng" id="ContentPlace_ctrlTaikhoannganhang2_btnSearch" class="form-control btn-u btn-u-blue" />
                        </div>
                        <div class="col-lg-1">
                            <div id="loading">
                                <div id="ContentPlace_ctrlTaikhoannganhang2_UpdateProgress" style="display:none;">
         
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
</div></div></div></div></div></div>
@stop
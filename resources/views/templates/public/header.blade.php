
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trung tâm chăm sóc khách hàng</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <link rel="shortcut icon" href="{{ $publicUrl }}/Images/Logo/LogoEVN.png" />

	<!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin" rel="stylesheet" type="text/css" />
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/bootstrap/css/bootstrap.min.css">
    
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/style.css">
    

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/headers/header-default.css">
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/footers/footer-v2.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!-- CSS Page Style -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/pages/page_log_reg_v1.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{ $publicUrl }}/assets/css/custom.css">
    
    

</head>
<body class="header-fixed" style="cursor: auto;">

         
         <div class="wrapper">
            <!--=== Header v3 ===-->
			
<style>

    @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

   .search-open {
    top: 42px !important;
    box-shadow: 0 1px 0px #ddd !important;
	border-bottom: 1px solid #eee;
	top: 42px !important; 	
    display: none;
    padding: 25px;
    position: absolute;
    background: #fcfcfc;
    border-top: solid 2px #eee;  	
    height: auto;

     opacity:0;  /* make things invisible upon start */
      -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
      -moz-animation:fadeIn ease-in 1;
      animation:fadeIn ease-in 1;

      -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
      -moz-animation-fill-mode:forwards;
      animation-fill-mode:forwards;

      -webkit-animation-duration:0.5s;
      -moz-animation-duration:0.5s;
      animation-duration:0.5s;

  
}
   .visible  {
   display:block;   
   -webkit-animation-delay: 0.1s;
   -moz-animation-delay: 0.1s;
   animation-delay: 0.1s; 

   }
   .hidden  {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s 2s, opacity 2s linear;
   }  
   #btn-login{       
      border-radius:3px;
}
   #btn-menu{
           left: 0px;   
            border-radius:3px; 
   }   

@media (min-width: 992px) {
    .search-open {
        width: 330px;
    }
}
    .login {
        font-size: 14px !important;
        font-weight: bold;
        color: #006bb3 ;    
        vertical-align: middle;
        cursor: pointer;
        display:inline-block;
        text-transform:none !important;
  }
  .login:hover {
    text-decoration: underline;
    color: #fe6102;
  }
    .welcome {
        position:relative;
        bottom:30px;
    }

    .img-user {
         width: 26px;
         height:26px;
         display:initial; 
    }
    .language {
        float: right;
        position: relative;    
        left: 30px;
        padding-top:12px;
    }
    .header .navbar-nav > li > a {
	color: #333333; /*#687074;*/
	font-size: 13px;
	font-weight:bold;
	text-transform: uppercase;
}
    .img-tel {
        width: 35px;
        height: 35px;
        display: inline;
    }    

    .txt-tel {
        font-size:15px;
        color:red;
        vertical-align:middle;
        font-weight:bold;
    }
    @media(max-width:600px ){
        .pos-tel {
            text-align:center;
        }
    }
     @media(min-width:768px ) and (max-width:991px){
        .pos-tel {
            text-align:right;
            position: relative;           
        }        
    }
      @media(min-width:768px ) and (max-width:990px){
        .pos-tel {           
            bottom:32px;
        }
    }

    @media (min-width: 769px) {
        .fixed {
            top: 0px;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 9999;
            position: fixed;
        }               
    }
    @media (max-width: 991px) {       
         .topbar{
            display:none;
        } 
    }
   @media (min-width: 992px) {       
        #menu2{
            display:none !important;
        }
        .pos-tel1 {
            text-align:center;
            position: relative;
        }
    }
  
/*mobile*/

    @media (max-width: 425px){    

         .img-user {
             width: 22px;
             height:22px;         
        }
          .login {
            font-size: 10px !important;            
        }
    }

    @media (min-width: 430px) and (max-width: 992px) {

        .img-user {
                 width: 27px;
                 height:27px;         
            }

        }
        @media (min-width: 1024px) and (max-width: 1400px) {
            .header .navbar-nav > li > a {
                font-size: 1.1vw;
            }
        }

    @media (min-width: 992px) {
        .header .logo {
            height: 50px;
            width: 355px;
        }
    }
    @media (min-width: 992px) and (max-width:1023px) {
        .header .navbar-nav {
            padding-top: 20px;
        }
    }

    
</style>
<script src="{{ $publicUrl }}/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="{{ $publicUrl }}/assets/js/jquery-latest.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {        
       
        var div = $('#menuTop');
        var start = $(div).offset().top;
       
        $(window).scroll(function(){
        var posScroll = $(document).scrollTop();
        if (parseInt(posScroll) > parseInt(start)) {
            $('#menuTop').addClass('fixed');
        }
        else {
            $('#menuTop').removeClass ('fixed');
        }

        });        

        $("#cancel").click(function(){
            $("#Open").removeClass('visible');
            $("#Open").addClass('hidden');
            $("#Open").css('display','none');
        });
        
        $('#login').click(function () {
           $("#Open").removeClass('hidden');
           $('#Open').addClass('visible');
           $("#Open").css('display', 'block');
        });         
    });
</script>
        @if(Session::has('msg-e'))
        <div class="alert alert-danger alert-dismissable loi" style="text-align: center;font-weight: bold;">{{ Session::get('msg-e') }}</div>
        @endif
        <script type="text/javascript">
          $(document).ready(function(){
            $(".loi").delay(3000).slideUp();
          });
        </script>
<div class="header" id="menuTop" >
	<div class="container" style="margin-bottom:-40px;">
		<!-- Logo -->  
        <div class="col-md-8 col-sm-10 col-xs-10" style="right: 20px;">
            <a class="logo" href="{{ route('public.index.index') }}">
                <img class="img-responsive" src="{{ $publicUrl }}/Images/Logo/LOGOCHINHTHUC.svg" />
            </a>
        </div>

        <div class="col-md-2 col-md-10 col-xs-10 pos-tel  " >            
                <img class="img-responsive   img-tel" src="{{ $publicUrl }}/Images/Icon/telephone.gif" />
            <span  class="txt-tel">19001909</span>
            
        </div>
        <!-- End Logo -->

		<!-- Topbar -->        
		<div class="topbar">             
			<ul class="loginbar pull-right  ">				
				<li >
                    <img src="{{ $publicUrl }}/Images/Icon/user.png" class="img-responsive img-thumbnail  img-user " alt="" >
                    <div class="login" id="login" ;">    
                    <?php
                      if((Auth::user()!= ''))  {
                        $user=Auth::user();
                        //dd($user);
                        //$id = $user->id;
                        $fullname = $user->fullname;
                      }
                    ?>    
                    @if(!isset($user))
                        <span id="ctrlHeader1_lbDangnhap">Đăng nhập</span>
                    @endif
                        
                    </div>   
                    @if(isset($user))
                        <span style="font-size: 14px !important; font-weight: bold; color: #006bb3; vertical-align: middle; cursor: pointer; display: inline-block; text-transform: none !important;" id="ctrlHeader1_lbDangnhap">{{ $fullname }}</span>
                        <a style="margin-left: 20px;font-size: 14px !important; font-weight: bold; color: #006bb3; vertical-align: middle; cursor: pointer; display: inline-block; text-transform: none !important;" href="{{ route('auth.auth.logout') }}">Đăng xuất</a>
                    @endif    
				</li>
			</ul>            

            
            
                <div  class="search-open " style="background-color:#ffffff !important; right:1px;  " id ="Open" >  
                    <div class="input-group animated fadeInDown">           
                        
<style>
    .logout {
    
    font-size: 14px !important;
    font-weight: bold;
    color: #006bb3 !important;
    vertical-align: middle;
    cursor: pointer;
    text-transform: none;
    float: right;
    text-decoration: underline;
    padding: 20px 40px 0 0;
    display:none;
    }
    .logout > a {
        color:#006bb3 !important;
    }
    .btn-login {
        left: 3%;
    }

    .btn-regis {
        right: 10%;
    }

    .no-dis {
        display: none;
    }
    .info-cus {
        font-size:14px;
        font-weight:bold;
        color:#333333;
        line-height:1.8;
    }


    @media (min-width: 768px){
        .divThongtin {
            margin-left: -30px;
            margin-right: -30px;
        }
    }
    @media (max-width: 991px){
        .logout {
           display:block;
        }
        .btn-login {
            float:left;
            left:15%;
        }
        .btn-regis {
            
            right:15%;
        }
    }
</style>

 <!-- Modal -->
  

<div class="row text-center  ">
    <h3 class="text-primary" style="padding-left:9px; padding-right:9px; color: #004d99;"><span id="ctrlHeader1_ctrlSignin1_lbTieude">Đăng nhập hoặc Đăng ký</span></h3>
</div>


<div id="ctrlHeader1_ctrlSignin1_divDangnhap" class="row text-center">
    <div class="col-md-12">
        <form action="{{ route('public.login.login') }}" method="POST">
        {{ csrf_field() }}
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="name" type="text" id="ctrlHeader1_ctrlSignin1_txtMA_KHANG" placeholder="Tên người dùng" class="form-control" />
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input name="pass" type="password" id="ctrlHeader1_ctrlSignin1_txtPassword" placeholder="Mật khẩu" class="form-control" />
            </div>                                 
            <div class="row">
                <div  class="col-md-6 btn-login" >                 
                    <input type="submit" name="ctl00$ctrlHeader1$ctrlSignin1$btnSignIn" value="Đăng nhập" id="ctrlHeader1_ctrlSignin1_btnSignIn" class="btn-u pull-right" />		                
               </div>
                <div class="col-md-6 btn-regis"> 
                    <a href="{{ route('public.index.reg') }}" type="submit" name="ctl00$ctrlHeader1$ctrlSignin1$btnDangky" value="Đăng ký" id="ctrlHeader1_ctrlSignin1_btnDangky" class="btn-u pull-right">Đăng kí</a>
                </div>                                                             
            </div>
        </form>    
        <div class="row" style="margin-top:10px">
            <div class="col-md-12">
                <center>
                <a role="button" data-toggle="modal" data-target=".bs-example-modal-lg">Quên tên đăng nhập?</a>
                </center>
            </div>
        </div>
        <hr />
        <h4>Nếu không nhớ mật khẩu ?</h4>
        <p>Bạn có thể <a id="ctrlHeader1_ctrlSignin1_btnRemindPass" class="color-green" href="javascript:__doPostBack(&#39;ctl00$ctrlHeader1$ctrlSignin1$btnRemindPass&#39;,&#39;&#39;)" style="border-bottom: none;  padding:0px;">Bấm vào đây</a> để lấy lại mật khẩu.</p>
    </div>
</div>

                        <div class="col-md-12" >
                            <div class="col-md-4">
                                
                            </div>
                            <a href="frm_DoiMK.aspx" style='display: none;'>
                                <div class="col-md-5" style="padding: 0px;">
                                    <div type="button" id="" class="btn btn-primary btn-block btn-u " style="margin-left: 5px;">Đổi mật khẩu</div>
                                </div>
                            </a>
                            <div class="col-md-3"  style='padding:0px;' style="padding: 0px;">
                                <div type="button" id="cancel" class="btn btn-primary btn-block btn-u" style="margin-left: 20px;">Đóng</div>
                            </div>
                        </div>
                    </div>
                </div>
            
		</div>
		<!-- End Topbar -->

		<!-- Toggle get grouped for better mobile display -->
        <div class="col-md-5 col-sm-5 col-xs-5" style="float:right !important; left:20px; bottom:75px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu2" id="btn-login">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="fa fa-user"></span>
		    </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu1" id="btn-menu">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="fa fa-bars"></span>
		    </button>
            
        </div>
		
		<!-- End Toggle -->
	</div><!--/end container-->
	<!-- Collect the nav links, forms, and other content for toggling -->
    
	<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse" id="menu1">
		<div class="container">
			<ul class="nav navbar-nav" id="nav" >
				<!-- Home -->
				<li class="">
					<a href="Default.aspx">
						<i class="fa fa-home fa-lg" aria-hidden="true"></i>
					</a>
				</li>
				<!-- End Home -->

				<!-- Hồ sơ - thủ tục -->
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						Hồ sơ - thủ tục
					</a>
					<ul class="dropdown-menu">
						<!-- Cấp điện mới -->
						<li class="dropdown-submenu">
							<a href="javascript:void(0);">Cấp điện mới</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('public.hosothutuc.capdienhoso') }}">Hồ sơ, quy trình giải quyết</a></li>
								<li><a href="{{ route('public.hosothutuc.capdienyeucau') }}">Yêu cầu cấp điện mới</a></li>
						
							</ul>
						</li>
						<!-- End Cấp điện mới -->

						<!-- Thay đổi dùng điện -->
						<li class="dropdown-submenu">
							<a href="javascript:void(0);">Thay đổi thông tin</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('public.hosothutuc.thaydoihuongdan') }}">Hướng dẫn thủ tục</a></li>
								<li><a href="{{ route('public.hosothutuc.thaydoittkh') }}">Thay đổi thông tin khách hàng</a></li>
							</ul>
						</li>
						<!-- End Thay đổi dùng điện -->

						<!-- Lắp đặt sau công tơ  -->
						<li>
							<a href="{{ route('public.hosothutuc.bieugia') }}">
								Lắp đặt sau công tơ 
							</a>
						</li>
						<!-- End Lắp đặt sau công tơ  -->

						<!-- Giá bán điện -->
						<li class="dropdown-submenu">
							<a href="javascript:void(0);">Giá bán điện</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('public.hosothutuc.giabanle') }}">Giá bán lẻ</a></li>
								<li><a href="{{ route('public.hosothutuc.tinh1') }}">Tính tiền công suất phản kháng</a></li>
								<li><a href="{{ route('public.hosothutuc.tinh2') }}">Tính tiền trong tháng đổi giá</a></li>
							</ul>
						</li>
						<!-- End Giá bán điện -->
					</ul>
				</li>
				<!-- End Hồ sơ - thủ tục -->

				<!-- Thanh toán tiền điện -->
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						Thanh toán tiền điện
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('public.thanhtoantiendien.lichsu') }}">Lịch sử thanh toán/sử dụng điện</a>
						</li>
						<li class="dropdown-submenu">
							<a href="javascript:void(0);">Hình thức thanh toán tiền điện</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('public.thanhtoantiendien.thanhtoanonline') }}">Thanh toán Online</a></li>
								<li><a href="{{ route('public.thanhtoantiendien.thanhtoandienluc') }}">Thanh toán qua điện lực</a></li>
                                <li><a href="{{ route('public.thanhtoantiendien.thanhtoantrunggian') }}">Thanh toán qua trung gian khác</a></li>
							</ul>
						</li>
                        <!-- Điểm thanh toán tiền điện  -->
						
						<!-- End Điểm thanh toán tiền điện  -->
						<li>
							<a href="{{ route('public.thanhtoantiendien.tracuuhoadon') }}">Tra cứu hóa đơn điện tử</a>
						</li>
					</ul>
				</li>
				<!-- End Thanh toán tiền điện -->

				<!-- Lịch tạm ngừng cung cấp điện -->
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						Lịch tạm ngừng cung cấp điện
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('public.lichngungcungcapdien.theokhuvuc') }}">Lịch theo khu vực</a>
						</li>
						<li>
							<a href="{{ route('public.lichngungcungcapdien.theokhachhang') }}">Lịch theo khách hàng</a>
						</li>
					</ul>
				</li>
				<!-- End Lịch tạm ngừng cung cấp điện -->

				<!-- Tra cứu khác -->
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						Tra cứu khác
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('public.tracuukhac.cauhoithuonggap') }}">Câu hỏi thường gặp</a></li>
					</ul>
				</li>
				<!-- End Features -->
                <!-- Language -->
				<li class="">
					<a href="http://encskh.cpc.vn:8080/" style="border-bottom:none;">
						<img src="{{ $publicUrl }}/Images/Language/Eng.png" class="img-responsive   " alt="" >
					</a>
				</li>
				<!-- End Language -->              

			</ul>
		</div><!--/end container-->
	</div>
    

    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse"  id="menu2" aria-expanded="false" style="height: 1px;">
        <div class="container" style="overflow: hidden;">
                <ul class="nav navbar-nav nav_khac" style="padding:10px 0px;">
                    <li class="dropdown">
                        <ul class="loginbar pull-right nav navbar-nav navbar-right">
                            <li class="dropdown keep-open" style="cursor:pointer;">
                                <div class="row" style="padding:10px !important;overflow:hidden;">
                                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
									    
<style>
    .logout {
    
    font-size: 14px !important;
    font-weight: bold;
    color: #006bb3 !important;
    vertical-align: middle;
    cursor: pointer;
    text-transform: none;
    float: right;
    text-decoration: underline;
    padding: 20px 40px 0 0;
    display:none;
    }
    .logout > a {
        color:#006bb3 !important;
    }
    .btn-login {
        left: 3%;
    }

    .btn-regis {
        right: 10%;
    }

    .no-dis {
        display: none;
    }
    .info-cus {
        font-size:14px;
        font-weight:bold;
        color:#333333;
        line-height:1.8;
    }


    @media (min-width: 768px){
        .divThongtin {
            margin-left: -30px;
            margin-right: -30px;
        }
    }
    @media (max-width: 991px){
        .logout {
           display:block;
        }
        .btn-login {
            float:left;
            left:15%;
        }
        .btn-regis {
            
            right:15%;
        }
    }
</style>

 <!-- Modal -->
  

<div class="row text-center  ">
    <h3 class="text-primary" style="padding-left:9px; padding-right:9px; color: #004d99;"><span id="ctrlHeader1_ctrlSignin2_lbTieude">Đăng nhập hoặc Đăng ký</span></h3>
</div>


<div id="ctrlHeader1_ctrlSignin2_divDangnhap" class="row text-center">
    <div class="col-md-12">
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input name="ctl00$ctrlHeader1$ctrlSignin2$txtMA_KHANG" type="text" id="ctrlHeader1_ctrlSignin2_txtMA_KHANG" placeholder="Tên người dùng" class="form-control" />
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input name="ctl00$ctrlHeader1$ctrlSignin2$txtPassword" type="password" id="ctrlHeader1_ctrlSignin2_txtPassword" placeholder="Mật khẩu" class="form-control" />
        </div>                                 
        <div class="row">
            <div  class="col-md-6 btn-login" >                 
                <input type="submit" name="ctl00$ctrlHeader1$ctrlSignin2$btnSignIn" value="Đăng nhập" id="ctrlHeader1_ctrlSignin2_btnSignIn" class="btn-u pull-right" />		                
           </div>
            <div class="col-md-6 btn-regis"> 
                <input type="submit" name="ctl00$ctrlHeader1$ctrlSignin2$btnDangky" value="Đăng ký" id="ctrlHeader1_ctrlSignin2_btnDangky" class="btn-u pull-right" />
            </div>                                                             
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-md-12">
                <center>
                <a role="button" data-toggle="modal" data-target=".bs-example-modal-lg">Quên tên đăng nhập?</a>
                </center>
            </div>
        </div>
        <hr />
        <h4>Nếu không nhớ mật khẩu ?</h4>
        <p>Bạn có thể <a id="ctrlHeader1_ctrlSignin2_btnRemindPass" class="color-green" href="javascript:__doPostBack(&#39;ctl00$ctrlHeader1$ctrlSignin2$btnRemindPass&#39;,&#39;&#39;)" style="border-bottom: none;  padding:0px;">Bấm vào đây</a> để lấy lại mật khẩu.</p>
    </div>
</div>

									    </div>
                                </div>

                            </li>
                        </ul>

                    </li>
                </ul>

        </div><!--/end container-->
    </div>
    
    

    
    <!--/navbar-collapse-->
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="position:fixed">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 id="myLargeModalLabel2" class="modal-title">Tìm tên đăng nhập</h4>
                    </div>
                    <div class="modal-body">
                                        
                    <div id="ctrlHeader1_UpdatePanel1">
    
                            <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Div tìm kiếm-->
                                    <div id="ctrlHeader1_colla" class="sky-form">
                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-11">
                                                <section>
                                                    <h3>Chọn Phương thức tìm kiếm</h3>
                                                    <div class="inline-group">
                                                        <label class="radio"><input id="ctrlHeader1_RadioButton1" type="radio" name="ctl00$ctrlHeader1$text-inline" value="RadioButton1" checked="checked" /><i class="rounded-x"></i>Tiếng Việt có dấu</label>
                                                        <label class="radio"><input id="ctrlHeader1_rblMethod" type="radio" name="ctl00$ctrlHeader1$text-inline" value="rblMethod" /><i class="rounded-x"></i>Tiếng Việt không dấu</label>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Chọn Công ty điện lực</label>
                                            <div class="col-lg-6">
                                                <select name="ctl00$ctrlHeader1$cmbCongty" id="ctrlHeader1_cmbCongty" class="form-control color-blue">
        <option selected="selected" value="PC01">C&#244;ng ty Điện lực Quảng B&#236;nh</option>
        <option value="PC02">C&#244;ng ty Điện lực Quảng Trị</option>
        <option value="PC03">C&#244;ng ty Điện lực Thừa Thi&#234;n Huế</option>
        <option value="PC05">C&#244;ng ty Điện lực Quảng Nam</option>
        <option value="PC06">C&#244;ng ty Điện lực Quảng Ng&#227;i</option>
        <option value="PC07">C&#244;ng ty Điện lực B&#236;nh Định</option>
        <option value="PC08">C&#244;ng ty Điện lực Ph&#250; Y&#234;n</option>
        <option value="PC10">C&#244;ng ty Điện lực Gia Lai</option>
        <option value="PC11">C&#244;ng ty Điện lực Kon Tum</option>
        <option value="PC12">C&#244;ng ty Điện lực Đăk Lăk</option>
        <option value="PC13">C&#244;ng ty Điện lực Đăk N&#244;ng</option>
        <option value="PP">C&#244;ng ty TNHH MTV Điện lực Đ&#224; Nẵng</option>
        <option value="PQ">C&#244;ng ty Cổ phần Điện lực Kh&#225;nh H&#242;a</option>
        <option value="PC00">C&#244;ng ty Lưới điện cao thế miền Trung</option>

    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Chọn Điện lực</label>
                                            <div class="col-lg-6">
                                                <select name="ctl00$ctrlHeader1$cmbDienLuc" id="ctrlHeader1_cmbDienLuc" class="form-control color-blue">
        <option value="">T&#226;́t cả đi&#234;̣n lực</option>
        <option value="PC01AA">Điện lực Đồng Hới</option>
        <option value="PC01BB">Điện lực Quảng Trạch</option>
        <option value="PC01CC">Điện lực Quảng Ninh</option>
        <option value="PC01DD">Điện lực Bố Trạch</option>
        <option value="PC01EE">Điện lực Tuy&#234;n H&#243;a</option>
        <option value="PC01FF">Điện lực Lệ Thuỷ</option>
        <option value="PC01MM">Điện lực Minh H&#243;a</option>
        <option value="PC01OO">Ph&#242;ng Kinh doanh</option>

    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Mã khách hàng</label>
                                            <div class="col-lg-6">
                                                <input name="ctl00$ctrlHeader1$TxtMaKH" type="text" id="ctrlHeader1_TxtMaKH" class="form-control color-blue" placeholder="Nhập mã khách hàng" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Tên khách hàng</label>
                                            <div class="col-lg-6">
                                                <input name="ctl00$ctrlHeader1$TxtTenKH" type="text" id="ctrlHeader1_TxtTenKH" class="form-control color-blue" placeholder="Nhập tên khách hàng" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Địa chỉ khách hàng</label>
                                            <div class="col-lg-6">
                                                <input name="ctl00$ctrlHeader1$Txtdiachi" type="text" id="ctrlHeader1_Txtdiachi" class="form-control color-blue" placeholder="Địa chỉ khách hàng" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-5 col-lg-2">
                                                <input type="submit" name="ctl00$ctrlHeader1$btnTimKH" value="Tìm" id="ctrlHeader1_btnTimKH" class="form-control btn-u btn-u-blue" style="left:0px;" />
                                                
                                            </div>
                                            <div class="col-lg-2">
                                                <div id="loading">
                                                    <div id="ctrlHeader1_UpdateProgress1" style="display:none;">
         
                                                            <img id="imgloading" alt="Đang lấy..." src="{{ $publicUrl }}/Images/Icon/loader.gif"/>
                                                        
    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                    </div>
                                    <!--End Div tìm kiếm-->

                                    <!--Kết quả tìm kiếm-->
                                    
                                    <!--End Kết quả tìm kiếm-->
                                </div>
                            </div>
                            </div>
                        
</div>
                     </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-u" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

            <!--=== End Header v3 ===-->
            <!--=== Content ===-->
            
    <!-- Owl Carousel {{ $publicUrl }}/Assets -->
    <link href="{{ $publicUrl }}/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ $publicUrl }}/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ $publicUrl }}/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ $publicUrl }}/assets/css/jquery-ui.css">
    <link href="{{ $publicUrl }}/assets/css/hover.css" rel="stylesheet" type="text/css" />
    <style>
        .stylecustom {
            border: 2.5px solid #006bb3;
        }

            .stylecustom:hover {
                transition-delay: 0.5s !important; /* delays for 1 second */
                -webkit-transition-delay: 0.5s; /* for Safari & Chrome */
                transition: all 500ms linear;
                border: 2.5px solid #fe6102;
            }

        #owl-demo .item img {
            display: block;
            width: 100%;
            height: 300px;
        }

        #bar {
            width: 0%;
            max-width: 100%;
            height: 3px;
            background: #3498db;
        }

        #progressBar {
            width: 100%;
            background: #fff;
        }

        #atd img {
            width: 100%;
            height: auto;
        }

        #atd .owl-item {
            width: 250px !important;
        }

            #atd .owl-item .item {
                width: 100%;
            }

        #atd .owl-wrapper-outer {
            height: 163px;
        }

        #link img, #link1 img {
            width: 100%;
            height: auto;
        }

        #link .owl-item, #link1 .owl-item {
            width: 100px !important;
        }

            #link .owl-item .item, #link1 .owl-item .item {
                width: 80px;
                position: relative;
                left: 40px;
            }

        .img-new {
            width: 110px;
            height: 110px;
            display: initial;
            background: #006bb3;
            padding: 3px !important;
        }

        .img-comm {
            width: 100%;
            height: 100%;
            display: initial;
        }

        .heading-sm span {
            padding-top: 15px !important;
            font-size: 15px;
            font-weight: 800;
            color: #fe6102;
        }

        .toolp {
            position: relative;
            display: inline-block;
        }

        .back-info {
            background: #006bb3;
            padding: 0 3px;
            font-size: 14px;
            line-height: 2;
        }

        [title] {
            position: relative;
        }

            [title]:hover:after {
                left: 5px;
                opacity: 1;
            }

        .font-wei {
            font-weight: bold;
        }

        .hei_info > p, #mesMoney > span:first-child {
            color: #555;
        }

            .hei_info > p > span {
                color: #006bb3;
            }

        .testimonial-author + span > em {
            color: #777;
            display: block;
            font-size: 13px;
        }
        /* -------------------------------- 
:: START: Pulse Shrink
-------------------------------- */
        @-webkit-keyframes hvr-pulse-shrink {
            to {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
        }

        @keyframes hvr-pulse-shrink {
            to {
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
            }
        }

        .hvr-pulse-shrink {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
        }

            .hvr-pulse-shrink:hover, .hvr-pulse-shrink:focus, .hvr-pulse-shrink:active {
                -webkit-animation-name: hvr-pulse-shrink;
                animation-name: hvr-pulse-shrink;
                -webkit-animation-duration: 0.3s;
                animation-duration: 0.3s;
                -webkit-animation-timing-function: linear;
                animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;
                -webkit-animation-direction: alternate;
                animation-direction: alternate;
            }

        /* -------------------------------- 
:: END: Pulse Shrink
-------------------------------- */
        /*destop*/
        @media (min-width: 992px) {
            .heig-menu {
                height: 165px;
            }
        }

        @media (min-width: 992px) and (max-width: 1024px) {
            #owl-demo .item img {
                height: 180px;
            }

            .pos-pop {
                width: 36% !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1023px) {

            .pad-top {
                position: relative;
                bottom: 170px;
                left: 168px;
            }

            .btn-close {
                position: relative;
                bottom: 100px;
                left: 8px;
            }

            .mar-bott {
                margin-bottom: -70px;
            }
        }

        @media (min-width: 1024px) {
            .pad-top {
                position: relative;
                bottom: 160px;
                left: 170px;
                
            }

            .btn-close {
                position: relative;
                bottom: 80px;
                left: 12px;
            }

            .mar-bott {
                margin-bottom: -65px;
            }
        }

        /*mobile  - 5s*/
        @media (max-width: 320px) {

            #owl-demo .item img {
                height: 65px;
            }
        }

        @media (min-width: 325px) and (max-width: 425px) {

            #owl-demo .item img {
                height: 80px;
            }
        }

        @media (min-width: 1030px) and (max-width: 1440px) {

            #owl-demo .item img {
                height: 250px; /*Hung fix*/
            }
        }

        /*Ipad*/

        @media (min-width: 430px) and (max-width: 992px) {

            #owl-demo .item img {
                height: 140px;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            .col-sm-6 {
                width: 48%;
            }
        }

        @media (min-width: 999px) {
            .hei_info {
                height: 120px;
            }
        }

        .par_btn {
            padding: 10px 15px;
        }

        .chir_btn {
            padding: 0px 15px 10px;
        }

        .btn-apple, .btn-android {
            color: #fff !important;
        }

        .banner-img {
            margin: 10px auto;
            padding: 0px 10px;
        }

        .ui-dialog-titlebar-close {
            display: none;
        }

        span.ui-dialog-title {
            color: #fff;
            font-size: 17px;
        }

        .pos-pop {
            height: auto;
            width: 307px;
            top: 115px;
            left: 35%;
            display: block;
        }

        #close {
            text-align: center;
            margin: 15px auto;
        }

        .icon-app {
            width: 27px;
            height: 27px;
            position: relative;
            right: 15px;
        }

        .text-app {
            font-size: 15px;
            font-weight: bold;
            position: relative;
            bottom: 25px;
            left: 20px;
            color: black;
        }

        .li-app-1 {
            position: relative;
            float: left;
            margin-top: -30px;
            line-height: 1;
            width: 120%;
        }

        .promo-info {
            text-align: justify;
            color: black;
            margin-bottom: 5px;
        }

        .back-app {
            background: -moz-radial-gradient(top center, circle farthest-corner, #ffffff 0%, #f99a20 100%);
            background: -o-radial-gradient(top center, circle farthest-corner, #ffffff 0%, #f99a20 100%);
            background: -ms-radial-gradient(top center, circle farthest-corner, #ffffff 0%, #f99a20 100%);
            background: -webkit-radial-gradient(top center, circle farthest-corner, #ffffff 0%, #f99a20 100%);
            /*background: -moz-radial-gradient(center center, circle closest-corner, #ffffff 0%, #eac99e 100%);
        background: -o-radial-gradient(center center, circle closest-corner, #ffffff 0%, #eac99e 100%);
        background: -ms-radial-gradient(center center, circle closest-corner, #ffffff 0%, #eac99e 100%);
        background: -webkit-radial-gradient(center center, circle closest-corner, #ffffff 0%, #eac99e 100%);*/
        }

        .li-app-1 > p {
            color: #049347 !important;
        }

        .li-app-2 > p {
            color: #ec1563 !important;
        }


        @media(max-width:991px) {
            .pad-mobile {
                padding-bottom: 65px;
            }

            .left-mobile {
                left: 15%;
            }
        }

        @media (min-width:992px) {
            /*.pad-top {
            margin-top: -15px;

            margin-bottom:5px;
        }*/

            .left-mobile {
                width: 120%;
            }

            .promo-info {
                width: 110%;
            }
        }

        @media (min-width: 1440px) {
            .pos-pop {
                width: 25%;
            }
        }

        @media (min-width: 1600px) {
            .pos-pop {
                width: 20%;
            }
        }

        @media (max-width: 1439px) and (min-width: 1025px) {
            .pos-pop {
                width: 40%;
            }
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .pos-pop {
                width: 40%;
            }
        }

        @media (max-width:991px) {
            .img_cen {
                width: 60%;
            }
        }

        @media (min-width:992px) {
            .img_cen {
                width: 85%;
            }
        }

        @media (min-width:1441px) {
            .img_cen {
                width: 75%;
            }

            .pad-top {
                position: relative;
                bottom: 145px;
                left: 180px;
                
            }

            .btn-close {
                position: relative;
                bottom: 70px;
                left: 8px;
            }

            .mar-bott {
                margin-bottom: -70px;
            }
        }

        @media (max-width:2560px) and (min-width:2560px) {
            .img_cen {
                width: 50%;
            }

            .pad-top {
                position: relative;
                bottom: 130px;
                left: 245px;
            }

            .btn-close {
                position: relative;
                bottom: 60px;
                left: 8px;
            }

            .mar-bott {
                margin-bottom: -70px;
            }
        }

        .close1 {
            color: #fff;
            float: right;
            font-size: 22px;
            font-weight: bold;
            position: relative;
            bottom: 4px;
            cursor: pointer;
        }

        @media (min-width:1080px) and (max-width:1439px) {
            .img_cen {
                width: 75%;
            }

            .pad-top {
                position: relative;
                bottom: 170px;
                
            }

            .btn-close {
                position: relative;
                bottom: 85px;
                left: 10px;
            }

            .mar-bott {
                margin-bottom: -70px;
            }
        }

        @media (min-width:1080px) and (max-width:1080px) {
            .pos-pop {
                width: 35%;
            }
        }

        @media (min-width:1081px) and (max-width:1439px) {
            .pos-pop {
                width: 30%;
            }
        }

        @media (min-width:768px) {
            .img-ta1 {
                margin-left:50px;
            }
            .img-ta {
                margin-left:-40px;
            }
            .thumbnail-ta{
            margin-bottom:-5px !important;
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .banner-ta1 {
               height:65px !important;
            }
            .banner-ta2 {
               height:100px !important;
            }
        }
         @media (min-width:992px) and (max-width:1199px) {
            .banner-ta1 {
               height:85px !important;
            }
            .banner-ta2 {
               height:130px !important;
            }
        }
          @media (min-width:1200px) {
            .banner-ta1 {
               height:111px !important;
            }
            .banner-ta2 {
               height:204px !important;
            }
        }
        
                  
    </style>


    <script type="text/javascript">
        $(function () {
            $(".toolp").tooltip();             
            $(".toolp1").tooltip();             
            drawPieChart(, , );

             
         });        

    </script>
    <script>
        $(document).ready(function () { 
                       

            $("#close1").click(function(){                
                $("#draggable").css('display','none'); 
            }); 
            $("#close").click(function(){                
                $("#draggable").css('display','none'); 
            }); 
            
        }); 
    </script>
    
     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Trang quản lý</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript">
    function xacNhanXoa(){
        var x = confirm('Bạn có chắc muốn xóa');
        if(x){
            return true;
        }else{
            return false;
        }
    }
</script>
<script src="{{  $adminUrl }}/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="{{$adminUrl}}/js/ajax.js"></script>
<script type="text/javascript" src="{{$adminUrl}}/js/ajax1.js">
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{$adminUrl}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{$adminUrl}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{$adminUrl}}/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="{{$adminUrl}}/js/jquery-1.10.2.min.js"></script>
<script src="{{$adminUrl}}/js/amcharts.js"></script>	
<script src="{{$adminUrl}}/js/serial.js"></script>	
<script src="{{$adminUrl}}/js/light.js"></script>	
<script src="{{$adminUrl}}/js/radar.js"></script>	
<link href="{{$adminUrl}}/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="{{$adminUrl}}/css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="{{$adminUrl}}/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="{{$adminUrl}}/js/skycons.js"></script>

<script src="{{$adminUrl}}/js/jquery.easydropdown.js"></script>
<link rel="Shortcut Icon" href="{{$adminUrl}}/images/NewIcon.ico" type="image/x-icon" />

<!--//skycons-icons-->
</head> 

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--menu-right-->
					<div class="top_menu">
						<div class="main-search">
							<form>
								<input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
								<input type="submit" value=""/>
							</form>
							<div class="close"><img src="{{$adminUrl}}/images/cross.png" /></div>
						</div>
						<div class="srch"><button></button></div>
						<script type="text/javascript">
							$('.main-search').hide();
							$('button').click(function (){
								$('.main-search').show();
								$('.main-search text').focus();
							}
							);
							$('.close').click(function(){
								$('.main-search').hide();
							});
						</script>
						<!--/profile_details-->
						<div class="profile_details_left">
							<ul class="nofitications-dropdown">
								<li class="dropdown note dra-down">
									
									<script type="text/javascript">

										function DropDown(el) {
											this.dd = el;
											this.placeholder = this.dd.children('span');
											this.opts = this.dd.find('ul.dropdown > li');
											this.val = '';
											this.index = -1;
											this.initEvents();
										}
										DropDown.prototype = {
											initEvents : function() {
												var obj = this;

												obj.dd.on('click', function(event){
													$(this).toggleClass('active');
													return false;
												});

												obj.opts.on('click',function(){
													var opt = $(this);
													obj.val = opt.text();
													obj.index = opt.index();
													obj.placeholder.text(obj.val);
												});
											},
											getValue : function() {
												return this.val;
											},
											getIndex : function() {
												return this.index;
											}
										}

										$(function() {

											var dd = new DropDown( $('#dd') );

											$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

										});

									</script>


								</li>

								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


									<ul class="dropdown-menu two first">
										<li>
											<div class="notification_header">
												<h3>You have 3 new messages  </h3> 
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/1.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li class="odd"><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/in.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/in1.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all messages</a>
											</div> 
										</li>
									</ul>
								</li>

								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/in.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li class="odd"><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/in5.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li><a href="#">
											<div class="user_img"><img src="{{$adminUrl}}/images/in8.jpg" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
											</div>
											<div class="clearfix"></div>	
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
								</li>	
								<li class="dropdown note">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												<div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												<div class="clearfix"></div>	
											</div>

											<div class="progress progress-striped active">
												<div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												<div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												<div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												<div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
								</li>		   							   		
								<div class="clearfix"></div>	
							</ul>
						</div>
						<div class="clearfix"></div>	
						<!--//profile_details-->
					</div>
					<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
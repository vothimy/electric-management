<!--/sidebar-menu-->
<div class="sidebar-menu">
	<header class="logo">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>ADMINCP</h1></span> 
		<!--<img id="logo" src="" alt="Logo"/>--> 
	</a> 
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<div class="down">	
	<a href="index.html"><img src="{{$adminUrl}}/images/admin.jpg"></a>
	<a href="index.html"><span class=" name-caret">
		<?php 
		$arUser = Auth::user();
		if(isset($arUser)){
			$username = $arUser->username;
			$fullname = $arUser->fullname;
			$role = $arUser->role;
			echo $fullname;
		}
		?>

	</span></a>
	<?php 
	if($username == 'admin'){
		?>
		<p><?php echo 'Administrator'?></p>
		<?php } ?>
	</div>
	<!--//down-->
	<div class="menu">
		<ul id="menu" >
			<li><a href=""><i class="fa fa-user"></i> <span>Quản lí người dùng</span> <span class="fa fa-angle-right" style="float: right"></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="{{ route('admin.user.index') }}"> Quản lí user</a></li>
					<li id="menu-academico-boletim" ><a href="{{ route('admin.cus.index') }}">Quản lí khách hàng</a></li>
					<li id="menu-academico-boletim" ><a href="{{ route('admin.ndd.index') }}">Quản lí người dùng điện</a></li>
				</ul>
			</li>

			<li id="menu-academico" ><a href=""><i class="fa fa-table"></i> <span> Quản lí điện</span> <span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="{{ route('admin.loaidien.index') }}"> Quản lí loại điện</a></li>
					<li id="menu-academico-boletim" ><a href="{{ route('admin.bgd.index') }}">Quản lí bảng giá điện</a></li>
					<!-- <li id="menu-academico-avaliacoes" ><a href="calender.html">Calendar</a></li> -->
				</ul>
			</li>
			<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Quản lí xã, thôn	 </span> <span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="{{ route('admin.xa.index') }}">Quản lí xã</a></li>
					<li id="menu-academico-boletim" ><a href="{{ route('admin.thon.index') }}">Quản lí thôn</a></li>
				<!-- <li id="menu-academico-boletim" ><a href="table.html">Tables</a></li>
				<li id="menu-academico-boletim" ><a href="buttons.html">Buttons</a></li> -->
				</ul>
			</li>
			
		<li><a href="{{ route('admin.dho.index') }}"><i class="lnr lnr-pencil"></i> <span>Quản lí đồng hồ</span></a></li>
		<li id="menu-academico" ><a href="{{ route('admin.hoadon.index') }}"><i class="lnr lnr-book"></i> <span>Quản lý hóa đơn</span> <span class="fa fa-angle-right" style="float: right"></span></a>
		</li>
		
		<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Tính tiền điện</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico" ><a href="{{ route('admin.ttd.index') }}"><i class="lnr lnr-book"></i> <span>Tính tiền điện sinh hoạt</span> </a>
				</li>				
			</ul>
		</li>
	</ul>
</div>
</div>
<div class="clearfix"></div>		
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}

		toggle = !toggle;
	});
</script>
<!--js -->
<link rel="stylesheet" href="{{$adminUrl}}/css/vroom.css">
<script type="text/javascript" src="{{$adminUrl}}/js/vroom.js"></script>
<script type="text/javascript" src="{{$adminUrl}}/js/TweenLite.min.js"></script>
<script type="text/javascript" src="{{$adminUrl}}/js/CSSPlugin.min.js"></script>
<script src="{{$adminUrl}}/js/jquery.nicescroll.js"></script>
<script src="{{$adminUrl}}/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{$adminUrl}}/js/bootstrap.min.js"></script>
</body>
</html>
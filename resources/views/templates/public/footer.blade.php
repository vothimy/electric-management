    <style>
        .owl-carousel {
        position: relative;
        }
        .owl-prev,
        .owl-next {
        position: absolute;
        top: 50%;
        margin-top: -10px; // Half of the prev/next buttons height here in negatives to center them perfectly
        }
        .owl-prev {
        left: 0;
        }
        .owl-next {
        right: 0;
        }
    </style>

            <!--=== End Content ===-->
		    <!--=== Footer Version 1 ===-->
		    
<style>
    .footer-backg {
    background: #003366 !important;         /*#007acc*/
    padding:15px 0 !important;
}
.footer-color {
    color:white !important;
    font-weight:bold;
}
    .footer-logo {
        margin: 0px 0 5px;
    }
  /*Ý kiến của Hùng  .footer-backg {
    background: url(../{{ $publicUrl }}/assets/img/patterns/breadcrumbs.png) repeat !important;
}
.footer-color {
    color:#666 !important;
    font-weight:bold;
}*/


.col-md-4 .list-unstyled li:not(:first-child)
{
    border-top: solid 1px #bbb !important;
}
.name {
    position: relative;
    width: 75%;  
    bottom: 90px;
    left: 95px;
    text-align: center;
}
    @media(max-width:320px) {


        .name {           
            left: 86px;
            font-size: 11px;           
        }
    }
     @media(min-width:992px) and (max-width:1100px) {
        .name {  
            width: 80%;   
            left: 85px;   
            font-size: 1.1vw;          
        }
    }
</style>
<div id="footer-v2" class="footer-v2">
	<div class="footer footer-backg ">
		<div class="container">
			<div class="row">
				<!-- About -->
				<div class="col-md-4 md-margin-bottom-40">
                    <div style="height:110px;">
                        <div class=""> 
					        <a href="{{ route('public.index.index') }}"><img id="logo-footer" class="footer-logo" src="{{ $publicUrl }}/Images/Logo/evn_cpc.png" alt=""></a>
                        </div>
                        <div class="name">
					        <p class="footer-color "> TỔNG CÔNG TY ĐIỆN LỰC MIỀN TRUNG <br />TRUNG TÂM CHĂM SÓC KHÁCH HÀNG                          
                        </div>
                    </div>
                    
                    

                    <p class="footer-color">
                        <i class="fa fa-male" aria-hidden="true"></i>  Lượt truy cập: <span class="counter" style="color: #ff9900; margin: 0px 12px;">
                            <span id="ctrlFooter1_lblCounter">5,158,113</span></span>
                    </p>
                    <p class="footer-color"> <i class="fa fa-link" aria-hidden="true"></i>  Đang truy cập: <span class="counter" style="color: #ff9900; margin: 0px 5px;">
                        <span id="ctrlFooter1_lblGuest">143</span></span></p>

                    
					
				</div>
				<!-- End About -->

				<!-- Link List -->
				<div class="col-md-4 md-margin-bottom-40">
					<div class="headline "><h2 class="heading-sm " style="color:#ff9900;">Hướng dẫn khách hàng</h2></div>
					<ul class="list-unstyled link-list ">
						<li><a class="footer-color" href="frm_Gioithieu.aspx">Giới thiệu</a><i class="fa fa-angle-right"></i></li>
						<li><a class="footer-color" href="http://qlcv.cskh.cpc.vn/webchat/">Hỗ trợ trực tuyến</a><i class="fa fa-angle-right"></i></li>
						<li><a class="footer-color" href="frm_Lienhe.aspx">Liên hệ</a><i class="fa fa-angle-right"></i></li>						
					</ul>
				</div>
				<!-- End Link List -->

				<!-- Latest Tweets -->
				<div class="col-md-4 md-margin-bottom-40">
					<div class="latest-tweets">
						<div class="headline"><h2 class="heading-sm " style="color:#ff9900;" >Thông tin liên hệ </h2></div>
                        <address class="md-margin-bottom-40 footer-color">
						    <i class="fa fa-home"></i>393 Trưng Nữ Vương, Đà Nẵng <br />
						    <i class="fa fa-phone"></i>Điện thoại: 1900 1909 <br />
						    <i class="fa fa-globe"></i>Website: <a href="https://cpc.vn/Home/default.aspx" style="color:#ff9900; margin:0 5px;">www.cpc.vn</a> <br />
						    <i class="fa fa-envelope"></i>Email: <a href="https://mail.cpc.vn/" style="color:#ff9900; margin:0 17px;">cskh@cpc.vn</a>
					    </address>
					</div>
				</div>
				<!-- End Latest Tweets -->

				<!-- Address -->
				
				<!-- End Address -->
			</div>
		</div>
	</div><!--/footer-->

	<div class="copyright">
		<div class="container">
            <div class="row">
			    <div class="col-md-6">
				    <p>
					    2016 &copy; All Rights Reserved. EVNCPCIT
				    </p>
			    </div>

			    <!-- Social Links -->
			    <div class="col-md-6" style="text-align:right">
				    <ul class="footer-socials list-inline">
					    <li>
						    <a href="https://www.facebook.com/evncpccc/?fref=ts" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
							    <i class="fa fa-facebook"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
							    <i class="fa fa-skype"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
							    <i class="fa fa-google-plus"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
							    <i class="fa fa-linkedin"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
							    <i class="fa fa-pinterest"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
							    <i class="fa fa-twitter"></i>
						    </a>
					    </li>
					    <li>
						    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
							    <i class="fa fa-dribbble"></i>
						    </a>
					    </li>
				    </ul>
			    </div>
			    <!-- End Social Links -->
		    </div>
		</div>
	</div><!--/copyright-->
</div>


		    <!--=== End Footer Version 1 ===-->
	    </div><!--/wrapper-->   
        </form>
    <script src="{{ $publicUrl }}/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="{{ $publicUrl }}/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ $publicUrl }}/assets/js/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{{ $publicUrl }}/assets/js/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="{{ $publicUrl }}/assets/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    
    <script>
        jQuery(document).ready(function ($) {
            $("#draggable").draggable();           
        });
        </script>

        <!-- JS Global Compulsory -->
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="{{ $publicUrl }}/Content/common.js"></script>
        <script src="{{ $publicUrl }}/assets/js/highcharts.js" type="text/javascript"></script>
        <script src="{{ $publicUrl }}/assets/js/data.js" type="text/javascript"></script>
        <script src="{{ $publicUrl }}/assets/js/exporting.js" type="text/javascript"></script>
        <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/jquery/jquery-migrate.min.js"></script>
   
	    <!-- JS Implementing Plugins -->
    
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/back-to-top.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/smoothScroll.js"></script>
	    <script src="{{ $publicUrl }}/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	    <script src="{{ $publicUrl }}/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	    <script src="{{ $publicUrl }}/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	
    
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
               
            });
        </script>
	    <!-- JS Customization -->
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/custom.js"></script>
	    <!-- JS Page Level -->
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/app.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/style-switcher.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/masking.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/datepicker.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/validation.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/style-switcher.js"></script>
        <script>
            $(function () {
                var urlParams;
                (window.onpopstate = function () {
                    var match,
                                    pl = /\+/g,  // Regex for replacing addition symbol with a space
                                    search = /([^&=]+)=?([^&]*)/g,
                                    decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
                                    query = window.location.search.substring(1);

                    urlParams = {};
                    while (match = search.exec(query))
                        urlParams[decode(match[1])] = decode(match[2]);
                })();
                if (urlParams["type"] == 'nsh') {
                    $('a[href=#ngoaisinhhoat]').click();
                }
                else if (urlParams["type"] == 'sh') {
                    $('a[href=#sinhhoat]').click();
                }
            });
        </script>
	    <script type="text/javascript">
	        jQuery(document).ready(function () {
	            App.init();
	            Datepicker.initDatepicker();
	            Masking.initMasking();
	            Validation.initValidation();
	            StyleSwitcher.initStyleSwitcher();
	        });
	    </script>
	    
	    <!-- JS Implementing Plugins -->
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/back-to-top.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/smoothScroll.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/plugins/jquery.parallax.js"></script>

	    <!-- JS Page Level -->
        <script src="{{ $publicUrl }}/owl-carousel/owl.carousel.js"></script>
	    <script type="text/javascript">
	        jQuery(document).ready(function () {
	            App.init();
	            StyleSwitcher.initStyleSwitcher();
	        });
	    </script>
        <script>
            function openModal() {
                $('#myModal').modal('show');
            }
        </script>
        <script src="{{ $publicUrl }}/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {

                var time = 7; // time in seconds

                var $progressBar,
                    $bar,
                    $elem,
                    isPause,
                    tick,
                    percentTime;

                //Init the carousel
                $("#owl-demo").owlCarousel({
                    slideSpeed: 500,
                    paginationSpeed: 500,
                    singleItem: true,
                    afterInit: progressBar,
                    afterMove: moved,
                    startDragging: pauseOnDragging
                });

                //Init progressBar where elem is $("#owl-demo")
                function progressBar(elem) {
                    $elem = elem;
                    //build progress bar elements
                    buildProgressBar();
                    //start counting
                    start();
                }

                //create div#progressBar and div#bar then prepend to $("#owl-demo")
                function buildProgressBar() {
                    $progressBar = $("<div>", {
                        id: "progressBar"
                    });
                    $bar = $("<div>", {
                        id: "bar"
                    });
                    //$('.owl-wrapper-outer').after($progressBar.append($bar).appendTo($elem));
                    $progressBar.append($bar).appendTo('.owl-wrapper-outer');
                }

                function start() {
                    //reset timer
                    percentTime = 0;
                    isPause = false;
                    //run interval every 0.01 second
                    tick = setInterval(interval, 10);
                };

                function interval() {
                    if (isPause === false) {
                        percentTime += 1 / time;
                        $bar.css({
                            width: percentTime + "%"
                        });
                        //if percentTime is equal or greater than 100
                        if (percentTime >= 100) {
                            //slide to next item 
                            $elem.trigger('owl.next')
                        }
                    }
                }

                //pause while dragging 
                function pauseOnDragging() {
                    isPause = true;
                }

                //moved callback
                function moved() {
                    //clear interval
                    clearTimeout(tick);
                    //start again
                    start();
                }

                //uncomment this to make pause on mouseover 
                $elem.on('mouseover', function () {
                    isPause = true;
                })
                $elem.on('mouseout', function () {
                    isPause = false;
                })

                $('#atd').owlCarousel({
                    autoPlay: 3000,
                    paginationSpeed: 1000,
                    loop: true,
                    autoWidth: true,
                    margin: 8,
                    responsiveClass: true,
                    items: 3,
                    responsive: {
                        375: {
                            margin: 2,
                            items: 1,
                            nav: true
                        },
                        768: {
                            margin: 2,
                            items: 2,
                            nav: true
                        }
                    }
                })
                $('#link').owlCarousel({
                    autoPlay: 3000,
                    paginationSpeed: 1000,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    items: 5,
                    responsive: {
                        375: {
                            items: 3,
                            nav: true
                        },
                        768: {
                            items: 4,
                            nav: true
                        }
                    },
                    navigation: true,
                    navigationText: [
                        "<i class='fa fa-chevron-left'></i> ",
                        "<i class='fa fa-chevron-right'></i>"
                    ]
                })
                $('#link1').owlCarousel({
                    autoPlay: 3000,
                    paginationSpeed: 1000,
                    loop: true,
                    responsiveClass: true,
                    margin: 7,
                    items: 3,
                    responsive: {
                        375: {
                            items: 1,
                            nav: true
                        },
                        768: {
                            items: 2,
                            nav: true
                        }
                    },
                    navigation: true,
                    navigationText: [
                        "<i class='fa fa-chevron-left'></i> ",
                        "<i class='fa fa-chevron-right'></i>"
                    ]
                })
                if ($.cookie('pop') == null) {
                    $('#draggable').css('display', 'block');
                    var date = new Date();
                    var minutes = 720;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('pop', '1', { expires: date });
                }
            });
        </script>
        
        
        <script src="{{ $publicUrl }}/assets/js/bootstrap-transition.js"></script>
        <script src="{{ $publicUrl }}/assets/js/bootstrap-tab.js"></script>

        <script src="{{ $publicUrl }}/assets/js/google-code-prettify/prettify.js"></script>
        <script src="{{ $publicUrl }}/assets/js/ajax.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/owl-carousel.js"></script>
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/plugins/parallax-slider.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                App.init();
                OwlCarousel.initOwlCarousel();
                StyleSwitcher.initStyleSwitcher();
                ParallaxSlider.initParallaxSlider();
            });
            
	    </script>
        <script src="{{ $publicUrl }}/assets/plugins/counter/waypoints.min.js"></script>
        <script src="{{ $publicUrl }}/assets/plugins/counter/jquery.counterup.min.js"></script>   
        <!-- JS Customization -->
	    <script type="text/javascript" src="{{ $publicUrl }}/assets/js/custom.js"></script>
        
</body>
</html>
    
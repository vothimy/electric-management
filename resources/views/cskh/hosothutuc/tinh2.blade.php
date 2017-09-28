@extends('templates.public.master')
@section('main-content')
<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left"><span id="ContentPlace_lbTieude">Giá bán lẻ</span></h1>
				<ul id="ContentPlace_breadcumbs" class="pull-right breadcrumb"><li><a href='Default.aspx'>Trang chủ</a></li><li><a href='#'>Giá bán điện</a></li><li class='active'>Giá bán lẻ</li></ul>
			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->
        <!--=== Blog Posts ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<div class="row">
					<!-- Blog Sidebar -->
					<div class="col-md-3">
						<div class="headline-v2"><h2>Bài liên quan</h2></div>
						<!-- Trending -->
						<ul class="list-unstyled blog-trending margin-bottom-50">
                            
                                    <li>
								        <h3><a href="{{ route('public.hosothutuc.giabanle') }}">Giá bán lẻ</a></h3>
								        <small>Ngày đăng: 03/09/2016</small>
							        </li>
                                
                                    <li>
								        <h3><a href="{{ route('public.hosothutuc.tinh1') }}">Tính tiền công suất phản kháng</a></h3>
								        <small>Ngày đăng: 03/09/2016</small>
							        </li>
                                
                                    <li>
								        <h3><a href="{{ route('public.hosothutuc.tinh2') }}">Tính tiền trong tháng đổi giá</a></h3>
								        <small>Ngày đăng: 03/09/2016</small>
							        </li>
                                
                                
						</ul>
						<!-- End Trending -->

						<div class="headline-v2"><h2>Chia sẻ</h2></div>
						<!-- Tags v2 -->
						<ul class="list-inline tags-v2 margin-bottom-50">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google</a></li>
						</ul>
						<!-- End Tags v2 -->

					</div>
					<!-- End Blog Sidebar -->

					<!-- Blog All Posts -->
<div class="col-md-9">
						<!-- Blog Posts -->
						<div class="news-v3 bg-color-white margin-bottom-60">
							<div class="news-v3-in">
								<ul class="list-inline posted-info">
									<li>Đăng bởi EVNCPC-CC</li>
								</ul>
								<span id="ContentPlace_lblContent"><p><span style="font-family: 'times new roman', times; font-size: large;"><strong>1. Căn cứ tính tiền:</strong></span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">- Lượng điện thực tế khách hàng sử dụng trong kỳ ghi chỉ số (GCS)</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">- Số ngày sử dụng điện thực tế (số ngày giữa hai kỳ GCS)</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">- Biểu giá bán điện</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;"><strong>2. Cách tính sản lượng điện theo giá cũ và giá mới:</strong></span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">- Đối với khách hàng thực hiện ghi chỉ số công tơ tại thời điểm thực hiện giá mới (chốt chỉ số): Sản lượng tính giá cũ căn cứ vào chỉ số ghi được tại thời điểm bắt đầu thực hiện giá mới và chỉ số công tơ của kỳ GCS trước liền kề. Sản lượng tính giá mới căn cứ vào chỉ số ghi được tại thời điểm bắt đầu thực hiện giá mới và chỉ số công tơ của kỳ GCS hiện tại;</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">- Đối với khách hàng ký hợp đồng mua điện phục vụ mục đích sinh hoạt và khách hàng không thực hiện được việc GCS công tơ tại thời điểm thực hiện giá mới, sản lượng điện để tính giá cũ và giá mới như sau:</span></p><p style="text-align: center; "><font size="4"><b><span style="font-family: 'times new roman', times;">Sản lượng điện tính giá cũ = S/ T x Nc (kWh)</span><span style="font-family: 'times new roman', times;">&nbsp; </span></b></font><span style="font-family: 'times new roman', times; font-size: large;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Sản lượng điện tính giá mới = S - Sản lượng điện tính giá cũ&nbsp;&nbsp; (kWh).</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Trong đó:&nbsp;&nbsp;&nbsp; S-&nbsp; Sản lượng điện tiêu thụ trong tháng tính tiền (kWh);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">T-&nbsp; Số ngày sử dụng điện thực tế (tính từ ngày GCS của&nbsp; tháng trước liền kề đến ngày GCS của tháng tính tiền) (ngày);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Nc- Số ngày tính giá cũ (tính từ ngày GCS của tháng trước liền kề đến ngày thực hiện giá mới) (ngày);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;"><strong>3. Cách tính định mức bậc thang giá sinh hoạt:</strong></span></p><p style="text-align: center; "><span style="font-family: 'times new roman', times; font-size: large;"><strong>Mtci = Mqci/ T x Nc x h (kWh)</strong></span></p><p style="text-align: center; "><span style="font-family: 'times new roman', times; font-size: large;"><strong>Mtmi = Mqmi/ T x Nc x h (kWh)</strong></span><span style="font-family: 'times new roman', times; font-size: large;">&nbsp;</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Trong đó:&nbsp;&nbsp;&nbsp; Mtci- &nbsp;&nbsp; Mức bậc thang cũ thứ i để tính tiền&nbsp;&nbsp; (kWh);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Mtmi-&nbsp;&nbsp;&nbsp; Mức bậc thang mới thứ i để tính tiền&nbsp; (kWh);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Mqci-&nbsp;&nbsp;&nbsp; Mức bậc thang thứ i quy định theo biểu giá cũ (kWh);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Mqmi-&nbsp;&nbsp; Mức bậc thang thứ i quy định theo biểu giá mới &nbsp; kWh);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">T-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Số ngày (theo lịch)&nbsp; của tháng trước liền kề&nbsp;&nbsp; (ngày);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Nc-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Số ngày tính giá cũ (tính từ ngày GCS của tháng trước&nbsp;&nbsp; liền kề đến ngày thực hiện giá mới)&nbsp; (ngày);</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">Nm-.. &nbsp; Số ngày tính giá mới (tính từ ngày thực hiện giá mới đến ngày GCS của tháng tính tiền)&nbsp;&nbsp; (ngày).</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">h- .... Số hộ dùng chung.</span></p>
<p><span style="font-family: 'times new roman', times; font-size: large;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Làm tròn giá trị Mti theo phương pháp làm tròn số học.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p></span>
							</div>
						</div>
						<!-- End Blog Posts -->

					</div>
					<!-- End Blog All Posts -->
				</div>
			</div>
		</div>

@stop
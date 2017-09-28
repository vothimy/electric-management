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
                                
                                    <li>
								        <h3><a href="{{ route('public.hosothutuc.giabanbuon') }}">Giá bán buôn</a></h3>
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
								<span id="ContentPlace_lblContent"><div style="text-align: center;"><b><font size="5">BIỂU GIÁ ĐIỆN BÁN BUÔN <br></font></b><b><span style="font-size:15.0pt;
font-family: 'Times New Roman';background:white"><br>(Áp dụng theo QĐ 2256/QĐ-BCT ngày 12/3/2015 của Bộ Công Thương)</span></b><br></div><div style="text-align: left;"><b><font size="4"><br></font></b></div><div style="text-align: center;"><table class="MsoNormalTable" style="width:505.95pt;margin-left:4.65pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 5.4pt 0in 5.4pt" border="0" cellpadding="0" cellspacing="0" width="675">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.5pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:white;padding:0in 5.4pt 0in 5.4pt;
  height:40.5pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><b><font size="4">STT<o:p></o:p></font></b></span></p>
  </td>
  <td style="width:389.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:40.5pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><b><font size="4">ĐỐI TƯỢNG
  ÁP DỤNG GIÁ<o:p></o:p></font></b></span></p>
  </td>
  <td style="width:68.7pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0in 5.4pt 0in 5.4pt;
  height:40.5pt" width="92">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>GIÁ BÁN
  BUÔN (đồng/kWh)</b><o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">1<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>NÔNG THÔN</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="92">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">1.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện sinh hoạt</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.230<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.279<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.394<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.720<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.945<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.028<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">1.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện cho mục đích khác</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.322<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">2<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>KHU TẬP THỂ, CỤM DÂN CƯ</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.1<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Thành Phố, thị xã</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.1.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện sinh hoạt</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.1.1.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">Trạm biến áp do Bên bán điện đầu tư<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.382<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.431<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.624<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.049<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.310<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.389<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:21;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.1.1.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">Trạm biến áp do Bên mua điện đầu tư<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.361<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:23;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.410<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:24;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.575<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:25;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.984<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:26;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.229<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:27;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.333<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:28;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.1.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện cho mục đích khác</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.333<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:29;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.2<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Thị trấn, huyện lỵ</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:30;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.2.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện sinh hoạt</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:31;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.2.1.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><font size="4"><i><span style="font-family: 'Times New Roman', serif;">Trạm biến áp do Bên bán điện đầu tư</span></i><span style="font-family: 'Times New Roman', serif;">&nbsp;<i><o:p></o:p></i></span></font></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:32;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.332<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:33;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.381<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:34;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.539<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:35;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.941<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:36;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.181<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:37;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.256<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:38;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.2.1.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><font size="4"><i><span style="font-family: 'Times New Roman', serif;">Trạm biến áp do Bên mua điện đầu tư</span></i><span style="font-family: 'Times New Roman', serif;">&nbsp;<i><o:p></o:p></i></span></font></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:39;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.311<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:40;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.360<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:41;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.503<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:42;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.856<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:43;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.101<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:44;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.174<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:45;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">2.2.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">Giá bán buôn điện cho mục đích khác<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.333<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:46;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:47;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">3<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>TỔ HỢP THƯƠNG MẠI - DỊCH VỤ - SINH HOẠT</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:48;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">3.1<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện sinh hoạt</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:49;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 1: Cho kWh từ 0 đến 50<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.454<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:50;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 2: Cho kWh từ 51 đến 100<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.502<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:51;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 3: Cho kWh từ 101 đến 200<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.750<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:52;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 4: Cho kWh từ 201 đến 300<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.197<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:53;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 5: Cho kWh từ 301 đến 400<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.453<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:54;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;Bậc 6: Cho kWh từ 401 trở lên<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.535<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:55;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">3.2<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện cho mục đích khác</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:56;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.192<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:57;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.334<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:58;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">3.771<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:59;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:60;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">4<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>KHU CÔNG NGHIỆP</b><o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:61;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">4.1<o:p></o:p></font></span></p>
  </td>
  <td colspan="2" style="width:457.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="611">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện tại thanh cái 110kV của
  trạm biến áp 110kV/35-22-15-6kV</b><o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:62;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">4.1.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Tổng công suất đặt các MBA của trạm biến áp
  lớn hơn 100MVA</b><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:63;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.325<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:64;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">846<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:65;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.407<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:66;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">4.1.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><i><span style="font-family: 'Times New Roman', serif;"><b style=""><font size="4">Tổng công suất đặt các MBA của trạm biến áp từ 50MVA đến 100 MVA</font></b><font size="4"><o:p></o:p></font></span></i></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:67;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.330<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:68;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">820<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:69;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.395<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:70;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">4.1.3<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><font size="4"><i><span style="font-family: 'Times New Roman', serif;"><b>Tổng công suất đặt các MBA của trạm biến áp
  dưới 50 MVA</b></span></i><span style="font-family: 'Times New Roman', serif;"><b>&nbsp;</b><i><o:p></o:p></i></span></font></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:71;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.324<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:72;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">818<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:73;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.379<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:74;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">4.2<o:p></o:p></font></span></p>
  </td>
  <td colspan="2" style="width:457.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="611">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4"><b>Giá bán buôn điện phía trung áp của trạm
  biến áp 110kV/35-22-15-6kV</b><o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:75;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">4.2.1<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><font size="4"><i><span style="font-family: 'Times New Roman', serif;"><b>Cấp điện áp từ 22kV đến dưới 110kV</b></span></i><span style="font-family: 'Times New Roman', serif;"><b>&nbsp;&nbsp;</b><i><o:p></o:p></i></span></font></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:76;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" valign="bottom" width="64">
  <p class="MsoNormal"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.378<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:77;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">885<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:78;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.506<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:79;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">4.2.2<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><font size="4"><i><span style="font-family: 'Times New Roman', serif;"><b>Cấp điện áp từ 6kV đến dưới 22kV</b></span></i><span style="font-family: 'Times New Roman', serif;"><b>&nbsp;&nbsp;</b><i><o:p></o:p></i></span></font></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:80;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;a) Giờ bình thường<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">1.425<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:81;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;b) Giờ thấp điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">916<o:p></o:p></font></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:82;mso-yfti-lastrow:yes;height:24.75pt">
  <td style="width:48.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="64">
  <p class="MsoNormal" style="text-align:center;mso-hyphenate:auto" align="center"><i><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;<o:p></o:p></font></span></i></p>
  </td>
  <td style="width:389.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" nowrap="" width="519">
  <p class="MsoNormal" style="text-align: left;"><span style="font-family: 'Times New Roman', serif;"><font size="4">&nbsp;&nbsp;&nbsp;c) Giờ cao điểm<o:p></o:p></font></span></p>
  </td>
  <td style="width:68.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  white;padding:0in 5.4pt 0in 5.4pt;height:24.75pt" width="92">
  <p class="MsoNormal" style="text-align:right;mso-hyphenate:auto" align="right"><span style="font-family: 'Times New Roman', serif;"><font size="4">2.586<o:p></o:p></font></span></p>
  </td>
 </tr>
</tbody></table><p style="text-align: left;"><span style="font-family: 'times new roman', times;"><strong><font size="4">1. Quy định về giờ:&nbsp;</font></strong></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><em><strong><font size="4">a) Giờ bình thường</font></strong></em></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Gồm các ngày từ thứ Hai đến thứ Bảy</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">- Từ 04 giờ 00 đến 9 giờ 30 (05 giờ và 30 phút);</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">- Từ 11 giờ 30 đến 17 giờ 00 (05 giờ và 30 phút);</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">- Từ 20 giờ 00 đến 22 giờ 00 (02 giờ).</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Ngày Chủ nhật</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Từ 04 giờ 00 đến 22 giờ 00 (18 giờ).</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><em><strong><font size="4">b) Giờ cao điểm</font></strong></em></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Gồm các ngày từ thứ Hai đến thứ Bảy</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">- Từ 09 giờ 30 đến 11 giờ 30 (02 giờ);</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">- Từ 17 giờ 00 đến 20 giờ 00 (03 giờ).</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Ngày Chủ nhật: không có giờ cao điểm.</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><em><strong><font size="4">c) Giờ thấp điểm:</font></strong></em></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">Tất cả các ngày trong tuần: từ 22 giờ 00 đến 04 giờ 00 sáng ngày hôm sau (06 giờ).</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><strong><font size="4">2. Đối tượng mua điện theo hình thức ba giá:</font></strong></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">a) Khách hàng sử dụng cho mục đích sản xuất, kinh doanh, dịch vụ được cấp điện qua máy biến áp chuyên dùng từ 25 kVA trở lên hoặc có sản lượng điện sử dụng trung bình ba tháng liên tục từ 2.000 kWh/tháng trở lên;</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">b) Đơn vị bán lẻ điện tại khu công nghiệp;</font></span></p>
<p style="text-align: left;"><span style="font-family: 'times new roman', times;"><font size="4">c) Đơn vị mua điện để bán lẻ điện ngoài mục đích sinh hoạt tại tổ hợp thương mại - dịch vụ - sinh hoạt;</font></span></p>
<p style="text-align: left;"><br></p>
<p><font size="4">&nbsp;</font></p></div></span>
							</div>
						</div>
						<!-- End Blog Posts -->

					</div>
					<!-- End Blog All Posts -->
				</div>
			</div>
		</div>
		<!--=== End Blog Posts ===-->

@stop
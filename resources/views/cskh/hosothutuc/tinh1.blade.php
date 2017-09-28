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
								<span id="ContentPlace_lblContent"><p><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">CÁCH TÍNH TIỀN CÔNG SUẤT PHẢN KHÁNG</span></strong></span></p>
<p><span style="font-size: large; font-family: 'times new roman', times;">Tq&nbsp;= Ta&nbsp;x k%</span></p>
<p><span style="font-family: 'times new roman', times;"><strong><em><span style="font-size: large;">Trong đó:</span></em></strong></span></p>
<p><span style="font-size: large; font-family: 'times new roman', times;"><strong>Tq:&nbsp;</strong>Tiền mua công suất phản kháng (chưa có thuế giá trị gia tăng);</span></p>
<p><span style="font-size: large; font-family: 'times new roman', times;"><strong>Ta:&nbsp;</strong>Tiền mua điện năng tác dụng (chưa có thuế giá trị gia tăng);</span></p>
<p><span style="font-size: large; font-family: 'times new roman', times;"><strong>k :</strong>&nbsp;Hệ số bù đắp chi phí do bên mua điện sử dụng quá lượng CSPK quy định (%).</span></p>
<p><span style="font-size: large; font-family: 'times new roman', times;">&nbsp;</span></p>
<p><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">Hệ số k được tính theo bảng sau:</span></strong></span></p>
<table border="1" cellspacing="0" cellpadding="10" align="center">
    <tbody>
        <tr>
            <td>
                <p><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">Hệ số công suất</span></strong></span></p>
                <p align="center"><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">Cosφ</span></strong></span></p>
            </td>
            <td>
                <p align="center"><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">k (%)</span></strong></span></p>
            </td>
            <td>
                <p align="center"><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">Hệ số công suất</span></strong></span></p>
                <p align="center"><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">Cosφ</span></strong></span></p>
            </td>
            <td>
                <p align="center"><span style="font-family: 'times new roman', times;"><strong><span style="font-size: large;">k (%)</span></strong></span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">Từ 0,9 trở lên</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,74</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">21,62</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,89</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">1,12</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,73</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">23,29</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,88</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">2,27</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,72</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">25</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,87</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">3,45</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,71</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">26,76</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,86</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">4,65</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,7</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">28,57</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,85</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">5,88</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,69</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">30,43</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,84</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">7,14</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,68</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">32,35</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,83</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">8,43</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,67</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">34,33</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,82</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">9,76</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,66</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">36,36</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,81</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">11,11</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,65</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">38,46</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,8</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">12,5</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,64</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">40,63</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,79</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">13,92</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,63</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">42,86</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,78</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">15,38</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,62</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">45,16</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,77</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">16,88</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,61</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">47,54</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,76</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">18,42</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,6</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">50</span></p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">0,75</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">20</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">Dưới 0,6</span></p>
            </td>
            <td>
                <p align="center"><span style="font-size: large; font-family: 'times new roman', times;">52,54</span></p>
            </td>
        </tr>
    </tbody>
</table>
<div><span style="font-size: large; font-family: 'times new roman', times;">&nbsp;</span></div>
<p><span style="font-family: 'times new roman', times; font-size: large;"><strong>&nbsp;</strong></span></p>
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
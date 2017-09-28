@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Thêm</h2>
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="graph-form">
			<div class="validation-form">
				<form action="{{ route('admin.ndd.create') }}" method="POST">
				{{csrf_field()}}
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Người dùng điện</label>
							<input type="text" placeholder="Tên khách hàng" name="tenkh" value="" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-6 form-group1">
							<label class="control-label">Xã</label>
							<select name="selector1" id="selector1"  class="form-control">
								<option>--xã---</option>
								@foreach($arX as $arx)
									<option value="{{ $arx->id }}">{{ $arx->tenxa }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 form-group1">
							<label class="control-label">Thôn</label>
							<select name="selector2" id="selector2" class="form-control">
								<option>---thôn--</option>
								@foreach($arT as $art)
									<option value="{{ $art->id }}">{{ $art->tenloai }}</option>
								@endforeach
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Địa chỉ</label>
							<input type="text" name="diachi" placeholder="Địa chỉ" value="" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="vali-form">
						<div class="col-md-6 form-group1">
							<label class="control-label">CMND</label>
							<input type="text" name="cmnd" placeholder="Chứng minh nhân dân" value="">
						</div>
						<div class="col-md-6 form-group1">
							<label class="control-label">Nơi cấp</label>
							<input type="text" name="noicap" placeholder="Nơi cấp" value="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<?php 
							$ngay = date("d");
							$thang = date("m");
							$nam = date("Y");
						?>
						<div class="col-md-4 form-group1">
							<label class="control-label">Cấp ngày</label>
							<select name="ngay" class="form-control">
								@for($i = 1;$i <= 31; $i++)
									@if($i == $ngay)
										<option value="{{$i}}" selected="selected">{{$i}}</option>
									@else
										<option value="{{$i}}">{{$i}}</option>
									@endif
								@endfor
							</select>
						</div>
						<div class="col-md-4 form-group1">
							<label class="control-label">Tháng</label>
							<select name="thang" class="form-control">
								@for($i = 1;$i <= 12; $i++)
									@if($i == $thang)
										<option value="{{$i}}" selected="selected">{{$i}}</option>
									@else
										<option value="{{$i}}">{{$i}}</option>
									@endif
								@endfor
							</select>
						</div>
						<div class="col-md-4 form-group1">
							<label class="control-label">Năm</label>
							<select name="nam" class="form-control">
								@for($i = 1915;$i <= 2017; $i++)
									@if($i == $nam)
										<option value=" {{$i}}" selected="selected">{{$i}}</option>
									@endif
										<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Email</label>
							<input type="text" placeholder="Email" name="email" value="" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">SĐT</label>
							<input type="text" placeholder="SĐT" name="sdt" value="" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Sử dụng loại điện</label>
							<select name="loaidien" class="form-control">
								@foreach($arLD as $arld)
								<option value="{{$arld->id}}">{{$arld->tenloai}}</option>
								@endforeach
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-12 form-group button-2">
						<button type="submit" class="btn btn-primary">Thêm</button>
					</div>
					<div class="clearfix"> </div>
				</form>

				<!---->
			</div>

		</div>
	</div> 
	<!--//forms-->											   
</div>
@stop
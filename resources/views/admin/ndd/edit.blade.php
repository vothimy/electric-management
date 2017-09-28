@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Sửa</h2>
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
				<form action="{{ route('admin.ndd.edit',['id'=>$arItem->id]) }}" method="POST">
				{{csrf_field()}}

					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Người dùng điện</label>
							<input type="text" placeholder="Tên khách hàng" name="tenkh" value="{{ $arItem->tenkh }}" required="">
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Địa chỉ</label>
							<input type="text" name="diachi" placeholder="Địa chỉ" value="{{ $arItem->diachi }}" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="vali-form">
						<div class="col-md-6 form-group1">
							<label class="control-label">CMND</label>
							<input type="text" name="cmnd" placeholder="Chứng minh nhân dân" value="{{ $arItem->cmnd }}">
						</div>
						<div class="col-md-6 form-group1">
							<label class="control-label">Nơi cấp</label>
							<input type="text" name="noicap" placeholder="Nơi cấp" value="{{ $arItem->noicap }}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
					<?php 
						$date = explode('/', $arItem->ngaycap);
						$ngay = $date['0'];
						$thang = $date['1'];
						$nam = $date['2'];
					?>
						<div class="col-md-4 form-group1">
							<label class="control-label">Cấp ngày</label>
							<select name="ngay" class="form-control">
								@for($i = 1;$i <= 31; $i++)
									@if($i == $ngay)
										<option value="{{$i}}" selected="selected">{{$i}}</option>
									@endif
										<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>
						<div class="col-md-4 form-group1">
							<label class="control-label">Tháng</label>
							<select name="thang" class="form-control">
								@for($i = 1;$i <= 12; $i++)
									@if($i == $thang)
										<option value="{{$i}}" selected="selected">{{$i}}</option>
									@endif
										<option value="{{$i}}">{{$i}}</option>
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
							<input type="text" placeholder="Email" name="email" value="{{ $arItem->email }}" required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">SĐT</label>
							<input type="text" placeholder="SĐT" name="sdt" value=" 0{{$arItem->sdt}} " required="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-12 form-group button-2">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
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
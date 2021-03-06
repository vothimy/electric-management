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
				<form action="{{ route('admin.thon.create') }}" method="POST">
				{{csrf_field()}}
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Tên thôn</label>
							<input type="text" placeholder="Tên thôn" name="name" value="">
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Thuộc xã</label>
							<select name="selector1" id="selector1" class="form-control1">
								@foreach($arCats as $arcat)
									<option value="{{ $arcat->id }}">{{ $arcat->tenxa }}</option>
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
			</div>
		</div>
	</div> 
	<!--//forms-->											   
</div>
@stop
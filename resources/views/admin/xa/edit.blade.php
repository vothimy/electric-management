@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Chỉnh sửa</h2>
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
				<form action="{{ route('admin.xa.edit',['id'=>$arItems->id]) }}" method="POST">
				{{csrf_field()}}
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Tên xã</label>
							<input type="text" placeholder="Tên xã" name="name" value="{{ $arItems->tenxa }}">
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
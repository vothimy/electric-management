@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Tính tiền điện theo thôn</h2>
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
				<form action="{{ route('admin.ttd.showsx') }}" method="POST">
				{{csrf_field()}}
					
					<div class="vali-form">
						<div class="col-md-6 form-group1">
							<label class="control-label">Xã</label>
							<select name="selector1" id="selector3sx"  class="form-control">
								<option>--xã---</option>
								@foreach($arX as $arx)
									<option value="{{ $arx->id }}">{{ $arx->tenxa }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 form-group1">
							<label class="control-label">Thôn</label>
							<select name="selector2" id="selector4sx" class="form-control">
								<option>---thôn--</option>
								@foreach($arT as $art)
									<option value="{{ $art->id }}">{{ $art->tenloai }}</option>
								@endforeach
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="clearfix"> </div>
					<div class="col-md-12 form-group button-2">
						<button type="submit" class="btn btn-primary">Chọn</button>
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
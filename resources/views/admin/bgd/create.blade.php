@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Thêm</h2>
		<div class="graph-form">
			<div class="validation-form">
				<form action="{{ route('admin.bgd.create') }}" method="POST">
				{{csrf_field()}}
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Loại điện</label>
							<select name="selector1" id="selector1" class="form-control1">
								@foreach($arCats as $arcat)
									<option value="{{ $arcat->id }}">{{ $arcat->tenloai }}</option>
								@endforeach
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Bậc</label>
							<input type="text" placeholder="Bậc" name="bac" value="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Mức quy định</label>
							<input type="text" placeholder="Mức quy định" name="mqd" value="">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Giá bán</label>
							<input type="text" placeholder="Giá bán" name="gia" value="">
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
@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Cập nhật</h2>
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
				<form action="{{ route('admin.bgd.edit',['id'=>$arItems->id]) }}" method="POST">
				{{csrf_field()}}
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Loại điện</label>
							<select name="selector1" id="selector1" class="form-control1">
								@foreach($arCats as $arcat)
									@if($arcat->id == $arItems->mald)
										<option value="{{ $arcat->id }}" selected="">{{ $arcat->tenloai }}</option>
									@else
										<option value="{{ $arcat->id }}">{{ $arcat->tenloai }}</option>
									@endif	
								@endforeach
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Bậc</label>
							<input type="text" placeholder="Bậc" name="bac" value="{{ $arItems->bac }}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Mức quy định</label>
							<input type="text" placeholder="Mức quy định" name="mqd" value="{{ $arItems->mucqd }}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="vali-form">
						<div class="col-md-12 form-group1">
							<label class="control-label">Giá bán</label>
							<input type="text" placeholder="Giá bán" name="gia" value="{{ $arItems->giaban }}">
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
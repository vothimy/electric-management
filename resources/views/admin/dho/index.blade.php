@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<div class="graph-visual tables-main">
		<h3 class="inner-tittle two">Đồng hồ</h3>
		<div class="graph">
			<div class="tables">
					@if(Session::has('msg'))
						<div class="form-title">{{ Session::get('msg') }}</div>
					@endif
				<table class="table table-hover">
					<thead> 
						<tr>
							<th>Mã ĐH</th> 
							<th>Thuộc loại điện</th> 
							<th>Khách hàng</th> 
							<th>Địa chỉ</th> 
						</tr> 
					</thead>
					<tbody> 
					@foreach($arItems as $item)
					<?php 
						$id = $item->id;
						$urlEdit = route('admin.dho.edit',['id'=>$id]);
						$urlDel = route('admin.dho.destroy',['id'=>$id]);
					?>
						<tr> 
							<th scope="row">{{ $id }}</th>
							@foreach($arLD as $arld) 
								@if($arld->id == $item->mald)
								<td>{{ $arld->tenloai }}</td> 
								@endif
							@endforeach

							@foreach($arKH as $arkh) 
								@if($arkh->id == $item->id)
								<td>{{ $arkh->tenkh }}</td>
								<td>{{ $arkh->diachi }}</td> 
								@endif
							@endforeach
						</tr>
					@endforeach 
					</tbody> 
				</table>
			</div>
		</div>
	</div>
	<!--//graph-visual-->
</div>

@stop
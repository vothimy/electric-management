@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<div class="graph-visual tables-main">
		<h3 class="inner-tittle two">Danh sách thôn</h3>

		<div class="graph">
			<div class="buttons-ui col-md-12">
				<a href="{{ route('admin.thon.create') }}" class="btn blue" style="float:left"	>Thêm</a>
			</div>
			<div class="tables">
					@if(Session::has('msg'))
						<div class="form-title">{{ Session::get('msg') }}</div>
					@endif
				<table class="table table-hover">
					<thead> 
						<tr>
							<th>ID</th> 
							<th>Tên thôn</th> 
							<th>Thuộc xã</th> 
							<th>Chức năng</th> 
						</tr> 
					</thead>
					<tbody> 
					@foreach($arItems as $item)
					<?php 
						$id = $item->id;
						$tenthon = $item->tenthon;
						$urlEdit = route('admin.thon.edit',['id'=>$id]);
						$urlDel = route('admin.thon.destroy',['id'=>$id]);
					?>
						<tr> 
							<th scope="row">{{ $id }}</th> 
							<td>{{ $tenthon }}</td> 
							@foreach($arCats as $arcat)
								@if($arcat->id == $item->maxa)
									<td>{{ $arcat->tenxa }}</td>
								@endif
							@endforeach 
							<td><a href="{{ $urlDel }}" onclick="return xacNhanXoa()"><i class="fa fa-trash-o"></i> Xóa</a> || <a href="{{ $urlEdit }}">	<i class="fa fa-pencil-square-o"></i> Sửa</a></td> 
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
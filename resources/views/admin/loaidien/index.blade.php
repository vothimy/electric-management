@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--sub-heard-part-->
	<!-- <div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">Tables</li>
		</ol>
	</div> -->
	<!--//sub-heard-part-->
	
	<div class="graph-visual tables-main">
		<h3 class="inner-tittle two">Danh sách các loại điện</h3>

		<div class="graph">
			<div class="buttons-ui col-md-12">
				<a href="{{ route('admin.loaidien.create') }}" class="btn blue" style="float:left"	>Thêm</a>
			</div>
			<div class="tables">
					@if(Session::has('msg'))
						<div class="form-title">{{ Session::get('msg') }}</div>
					@endif
				<table class="table table-hover">
					<thead> 
						<tr>
							<th>ID</th> 
							<th>Tên loại điện</th> 
							<th>Chức năng</th> 
						</tr> 
					</thead>
					<tbody> 
					@foreach($arItems as $item)
					<?php 
						$id = $item->id;
						$tenloai = $item->tenloai;
						$urlEdit = route('admin.loaidien.edit',['id'=>$id]);
						$urlDel = route('admin.loaidien.destroy',['id'=>$id]);
					?>
						<tr> 
							<th scope="row">{{ $id }}</th> 
							<td>{{ $tenloai }}</td> 
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
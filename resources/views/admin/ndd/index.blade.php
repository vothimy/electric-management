@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	
	<div class="graph-visual tables-main">
		<h3 class="inner-tittle two">Người dùng điện</h3>

		<div class="graph">
			<div class="buttons-ui col-md-12">
				<a href="{{ route('admin.ndd.create') }}" class="btn blue" style="float:left"	>Thêm</a>
			</div>
			<div class="tables">
				@if(Session::has('msg'))
					<div class="form-title">{{ Session::get('msg') }}</div>
				@endif
				<table class="table table-hover">
					<thead> 
						<tr>
							<th>ID</th> 
							<th>Tên người dùng</th> 
							<th>Email</th> 
							<th>SĐT</th> 
							<th>Địa chỉ</th> 
							<th>Trạng thái</th> 
							<th>Chức năng</th> 
						</tr> 
					</thead>
					<tbody> 
					@foreach($arItems as $item)
					<?php 
						$id = $item->id;
						$diachi = $item->diachi;
						$tenkh = $item->tenkh;
						$email = $item->email;
						$sdt = $item->sdt;
						$urlEdit = route('admin.ndd.edit',['id'=>$id]);
						$urlDel = route('admin.ndd.destroy',['id'=>$id]);
					?>
						<tr> 
							<th scope="row">{{ $id }}</th> 
							<td>{{ $tenkh }}</td> 
							<td>{{ $email }}</td> 
							<td>{{ $sdt }}</td> 
							<td>{{ $diachi }}</td> 
							
							<td >
								<div onclick="changeTT({{ $item->id }})">
									@if($item->status == 1)	
									<input type="checkbox" checked="checked"> 
									@else
									<input type="checkbox">
									@endif
								</div>
							</td> 
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
<script type="text/javascript">
	function changeTT(id_kh){
		$.ajax({
			url: '{{ route("admin.ndd.ajax") }}',  
			type: 'get',
			cache: false,
			data: {
				aid : id_kh
			},
			success: function(result){
				console.log(result);
				if(result.status == 1){
					alert('đã kích hoạt');
				}else{
					alert('hủy kích hoạt');
				}						
			}
		});     
	}
</script>
@stop

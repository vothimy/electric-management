@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<div class="graph-visual tables-main">
		<h3 class="inner-tittle two">Danh sách khách hàng</h3>
		<div class="graph">
			<div class="tables">
				@if(Session::has('msg'))
					<div class="form-title">{{ Session::get('msg') }}</div>
				@endif
				<table class="table table-hover">
					<thead> 
						<tr>
							<th>ID</th> 
							<th>Username</th> 
							<th>Fullname</th> 
							<th>Địa chỉ</th> 
							<th>Trạng thái</th> 
							<th>Chức năng</th> 
						</tr> 
					</thead>
					<tbody> 
					@foreach($arItems as $item)
					@if($item->role == 3)
					<?php 
						$id = $item->id;
						$username = $item->username;
						$fullname = $item->fullname;
						$address = $item->address;
						$urlEdit = route('admin.user.edit',['id'=>$id]);
						$urlDel = route('admin.user.destroy',['id'=>$id]);
					?>
						<tr> 
							<th scope="row">{{ $id }}</th> 
							<td>{{ $username }}</td> 
							<td>{{ $fullname }}</td> 
							<td>{{ $address }}</td> 
							
							<td >
								<div onclick="changeTT({{ $item->id }})">
									@if($item->status == 1)	
									<input type="checkbox" checked="checked"> 
									@else
									<input type="checkbox">
									@endif
								</div>
							</td> 
							<td><a href="{{ $urlDel }}" onclick="return xacNhanXoa()"><i class="fa fa-trash-o"></i> Xóa</a> </td> 
						</tr>
					@endif
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
			url: '{{ route("admin.cus.ajax") }}',  
			type: 'get',
			cache: false,
			data: {
				aid : id_kh
			},
			success: function(result){
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

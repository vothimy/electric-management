@extends('templates.admin.master')
@section('main-content')
<div class="outter-wp">
	<!--/forms-->
	<div class="forms-main">
		<h2 class="inner-tittle">Tính tiền điện</h2>
		
		<div class="graph-form">
			<div class="validation-form">
				<form action="{{ route('admin.ttd.show') }}" method="POST">
				{{csrf_field()}}
					
					<div class="vali-form">
						<?php 
							$thang = date("m");
							$nam = date("Y");
						?>
						
						<div class="col-md-3 form-group1">
							<label class="control-label">Tháng</label>
							<select name="thang" class="form-control" id="thangabc">
								<option value="">--- Chọn tháng ---</option>
								@for($i = 1;$i <= 12; $i++)

									<option value="{{$i}}">{{$i}}</option>							
								@endfor
							</select>
						</div>

						<div class="col-md-3 form-group1">
							<label class="control-label">Năm</label>
							<select name="namabc" class="form-control" id="namabc">
								@for($i = 2017;$i >= 2016; $i--)
									@if($i == $nam)
										<option value=" {{$i}}" selected="selected">{{$i}}</option>
									@else
										<option value="{{$i}}">{{$i}}</option>
									@endif
								@endfor
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<table class="table table-hover">
					<thead> 
						<tr>
							<th>Mã NDĐ</th> 
							<th>Tên người dùng</th> 
							<th>Loại điện</th> 
							<th>Mã đồng hồ</th> 
							<th>Chỉ số cũ</th> 
							<th>Chỉ số mới</th> 
							<th>Tháng</th> 
							<th>Tính tiền</th> 
						</tr> 
					</thead>
					<tbody  id="result"> 
					@foreach($arItems as $item)
					<?php  
						$date = $item->created;
		                $d = getdate(strtotime($date));
		                $ngay = $d['mon'].'/'.$d['year'];
					?>
						<tr> 
						<th scope="row">{{$item->idndd}}</th> 
						<td>{{ $item->tenkh }}</td> 						
						@foreach($arLD as $ld)
							@if($item->mald == $ld->id)
								<td>{{ $ld->tenloai}}</td>							
							@endif
						@endforeach	
							<td>{{  $item->madh }} </td> 
							 
							 <td>{{$item->chisocu}}</td>
										
						<td style="cursor: pointer;" class="chiso">
								<input style="width: 60px" type="number" min="{{$item->chisocu}}" class="chisomoish"  value="{{$item->chisomoi}}" name="chisomoi" id="{{ $item->idd }}">
								
							</td> 
						<td>{{ $ngay }}</td>
						<td id="tien{{ $item->idd }}">{{number_format($item->tongtien) }} VNĐ</td></tr> 
						@endforeach
					</tbody> 
				</table>
					
					<div class="clearfix"> </div>
				</form>
			</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".chisomoish").keyup(function(){
				var id = $(this).attr('id');
				var value = $(this).val();
				var chisocu = $(this).attr("min");
				if(value < chisocu){
					alert("Chỉ số mới phải lớn hơn chỉ số cũ");
				}
				$.ajax({
					url:"{{route('admin.ttd.tinhtiendien')}}",
					type:'get',
					data:{'id':id,'value':value},
					success:function(data){
						console.log(data);
						$('#tien'+id).html(data.tongtien);
						$('.chiso'+id).html(data.chisomoi);
					}
				});
			})
		})
	</script>
		</div>
	</div> 
	<!--//forms-->	
											   
</div>
@stop
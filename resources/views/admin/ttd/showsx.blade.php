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
							<select name="thangsx" class="form-control" id="thangsx">
								<option value="">--- Chọn tháng ---</option>
								@for($i = 1;$i <= 12; $i++)

									<option value="{{$i}}">{{$i}}</option>							
								@endfor
							</select>
						</div>
						<div class="col-md-3 form-group1">
							<label class="control-label">Năm</label>
							<select name="namsx" class="form-control" id="namsx">
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
							<th>Chỉ số giờ bình thường</th> 
							<th>Chỉ số giờ thấp điểm</th> 
							<th>Chỉ số giờ cao điểm</th> 
							<th>Chỉ số mới</th> 
							<th>Tính tiền</th> 
						</tr> 
					</thead>
					<tbody  id="resultsx"> 
					@foreach($arItems as $item)
						<tr> 
						<th scope="row">{{$item->idd}}</th> 
						<td>{{ $item->tenkh }}</td> 						
						@foreach($arLD as $ld)
							@if($item->mald == $ld->id)
								<td>{{ $ld->tenloai}}</td>							
							@endif
						@endforeach	
							<td>{{  $item->madh }} </td> 
							 						
						<td style="cursor: pointer;" id="{{ $item->idd }}" class="chiso">
							<input style="width: 60px" type="number" min="0" class="chisomoi" value="{{ $item->giothapdiem }}" name="chisomoi" id="{{ $item->idd }}">
						</td> 
						<td style="cursor: pointer;" id="{{ $item->idd }}" class="chiso">
							<input style="width: 60px" type="number" min="0" class="chisomoi" value="{{ $item->giobinhthuong }}" name="chisomoi" id="{{ $item->idd }}">
						</td> <td style="cursor: pointer;" id="{{ $item->idd }}" class="chiso">
							<input style="width: 60px" type="number" min="0" class="chisomoi" value="{{ $item->giocaodiem }}" name="chisomoi" id="{{ $item->idd }}">
						</td> 
						</td> <td style="cursor: pointer;" id="{{ $item->idd }}" class="chiso">
							<input style="width: 60px" type="number" min="0" class="chisomoi" value="{{ $item->giocaodiem }}" name="chisomoi" id="{{ $item->idd }}">
						</td> 
				
						<td id="tien{{ $item->idd }}">{{number_format($item->tongtien) }} VNĐ</td></tr> 
						@endforeach
					</tbody> 
				</table>
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
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$(".chisomoi").keyup(function(){
				var id = $(this).attr('id');
				var value = $(this).val();
				//var value = $(this).val();
				
				//alert(value);
				$.ajax({
					url:"{{route('admin.ttd.tinhtiendien')}}",
					type:'get',
					data:{'id':id,'value':value},
					success:function(data){
						console.log(data);
						$('#tien'+id).html(data.tongtien);
						$({{chiso'+id).html(data.chisomoi);
					}
				});
			})
		})
	</script>										    -->
</div>
@stop
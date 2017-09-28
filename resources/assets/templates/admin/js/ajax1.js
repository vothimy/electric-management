$(document).ready(function(){
	$("#selector3").change(function(){
		var id = $(this).val();
		$.ajax({
			url:'ttd/change1',
			type:'get',
			data:{'id':id},
			success:function(data){
				console.log(data);
				$('#selector4').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#selector3sx").change(function(){
		var id = $(this).val();
		$.ajax({
			url:'change1',
			type:'get',
			data:{'id':id},
			success:function(data){
				console.log(data);
				$('#selector4sx').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#thangabc").change(function(){
		var thangabc = $(this).val();
		var namabc = $("select[id='namabc']").val();
		$.ajax({
			url:'ttd/changethang',
			type:'get',
			data:{'thangabc':thangabc,'namabc':namabc},
			success:function(data){
				console.log(data);
				$('#result').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#thangsx").change(function(){
		var thangsx = $(this).val();
		var namsx = $("select[id='namsx']").val();
		$.ajax({
			url:'ttd/changethangsx',
			type:'get',
			data:{'thangsx':thangsx,'namsx':namsx},
			success:function(data){
				console.log(data);
				$('#resultsx').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#namabc").change(function(){
		var namabc = $(this).val();
		var thangabc = $("select[id='thangabc']").val();
		$.ajax({
			url:'ttd/changethang',
			type:'get',
			data:{'thangabc':thangabc,'namabc':namabc},
			success:function(data){
				console.log(data);
				$('#result').html(data);
			}
		});
	})
})
						
$(document).ready(function(){
	$("#selector3").change(function(){
		var id = $(this).val();
		$.ajax({
			url:'ttd/change1',
			type:'get',
			data:{'id':id},
			success:function(data){
				console.log(data);
				$('#selector4').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#thangabc").change(function(){
		var thangabc = $(this).val();
		var namabc = $("select[id='namabc']").val();
		$.ajax({
			url:'ttd/changethang',
			type:'get',
			data:{'thangabc':thangabc,'namabc':namabc},
			success:function(data){
				console.log(data);
				$('#result').html(data);
				$(".chisomoish").keyup(function(){
					var id = $(this).attr('id');
					var value = $(this).val();
					$.ajax({
						url:"ttd/tinhtiendien",
						type:'get',
						data:{'id':id,'value':value},
						success:function(data){
							console.log(data);
							$('#tien'+id).html(data.tongtien);
							$('.chiso'+id).html(data.chisomoi);
						}
					});
				})
			}
		});
	})
})
$(document).ready(function(){
	$("#namabc").change(function(){
		var namabc = $(this).val();
		var thangabc = $("select[id='thangabc']").val();
		$.ajax({
			url:'ttd/changethang',
			type:'get',
			data:{'thangabc':thangabc,'namabc':namabc},
			success:function(data){
				console.log(data);
				$('#result').html(data);
				$(".chisomoish").keyup(function(){
					var id = $(this).attr('id');
					var value = $(this).val();
					$.ajax({
						url:"ttd/tinhtiendien",
						type:'get',
						data:{'id':id,'value':value},
						success:function(data){
							console.log(data);
							$('#tien'+id).html(data.tongtien);
							$('.chiso'+id).html(data.chisomoi);
						}
					});
				})
			}
		});
	})
})
$(document).ready(function(){
	$("#thanghd").change(function(){
		var thanghd = $(this).val();
		var namhd = $("select[id='namhd']").val();
		
		$.ajax({
			url:'hoadon/changehd',
			type:'get',
			data:{'thanghd':thanghd,'namhd':namhd},
			success:function(data){
				console.log(data);
				$('#result').html(data);
			}
		});
	})
})
$(document).ready(function(){
	$("#namhd").change(function(){
		var namhd = $(this).val();
		var thanghd = $("select[id='thanghd']").val();
		$.ajax({
			url:'hoadon/changehd',
			type:'get',
			data:{'thanghd':thanghd,'namhd':namhd},
			success:function(data){
				console.log(data);
				$('#result').html(data);
			}
		});
	})
})
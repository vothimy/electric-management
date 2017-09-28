$(document).ready(function(){
	$("#selector1").change(function(){
		var id = $(this).val();
		$.ajax({
			url:'change',
			type:'get',
			data:{'id':id},
			success:function(data){
				console.log(data);
				$('#selector2').html(data);
			}
		});
	})
})
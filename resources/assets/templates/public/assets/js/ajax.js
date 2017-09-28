$(document).ready(function(){
	$("#ContentPlace_btnDangky").click(function(){
		alert(1);
		$.ajax({
			url:'/reg',
			type:'get',
			data:{},
			success:function(data){
				console.log(data);
				// $('#result').html(data);
			}
		});
	})
})
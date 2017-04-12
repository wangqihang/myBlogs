var index = (function (){
	var ad;
	var re;
	$(".reply").click(function(){
		var name = $(this).parent().prev().html();
		$("#huifu").replaceWith(" 回复 <span style='color:blue;'>"+name+"</span>");
		$("#pinglun").html("回复：");
		$('#for').removeAttr("action");
		$("#sub").css("display","none");
		$("#but").css("display","block");
		ad = $(this).next().val();
		re = $(this).attr("date");
	});
	$("#but").click(function(){
		var con = $("#com_content").val();
		if(con==""){
			alert("回复的内容不能为空!");
		}
		
		$.post("../../../../Home/Detail/answer",{reply:re,admin:ad,content:con}, function (data) {
			if(data==1){
				alert("回复成功！");
				document.location.reload();
			}else if(data==0){
				alert("恢复失败！");
			}else{
				alert("系统错误！");
			}
		});
	});
})();
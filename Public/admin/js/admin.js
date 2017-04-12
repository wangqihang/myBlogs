var main = (function(){
	/*键盘监听事件*/ 
	$("#submit").click(function(){
		var data = $("#form").serialize();
		$.post("../../../Admin/Login/checklogin", data, function (data) {
			if(data=="0"){
				alert('账号或密码不能为空!');
			}else if(data=='1'){
				alert('验证码不能为空!');
			}else if(data=='2'){
				$("#code").css("border","1px solid red");
				$("#imgcode").attr("src","../../../Admin/Login/code/");
			}else if(data=='3'){
				$("#user").css("border","1px solid red");
				$("#imgcode").attr("src","../../../Admin/Login/code/");
			}else if(data=='4'){
				$("#password").css("border","1px solid red");
				$("#imgcode").attr("src","../../../Admin/Login/code/");
			}else{
				window.location.href = "../../../Admin/Index/index";
			}
		});
	});
	$("#code").focus(function(){
    	$("#code").css("border","1px solid black");
  	});
  	$("#user").focus(function(){
    	$("#user").css("border","1px solid black");
  	});
  	$("#password").focus(function(){
    	$("#password").css("border","1px solid black");
  	});
})();
var write = (function(){
	var ue = UE.getEditor('editor');
	$("#send").click(function(){
		var content = UE.getEditor('editor').getContent();
		var title = $("#title").val();
		if(content=="" || title==""){
			alert("标题和内容不能为空!");
		}else{
			var type = $("#type").val();
			$.post("../../../Admin/Index/write_handle",{con:content,typedata:type,titledata:title},function(data){
				if(data==1){
					alert("发表成功!");
					window.location.href = "../../../Admin/Index/index";
				}else{
					alert("发表失败!");
					return;
				}
			});
		}
	});

})();
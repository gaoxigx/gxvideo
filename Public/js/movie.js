$(function(){	
		$.validator.setDefaults({
			submitHandler:function(from) {
				from.submit();
			}
		});

		$("#add_post").validate({
			rules:{
				title:'required',
				cat_id:'cat_required',
				thumb:'required',
				file_url:'required',
			},
			messages:{				
				title:'请输入标题',
				thumb:'请上传展示图',
				file_url:'请请上传视频',
			},
			errorClass:'cerror',
			
		});
		
		jQuery.validator.addMethod("cat_required", function(value,element) {
			if(value == 0){
				//return this.optional(element);
				return false;
			}else{
				return true;
			}
			
		}, "请选择分类");
		
});

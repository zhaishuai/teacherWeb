$(document).ready(function() {
	
	//选项卡
	$(".js_slide").each(function(g) {
		$(".js_slide").eq(g).find(".list_title li").each(function(e) {
			$(this).click(function() {
				//全部隐藏按钮select
				$(this).parents(".list_title").find("li").each(function() {
					$(this).removeClass("select");
				});
				//显示当前按钮select
				$(this).addClass("select");
				//过滤内容可见性select
				$(this).parents(".js_slide").find(".list_content .list_sub").each(function(f) {
					//$(this).removeClass("noselect");
					$(this).removeClass("select");
					if (e == f) {
						$(this).addClass("select");
					//} else {
						//$(this).addClass("noselect");
					}
				});

			});
		});
	});
	
	/*首页左上菜单*/
	var menuselect
	$(".menu > li").mousemove(function(){
		$(this).find(".menu2").width( $(this).find(".menu2").width() );
		$(this).addClass("hover");
	});
	$(".menu > li").mouseleave(function(){
		$(this).removeClass("hover");
	});
	
	
	
	
	
	//表单上有默认字的处理
	function txtdefault() {
	$('.js_txtdefault').css("color","#999")
	$('.js_txtdefault').each(function() {
        $(this).focus(function() {
			if($(this).val()==this.defaultValue){
			$(this).css("color","#666")
			$(this).val("");
			} 
		});
		$(this).blur(function() {
			if($(this).val()==""){
				$(this).css("color","#999")
				$(this).val(this.defaultValue);
			} 
		});
    });
	}
	txtdefault()
	

	
	//加重当前行
	$(".myscoring").hover(function() {
		$(this).addClass("v_select");
	}, function() {
		$(this).removeClass("v_select");
	});
	

	
});
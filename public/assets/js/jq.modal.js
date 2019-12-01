/*
    A simple jQuery modal revised by logofun
    only show the content linking the href element
    some chinese comment
*/

// 这个分号的作用是防止和其他jquery插件合并时，别人不规范的jquery插件忘记使用分号结束
//影响到我们当前的插件，导致无法运行的问题。
;
(function (factory) {

  if(typeof module === "object" && typeof module.exports === "object") {
    factory(require("jquery"), window, document);
  }
  else {
    factory(jQuery, window, document);
  }
}(function($, window, document, undefined) {

var jqModal = function(el,opt){

	this.defaults = {
       //默认设置 留待后期扩展 比如指定宽度
       //default setting for further expand, for exampl, like the width as below
		width: '900px',
        };
  this.options = $.extend({},this.defaults,opt);

  this.init(el);
	this.open($(".jqblocker"));
}

jqModal.prototype = {
    //初始化函数
    init:function(el){
		$body = $('body');

		//遮罩层和显示层 实现绝对定位下的水平居中
		$div = '<div class="jqblocker behind"> \
					<div style="position: absolute; left: 50%; top:10%;">\
					<div class="jqmodal" style="position: relative; left: -50%;" role="content">\
					</div> \
					</div> ';
		$body.append($div);

		//获取a标签 href链接 页面
		if (el.is('a')) {
			target = el.attr('href');
			$.get(target).done(function(html) {
				$(".jqmodal").empty().append('<div><a type="button" class="close" rel="modal:close"><span aria-hidden="true">&times;</span></a><\div>');
				$(".jqmodal").append(html);
				$(".jqmodal").css("padding","15px");
          	}).fail(function() {
				$(".jqblocker").remove();
				var msg = "链接地址出现错误";
				alert( msg ); 
       		});
			
		}
	},
	//打开模态框
	open:function(el){
		console.log({el});
		el.toggleClass('behind',false)
		el.find('.jqmodal').show();
		
		//增加ESC 按键退出事件		
		$(document).off('keydown.jqmodal').on('keydown.jqmodal', function(event) {
        		if (event.which === 27){
				$.jqModalClose();
			} 
      		});
	}
 
}



//挂载到$的原型中，初始化实体类
$.fn.jqModal = function(options){ 
	new jqModal(this,options); 
	return this;
	}
	
$.extend({
	jqModalClose:function(){
		$(".jqblocker").remove();
	}
});

$(document).on('click', 'a[rel~="modal:close"]', function(event){
	event.preventDefault();
	$.jqModalClose();
	});	
$(document).on('click', 'a[rel~="modal:open"]', function(event) {
    event.preventDefault();
    $(this).jqModal();
	})
	
}))

$(document).ready(function(){

	$(".switcher").animate({left:"-200px"});
	$(".switcher h2 a, .accountswitch").click(function(e){
		e.preventDefault();
		var t=$(".switcher");
		console.log(t.css("left"));
		if(t.css("left")==="-200px"){
			$(".switcher").animate({
				left:"0px"
			})
		} else {
			$(".switcher").animate({
				left:"-200px"
			})
		}
	});

});
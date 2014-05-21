$(function(){
	$("#generate").click(function(){
		$("#show").attr("src", "http://liyi.it/mom/draw.php?text1=" + $("#text1").val() + "&text2=" + $("#text2").val() + "&text3=" + $("#text3").val());
	});
	$(window).keydown(function(){
		if (window.event.keyCode == 13) {
			$("#show").attr("src", "http://liyi.it/mom/draw.php?text1=" + $("#text1").val() + "&text2=" + $("#text2").val() + "&text3=" + $("#text3").val());
		}
	});
});
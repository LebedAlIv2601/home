	var info=$(".info").val();
	console.log(info);
$("#btnR").click(function(){
	if (info=0) {
	$("#red").css("background-color", "#f00");
	$("#yellow").css("background-color", "#a18600");
	$("#green").css("background-color", "#25a100");
	info=1;
	return info;
} else if (info=1) {
		$("#red").css("background-color", "#a10000");
	$("#yellow").css("background-color", "#fbff00");
	$("#green").css("background-color", "#25a100");
		info=2;
	return info;
} else if (info=2){
		$("#red").css("background-color", "#a10000");
	$("#yellow").css("background-color", "#a18600");
	$("#green").css("background-color", "#3bff00");
			info=0;
	return info;
}
	// var info=$(".info").val();
	// console.log(info);
});
$("#btnY").click(function(){
	$("#red").css("background-color", "#a10000");
	$("#yellow").css("background-color", "#fbff00");
	$("#green").css("background-color", "#25a100");
});
$("#btnG").click(function(){
	$("#red").css("background-color", "#a10000");
	$("#yellow").css("background-color", "#a18600");
	$("#green").css("background-color", "#3bff00");
});
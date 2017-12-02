console.log('AL');
var podarki=["Ацтекское мыло", "Бумажный комп", "Дубовый кубик", "Закодированный мужик", "Волос минотавра","Мышь","Коньячок", "Больной гоблин", "Базальтовый стол", "Розовые коньки на шариках", "Шерстяной меч", "Красная кнопка", "Снег с сюрпризом", "Береза из собак", "Мухомор"]
var kartinki=["milo.jpeg", "komp.jpeg"]
$("#btnB").click(function(){
	var podarok = Math.floor(Math.random() * 15);
	console.log(podarki[podarok]);
	$(".gift").text(podarki[podarok]);
});
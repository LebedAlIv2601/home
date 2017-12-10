console.log('AL');
var podarki=["Ацтекское мыло", "Бумажный комп", "Дубовый кубик", "Закодированный мужик", "Волос минотавра","Мышь","Коньячок", "Больной гоблин", "Базальтовый стол", "Розовые коньки на шариках", "Надувной меч", "Красная кнопка", "Снег с сюрпризом", "Клавиатура Бога", "Мухомор"]
var kartinki=["milo.jpg", "komp.jpg", 'kubik.jpg', 'muzhik.jpg', 'volos.jpg', 'mish.jpg', 'konyak.jpg', 'goblin.jpg', 'stol.jpg', 'konki.jpg', 'mech.jpg', 'knopka.jpg', 'sneg.jpg', 'klava.jpg', 'muhomor.jpg']
$("#btnB").click(function(){
	var papka = 'img/'
	var podarok = Math.floor(Math.random() * 15);
	console.log(podarki[podarok]);
	$(".gift").text(podarki[podarok]);
	$(".kartinka").attr('src', papka+kartinki[podarok]);
});
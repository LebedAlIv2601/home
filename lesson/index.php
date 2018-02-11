<?php 
session_start(); 
if(isset($_POST['login'])){ 
$name=$_POST['login']; 
$pass = $_POST['pass']; 
$pass = sha1($pass); 
$check = sha1(registration.$pass12); 
if($pass==$check){ 
$_SESSION['auth']=1; 
header('Location: http://lesson/autchi.php'); 
}else{ 
echo "СВАЛИЛ!"; 
} 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Lesso</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="all.css">
</head> 
<body> 
<form action="index.php" method="post">
<!-- 	<input type="text" name="login" placeholder="Login"><br> 
	<input type="password" name="pass" placeholder="Password"><br> 
	<input type="submit" value="Bойти">  -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="http://ventanascorporatecenter.com/wp-content/uploads/2015/07/Ventanas_Logo1.png" alt="" class="imgOne">
				</div>
				<div class="col-md-6">
					<p class="nomer">+7(926)222-22-22</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="http://icasasecologicas.com/wp-content/uploads/2016/04/Ventanas-de-madera.jpg" alt="" class="imgTwo">
			</div>
			<div class="zakaz">
			<div class="col-md-4">
				<p>Для заказа необходимо войти</p>
			<input type="text" name="login" placeholder="Логин" class="logpas"><br> 
	<input type="password" name="pass" placeholder="Пароль" class="logpas"><br> 
	<input type="submit" class="btn btn-success" value="Bойти">
	<a href="registration.php">Регистрация</a>
			</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="http://www.hobbit.ru/userfiles/160210/image051.jpg" alt="" class="kinds">
				<h1>Окна для дверей</h1>
				<p class="paragraf">Хотите сделать свои двери более прозрачными? Уникальные окна от Ventanas позволят Вам это! Качество гарантируется!</p>
			</div>
			<div class="col-md-4">
				<img src="http://refite.ru/wp-content/uploads/2016/06/576f7d3bdcfcc.jpg" alt="" class="kinds">
				<h1>Витражные окна</h1>
				<p class="paragraf">Хочется красоты? Витражные окна от Ventanas помогут Вам украсить Ваше жилище! Выполняются окна отменными мастерами, качество гарантируется!</p>
			</div>
			<div class="col-md-4">
				<img src="http://mygazeta.com/i/2017/06/104.jpg" alt="" class="kinds">
				<h1>Обычные окна</h1>
				<p class="paragraf">Мало света в доме? Окна от Ventanas прольют свет в Ваше жилище! Прочные и красивые-это то, что нужно для любого покупателя!</p>
			</div>
		</div>
	</div>
	<div class="podval">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p>О нас</p>
				<p>Доставка: +7(926)333-33-33</p>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<p>Мы в социальных сетях:</p>
				<a href="https://vk.com/panibratsky0">ВКонтакте</a><br>
				<a href="https://www.instagram.com/danp6266/?hl=ru">Instagram</a>
			</div>
		</div>
	</div>
</div>
</form> 
</body> 
</html>
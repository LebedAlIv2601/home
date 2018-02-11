<?php 
	session_start();
	$pass12 = $_POST['pass12'];
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
			<div class="col-md-4">
			</div>
			<div class="zakaz">
			<div class="col-md-4">
				<header>Регистрация</header>
				<input type="text" name="SurN" placeholder="Фамилия" class="logpas"><br> 
				<input type="text" name="Name" placeholder="Имя" class="logpas"><br> 
				<input type="text" name="Phone" placeholder="Телефон" class="logpas"><br> 
				<input type="text" name="login" placeholder="Логин" class="logpas"><br> 
				<input type="password" name="pass12" placeholder="Пароль" class="logpas"><br> 
				<input type="submit" class="btn btn-success" value="Зарегестрироваться" href="index.php">
			</div>
			</div>
			<div class="col-md-2"></div>
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
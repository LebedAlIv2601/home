<?php 
session_start(); 
if(!isset($_SESSION['auth'])){ 
header('Location: http://lesson'); 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Document</title> 
</head> 
<body> 
<h1>Эй! Проваливай!</h1> 
</body> 
</html>
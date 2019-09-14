<?php

$conn = new PDO("mysql:dbname=php7;host=localhost","root","root");

$conn->beginTransaction(); 

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
	
$id = 6;

$stmt->execute(array($id));

$conn->commit();

echo "Delete \O/ com sucesso. :)";

?>
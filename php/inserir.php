<?php 
	$pdo = require 'conexao.php';

	$sql = 'insert into paobanco(Nome, Telefone, Senha) value(?, ?, ?)';

	$prepare = $pdo->prepare($sql);

	$prepare->bindParam(1, $_POST['nome']);
	$prepare->bindParam(2, $_POST['phone']);
	$prepare->bindParam(3, $_POST['pass']);
	
	$prepare->execute();

	echo $prepare->rowCount();
?>
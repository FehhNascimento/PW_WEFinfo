<?php  
	$pdo = require 'conexao.php';
	$sql = 'select * from paobanco';

	foreach ($pdo->query($sql) as $key => $valor) {
		if (($_POST['nome']==$valor['Nome']) && ($_POST['senha']==$valor['Senha'])) {
			echo "Login realizado";
			header('location:teste.php');
		}else{
			echo "Faça o cadastro";
		}
	}
?>
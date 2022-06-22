<?php 
	$pdo = require 'conexao.php';

	$sql = 'insert into paobanco(Nome, Email, Telefone, Senha) value(?, ?, ?, ?)';

	$prepare = $pdo->prepare($sql);

	$prepare->bindParam(1, $_POST['nome']);
	$prepare->bindParam(2, $_POST['email']);
	$prepare->bindParam(3, $_POST['phone']);
	$prepare->bindParam(4, $_POST['pass']);
	
	$prepare->execute();

	echo $prepare->rowCount();
?>
	<script>
		alert("Cadastro Realizado!");
		window.location = '../index.php';
	</script>
<?php
	header("location:../index.php");
?>
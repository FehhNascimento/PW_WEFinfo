<?php  
	$pdo = require 'conexao.php';
	$sql = 'select * from paobanco';
	$n = 0;

	foreach ($pdo->query($sql) as $key => $valor) {
		if (($_POST['email']==$valor['Email']) && ($_POST['senha']==$valor['Senha']) && ($valor['ADM'] == 1)){
			echo "
			<script>
				alert('ADM Logado');
				window.location = '../index.php';
			</script>
		";
		} elseif (($_POST['email']==$valor['Email']) && ($_POST['senha']==$valor['Senha'])) {
			echo "
				<script>
					alert('Login Realizado');
					window.location = '../index.php';
				</script>
			";
		}else{
			echo "Faça Cadastro";
		}
	}
?>
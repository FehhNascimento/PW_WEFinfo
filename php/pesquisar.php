<?php  
	$pdo = require 'conexao.php';
	$sql = 'select * from paobanco';

	foreach ($pdo->query($sql) as $key => $valor) {
		if (($_POST['email']==$valor['Email']) && ($_POST['senha']==$valor['Senha']) && ($valor['ADM'] == 1)){
?>
			<script>
				alert("Adm Logado");
				window.location='../index.php';
			</script>
<?php
		}elseif (($_POST['email']==$valor['Email']) && ($_POST['senha']==$valor['Senha'])) {
?>
			<script>
				alert("Login Realizado");
				window.location='../index.php';
			</script>
<?php		
		}else{
?>
			<script>
				alert("Credenciais Incorretas!\nFaça o Cadastro ou Tente de novo");
				window,location='../pages/login.php';
			</script>
<?php
		}
	}
?>
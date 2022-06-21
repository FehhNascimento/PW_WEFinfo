<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/csss.css">
	<link rel="icon" type="image/x-icon" href="../icones/ico.ico">
</head>
<body>
	<header class="cont">
        <!-- <img src="Logo.png" alt="Logo Panificadora Ramalho"> -->
        <a href="../index.php" id="cadastrar"><img id="im" src="../fotos/Logo.png" alt="Logo Panificadora Ramalho"></a>
		
    </header>
    <hr>
	<article class="cont">
		<fieldset>
			<legend>Cadastro</legend>
			<form id="foda" method="post" action="../php/inserir.php">
				<input type="text" name="nome" placeholder="Nome">
				<br>
				<input type="tel" name="phone" placeholder="Telefone">
				<br>
				<input type="email" name="email" placeholder="Email">
				<br>
				<input type="password" name="pass" placeholder="Crie Uma Senha" id="senha1">
				<br>
				<input type="password" name="passs" placeholder="Repita Sua Senha" id="senha2">
				<br>
				<input type="submit" name="sub" value="Prossiguir" id="but" onclick="ts()">
				<div id="fun"> 
                  <a href="login.php" id="cadastrar">Login</a>
                </div>
			</form>
		</fieldset>
	</article>
</body>
</html>
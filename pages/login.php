<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Panificadora Ramalho</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="ico.ico">
  </head>

  <body>
    <section>
      <header class="cont">
        <!-- <img src="Logo.png" alt="Logo Panificadora Ramalho"> -->
        <a href="../index.php" id="cadastrar"><img id="im" src="../Logo.png" alt="Logo Panificadora Ramalho"></a>
      </header>
      <hr>
     
      <div id="fundo">
        <aside>
          
        </aside>
        <article class="cont">
          <div id="login">
            <fieldset class="cont">
              <form method="post" name="login" action="../php/pesquisar.php">
                <input type="text" name="nome" placeholder="Nome" id="nome">
                <br>
                <input type="password" name="senha" placeholder="Senha" id="senha">
                <br>

                <input type="submit" value="Entrar" id="entrar" name="entrar"> 
                <br>
                <div id="fun"> 
                  <a href="cadastro.php" id="cadastrar">Cadastrar</a>
                </div>
              </form>
            </fieldset>
          </div>
        </article>
        <teste class="cont" id="feijao">
          <fieldset class="cont" id="arroz">
            <h1 id="brabo" class="cont">Login</h1> 
          </fieldset>
        </teste>
        
        <nav>
          
        </nav>
      </div>
      
    </section>
  </body>

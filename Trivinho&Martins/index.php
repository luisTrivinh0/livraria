<?php
session_start();
?>
<html>
  <head>
    <title>Livraria Trivinho</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=time()?>" media="screen" />
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <center><img src="img/logosite.png" width="1000" height="100"></center><br>
    <?php unset($_SESSION['nao_autenticado']);?>
    <div class="boxlogin">
      <form action="login.php" method="POST"><br>
        <input name="usuario" type="text" placeholder="Seu usuário" autofocus="">
        <br><br>
        <input name="senha" type="password" placeholder="Sua senha">
        <br><br>
        <input type="submit" value="Entrar" class="botao_login"> 
      </form>
    </div>
  </body>
</html>
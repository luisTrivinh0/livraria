<?php
include 'conexao.php';
$result = mysqli_query($conn, "SELECT livro FROM pesquisa order by livro asc");
$livros = "";
while ($linha = mysqli_fetch_object($result)){
    $livros .= "<option value='$linha->livro'>$linha->livro</option>";
}
?>
<html>
  <head>
    <title>Entrada</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=time()?>" media="screen" />
    <link rel="shortcut icon" href="img/favicon.png">
    <script type="text/javascript">
      function redirecionar(){
        alert("Entrada efetuada com sucesso!");
        window.location="entrada.php";
      }
      </script>
  </head>
  <body>
    <center><a href="pesquisa_index.php"><img src="img/logosite.png" width="1000" height="100"></a></center><br>
    <div id="menu">
      <ul>
        <li style="float:left;"><a href="pesquisa_index.php">Pesquisa</a></li>
        <li><a href="unidade_nova.php">Produto Novo</a></li>
        <li><a href="entrada.php" class="active">Entrada</a></li>
        <li><a href="saida.php">Saída</a></li>
        <li><a href="novo_preco.php">Alterar Valor</a></li>
        <?php include('painel.php');?>
      </ul>
    </div>
    <div class="box">
      <form name="frmEntrada" method="post" action="entrada2.php"><br>
        Livro: <br>
        <select name="livros">
            <option value="livros" required><?=$livros?></option>
        </select><br><br>
        UN.:
        <input type="number" name="unidades" id="unidades" min="0" required><br><br>
        <input type="submit" value="Enviar" class="botao_enviar" onclick="redirecionar()"> 
      </form>
    </div>
  </body>
<html>
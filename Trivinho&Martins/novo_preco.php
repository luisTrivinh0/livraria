<?php
$conn = new mysqli('192.168.19.5','luis','280419','teste') or die("Não foi possível a conexão com o Banco");
$result = mysqli_query($conn, "SELECT * FROM pesquisa order by livro asc");
$livros = "";
while ($linha = mysqli_fetch_object($result)){
    $livros .= "<option value='$linha->livro'>$linha->livro</option>";
}
?>
<html>
  <head>
    <title>Preço Novo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=time()?>" media="screen" />
    <link rel="shortcut icon" href="favicon.png">
    <script type="text/javascript">
      function redirecionar(){
        alert("Preço alterado com sucesso!");
        window.location="novo_preco.php";
      }
      </script>
  </head>
  <body>
    <center><a href="pesquisa_index.php"><img src="img/logosite.png" width="1000" height="100"></a></center><br>
    <div id="menu">
      <ul>
        <li style="float:left;"><a href="pesquisa_index.php">Pesquisa</a></li>
        <li><a href="unidade_nova.php">Produto Novo</a></li>
        <li><a href="entrada.php">Entrada</a></li>
        <li><a href="saida.php">Saída</a></li>
        <li><a href="novo_preco.php" class="active">Alterar Valor</a></li>
        <?php include('painel.php');?>
      </ul>
    </div>
    <div class="box">
      <form name="frmSaida" method="post" action="novo_preco2.php"><br>
        Livro:<br> 
        <select name="livros">
            <option value="livros" required><?=$livros?></option>
        </select><br><br>
        Preço novo:<br>
        <input type="text" name="preco" id="preco" min="0" required><br><br>
        <input type="submit" value="Enviar" class="botao_enviar" onclick="redirecionar()"> 
      </form>
      R$15,00 = 15.00 (Sem R$ e com ponto)<br><br>
    </div>
  </body>
<html>
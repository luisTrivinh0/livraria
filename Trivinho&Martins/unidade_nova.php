<html>
  <head>
    <title>Entrada</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=time()?>" media="screen" />
    <link rel="shortcut icon" href="img/favicon.png">
    <script type="text/javascript">
      function redirecionar(){
        alert("Produto inserido com sucesso!");
        window.location="unidade_nova.php";
      }
      </script>
  </head>
  <body>
    <center><a href="pesquisa_index.php"><img src="img/logosite.png" width="1000" height="100"></a></center><br>
    <div id="menu">
      <ul>
        <li style="float:left;"><a href="pesquisa_index.php">Pesquisa</a></li>
        <li><a href="unidade_nova.php" class="active">Produto Novo</a></li>
        <li><a href="entrada.php">Entrada</a></li>
        <li><a href="saida.php">Saída</a></li>
        <li><a href="novo_preco.php">Alterar Valor</a></li>
        <?php include('painel.php');?>
      </ul>
    </div>
    <div class="boxun">
      <center><h3>Unidade Nova</h3></center>
      <form name="frmEntrada" method="post" action="novo.php" class="uninova">
        Livro:<br><input type="text" name="livro" placeholder="Nome do Livro" required><br><br>
        Autor:<br><input type="text" name="autor" placeholder="Nome do Autor" required><br><br>
        Valor:<br><input type="number" name="valor" placeholder="Preço de venda" min="0" required><br><br>
        UN.:  <br><input type="number" name="estoque" placeholder="Unidades" min="0" required ><br><br>
        <input type="submit" value="Entrada" class="botao_novo" onclick="redirecionar()">
      </form>
      <p>Obs.: O valor deve ser colocado como no exemplo abaixo:<br>
      <center>R$ 15,00 = 15.00 (Sem cifrão e com ponto)</center></p>
    </div>
  </body>
</html>
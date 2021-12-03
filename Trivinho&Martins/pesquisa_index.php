
<html>
  <head>
    <title>Pesquisar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?<?=time()?>" media="screen" />
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <center><a href="pesquisa_index.php"><img src="img/logosite.png" width="1000" height="100"></a></center><br>
    <div id="menu">
      <ul>
        <li style="float:left;"><a href="pesquisa_index.php" class="active">Pesquisa</a></li>
        <li><a href="unidade_nova.php">Produto Novo</a></li>
        <li><a href="entrada.php">Entrada</a></li>
        <li><a href="saida.php">Saída</a></li>
        <li><a href="novo_preco.php">Alterar Valor</a></li>
        <?php include('painel.php');?>
      </ul>
    </div>
    <div class="boxPesquisa">
      <center><h3>Pesquisar Livros</h3></center>
      <form name="frmBusca" method="post" action="pesquisa_index.php" class="Pesquisa">
        Ordenar por:
        <select name="order" class="ord">
          <option value="livro" selected>Nome</option>
          <option value="valor">Preço</option>
          <option value="autor">Autor</option>
          <option value="estoque">UN.</option>
        </select>
        <select name="ord" class="asc">
          <option value="ASC" selected>ASC</option>
          <option value="DESC">DESC</option>
        </select>
        Livro: <input type="text" name="livro" placeholder="Nome do Livro">
        Autor: <input type="text" name="autor" placeholder="Nome do Autor">
        <input type="submit" value="Buscar" class="botao_entrada" onclick='pesquisara();'>
      </form>
    </div>
    <div class="tabela">
      <?php
       include 'conexao.php';
       $_POST = (object)$_POST;
       if (!isset($_POST->livro))
       $_POST->livro = '';
       if (!isset($_POST->autor))
       $_POST->autor = '';

       if ($_POST->livro == true) {
       $livro = trim($_POST->livro);
       $ordenar = $_POST->order;
       $ord = $_POST->ord;
       $sql = mysqli_query($conn, "SELECT * FROM pesquisa WHERE livro LIKE '%".$livro."%' ORDER BY $ordenar $ord ;");
       $numRegistros = mysqli_num_rows($sql);

       if ($numRegistros != 0) {
           echo '<br><br><br><br><br><br><br><br><br><br><br><table class="customTable">
                   <th colspan="4">Resultado</th>
                   <tr>
                     <td align="center"><b>Livro</b></td>
                     <td align="center"><b>Autor</b></td>
                     <td align="center"><b>Valor</b></td>
                     <td align="center"><b>UN.</b></td>
                   </tr>';
           while ($resultadop = mysqli_fetch_object($sql)) {
               echo "<tr><td>" . $resultadop->livro."</td><td>" . $resultadop->autor."</td><td align='center'>" . "R$ ".$resultadop->valor."</td><td align='center'>".$resultadop->estoque."</td></tr>";
           }
           echo '</table>';
           if($numRegistros = 0){
               echo "Sem resultador para: " . $livro . " no estoque.";
           }
         }
       }
       elseif ($_POST->autor == true) {
          $autor = trim($_POST->autor);
          $ordenar = $_POST->order;
          $ord = $_POST->ord;
          $sql = mysqli_query($conn, "SELECT * FROM pesquisa WHERE autor LIKE '%".$autor."%' ORDER BY $ordenar $ord ;");
          $numRegistros = mysqli_num_rows($sql);
          
       if ($numRegistros != 0) {
             echo '<br><br><br><br><br><br><br><br><br><br><br><br><table class="customTable">
                     <tr>
                       <th align="center" colspan="4">Resultado</th>
                     </tr>
                     <tr>
                       <td align="center">Livro</td>
                       <td align="center">Autor</td>
                       <td align="center">Valor</td>
                       <td align="center">UN.</td>
                     </tr>';
        while ($resultadop = mysqli_fetch_object($sql)) {
          echo "<tr><td>" . $resultadop->livro."</td><td>" . $resultadop->autor."</td><td align='center'>" . "R$ ".$resultadop->valor."</td><td align='center'>".$resultadop->estoque."</td></tr>";
         }
         echo '</table>';
         if($numRegistros = 0){
             echo "Sem resultador para: " . $autor . " no estoque.";
         }
        }   
       }
      ?>
    </div>
  </body>
</html>
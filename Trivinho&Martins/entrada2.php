<?php
    include 'conexao.php';
    $livro = trim($_POST['livros']);
    $entrada = trim($_POST['unidades']);
    $result = mysqli_query($conn, "SELECT livro, estoque from `pesquisa` where `livro` = '$livro'");
    $estoque = "";
    while ($linha = mysqli_fetch_object($result)){
      $estoque = $linha->estoque;
      $conta = $estoque + $entrada; 
      $sql = "UPDATE `pesquisa` SET `estoque` = '$conta' WHERE `pesquisa`.`livro` = '$livro';";
      mysqli_query($conn, $sql);
      mysqli_close($conn);
      header('Location: entrada.php');
    }
?>
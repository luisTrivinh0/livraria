<?php
    $conn = new mysqli('192.168.19.5','luis','280419','teste') or die("Não foi possível a conexão com o Banco");

    $livro = trim($_POST['livros']);
    $preco = trim($_POST['preco']);
    $result = mysqli_query($conn, "SELECT * from `pesquisa` where `livro` = '$livro'");
    while ($linha = mysqli_fetch_object($result)){
      $sql = "UPDATE `pesquisa` SET `valor` = '$preco' WHERE `pesquisa`.`livro` = '$livro';";
      mysqli_query($conn, $sql);
      mysqli_close($conn);
      header('Location: novo_preco.php');
    }
?>
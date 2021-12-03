<?php
$conn = new mysqli('192.168.19.5','luis','280419','teste') or die("Não foi possível a conexão com o Banco");
$livro = trim($_POST['livros']);
$saida = trim($_POST['unidades']);
$result = mysqli_query($conn, "SELECT * from `pesquisa` where `livro` = '$livro'");
$estoque = "";
while ($linha = mysqli_fetch_object($result)){
  $estoque = $linha->estoque;
  $conta = $estoque - $saida; 
  $sql = "UPDATE `pesquisa` SET `estoque` = '$conta' WHERE `pesquisa`.`livro` = '$livro';";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  header('Location: saida.php');
} 
?>
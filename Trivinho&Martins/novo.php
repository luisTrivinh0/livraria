<?php
    include 'conexao.php';
    $livro = trim($_POST['livro']);
    $autor = trim($_POST['autor']);
    $valor = trim($_POST['valor']);
    $estoque = trim($_POST['estoque']);
    $sql = "INSERT INTO `pesquisa`( `livro`, `autor`, `valor`, `estoque`) 
            VALUES ('$livro','$autor','$valor','$estoque') ;";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: entrada.html')
?>
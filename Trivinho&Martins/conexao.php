<?php
  define('HOST', '192.168.19.5');
  define('USUARIO', 'luis');
  define('SENHA', '280419');
  define('DB', 'teste');
  
  $conn = new mysqli(HOST,USUARIO,SENHA,DB) or die("Não foi possível a conexão com o Banco");
?>
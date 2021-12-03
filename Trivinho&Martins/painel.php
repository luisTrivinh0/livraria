<?php
include('verifica_login.php');
?>
<li style="float:right;"><a href="logout.php">Sair</a></li>
<li style="float:right;color:black;"><a class="usuario">Olá, <?php echo $_SESSION['usuario'];?></a></li>

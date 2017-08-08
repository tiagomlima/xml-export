<?php
	session_start();
	if (!isset($_SESSION['usuarioNome'])) header("Location: index.php");
	else {
		
	
	echo "Usuario: ". $_SESSION['usuarioNome'];	
	
	
	
?>
<br>
<a href="sair.php">Sair</a>

<?php
	}
exit;
?>
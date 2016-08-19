<?php
 	session_start();
?>
<?php
 if (isset($_SESSION['usuario'])){
	session_destroy();
	echo "se ha destruido sesion exitosamente <br/>";
	echo "<a href='index.php'>Volver</a>";
}else{
	echo "Error....<br/>";
	echo "<a href='index.php'>Volver</a>";
}


?>


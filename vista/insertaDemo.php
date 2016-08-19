	<?php

	include_once("../modelo/colectordemo.php");
	$DemoObj = new DemoCollector();
	
	if (!empty($_POST)) {
		if (empty($_POST['nombre'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";			
			
		}
	
		//subida de imagen
		$target_dir = "../fotos/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		//validar si el archivo es imagen 
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
			} else {
				echo "El archivo no es una imagen.";
				echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";				
			}
		}

		// Chequear si el archivo ya existe
		if (file_exists($target_file)) {
			echo "El archivo ya existe.";
			echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";
		}

		// Chequear el tamanio 50kb
		if ($_FILES["fileToUpload"]["size"] > 50000) {
			echo "El archivo es demasiado grande.";
			echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";
		}

		// validar formatos de archivos
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Solo se permiten archivos JPG, JPEG, PNG & GIF.";
			echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";
		}
		
		// subir el archivo
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			//insertamos

			$nom = $_POST['nombre'];
			$ima = basename( $_FILES["fileToUpload"]["name"]);
		
			$DemoObj->insertar($nom,$ima);
			
			echo "Demo se ha agregado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;demoindex.php'>";
			
			
		} else {

			echo "Lo sentimos, hubo un error al subir el archivo.";
			echo "<meta http-equiv='Refresh' content='2;creardemo.php'>";

		}
		
		
}
?>
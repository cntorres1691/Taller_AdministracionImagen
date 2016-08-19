
<?php

ini_set('display_errors', 1);
require("../modelo/colectordemo.php"); 
if(isset($_POST["nombre"])){
  $vCollector = new DemoCollector();


  $demo = new demo();
  $demo->setId(123);
  $demo->setNombre($_POST["nombre"]);
  
  
  $vCollector->addDemo($demo);
}else{
?>
  <html>

  <head>
  </head>

  <body>
    <!--<form action="creardemo.php" method="post">
      <div>
        <label for="name">Nombre: </label>
        <input type="text" name="nombre" value=""><br>
      </div>

		<br>
		
	  <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
			
		</form>

		<br>
      <div class="button">
        <input type="submit" onClick="document.location.href='demoindex.php'">Guardar</input>
      </div>
    </form>-->
	
	<form action="insertaDemo.php" method="post" enctype="multipart/form-data"> 
		 
		 Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="nombre" value="" /> <br /> <br /> 
		 Seleccione imagen:&nbsp; &nbsp; &nbsp; &nbsp;<input type="file" name="fileToUpload" id="fileToUpload" /> <br /><br />
		 <input type="submit" value="Guardar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
	 </form>
	
  </body>

  </html>
<?php
     }

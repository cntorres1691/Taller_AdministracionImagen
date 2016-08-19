<?php
ini_set('display_errors', 1);
//require 'colectordemo.php';
require("../modelo/colectordemo.php"); 

    $colector= new DemoCollector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table border="1" cellpadding="2" cellspacing="4" class="datos">
          <?php
          
            foreach ($colector->readAllDemo() as $datos) {
                ?>
                    
                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
					   <td><img border="0" width='120' height='80' src="<?php echo '../fotos/'.$datos->getFoto() ?>" /></td>
                       <td><a href="editardemo.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminardemo.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
          
          <tr>
            <td colspan=4><a href="creardemo.php">Crear Demo</a></td>
          </tr>
          
</table>
       
</body>


</html>

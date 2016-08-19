<?php
ini_set('display_errors', 1);
require("../modelo/colectordemo.php"); 

    $coll = new DemoCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->getNombre($_GET["id"]);

    ?>
    <form action="editardemo.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Usuario de Demo</label>
            <input type="text" name="nombre" value="<?php echo $obj->getNombre();?>"><br>
      </div>
        <div class="button">
            <button type="submit">Actualizar</button>
        </div>
    </form>
   
   <?php 
}else if(isset($_POST["id"]) && isset($_POST["nombre"])){
    
    $obj = new Demo();
    $obj->setId($_POST["id"]);
    $obj->setNombre($_POST["nombre"]);

  
    
    if($coll->updateDemo($obj)){
        echo "Demo actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el Demo.";
    }
    
}else{
    echo "derp.";
}

<?php
ini_set('display_errors', 1);
require("../modelo/colectordemo.php"); 

    $coll = new DemoCollector();

if(isset($_GET["id"])){
    
    $obj = $coll->deleteDemo($_GET["id"]);
}else{
  echo "Valor no enconteado.";
}

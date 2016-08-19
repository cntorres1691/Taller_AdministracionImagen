<?php

  require 'collector.php';
  require 'demo.php';
  class DemoCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addDemo($demo)
   {
     return self::execQuery("INSERT INTO Demo(nombre) VALUES('".$demo->getNombre()."')");   
   }

   public function insertar($nombre, $imagen) {    
		//$insertrow = self::$db->insertRow("INSERT INTO Demo (nombre, foto) VALUES (?, ?)", array("{$nombre}", "{$imagen}"));
		try
    {
      self::execQuery("INSERT INTO Demo (nombre, foto) VALUES ( '".$nombre."','".$imagen."') ");

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
	} 
	
   public function getNombre($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM Demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Demo");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('demo','demo'); 


  }

   public function updateDemo($demo)
   {
    try
    {
      self::execQuery("UPDATE Demo SET id='".$demo->getId()."',nombre='".$demo->getNombre()."' WHERE id=".$demo->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteDemo($demo)
   {
    try
    {
      self::execQuery("DELETE FROM Demo WHERE id=".$demo);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   } 
}
?>

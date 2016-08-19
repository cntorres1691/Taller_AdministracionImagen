<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Administracion</title>
 </head>
 
 <body bgcolor="#EFC9FA" text="#000000" topmargin="50"><center>
	
	<section id="main">
<div align='right'>
<?php 
$_SESSION['usuario'] = $_POST['Usuario'];
   
   echo "<p> Hola Usuario:(" .$_SESSION['usuario'].")[<a href='logout.php'>Salir</a>]</p>";
   


//print_r($_REQUEST);
?>
</div>
<br>
<h1>Administracion</h1><br>
 <table border="1" cellpadding="2" cellspacing="15"> 
        <tr> 
            <td> 
                <input type="button" value="Demo" onClick="document.location.href='demoindex.php'"/>
            </td>                                     
            <td> 
            <input type="button" value="Usuario" />
            </td> 
        </tr> 
        <tr> 
            <td> 
                <input type="button" value="Ciudad" />
            </td>                                     
            <td> 
				<input type="button" value="Pais" />
            </td> 
        </tr> 
    </table> 
    
    
    
 </body>
</html>

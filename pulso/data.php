<?php
define("DB_HOST", "mysql.hostinger.es");
define("DB_USER", "u681848152_user");//cambiar por el nombre de usuario definido en la configuracion de la BD.
define("DB_PASSWORD", "beatlm");//Modificar por el password elegido
define("DB_DATABASE", "u681848152_db");//Nombre de la base de datos reemplazar si se utilizo otro diferente al mencionado en el tutorial.
 


$fecha =$_POST['fecha'];
$tipo =$_POST['tipo'];
$duracion =$_POST['duracion'];
$fmax =$_POST['fmax'];
$fmed =$_POST['fmed'];
$calorias =$_POST['calorias'];
$caloriasa =$_POST['caloriasa'];
$caloriasm =$_POST['caloriasm'];
$grasa =$_POST['grasa'];
 
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
       mysql_select_db(DB_DATABASE);
       
        
 $result = mysql_query("INSERT INTO datos(fecha,tipo,duracion,fmax,fmed,calorias,caloriasa,caloriasm,grasa) VALUES('$fecha','$tipo','$duracion','$fmax','$fmed','$calorias','$caloriasa','$caloriasm','$grasa')");

	 
        
     echo json_encode($result);  
?>
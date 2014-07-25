<?php
define("DB_HOST", "mysql.hostinger.es");
define("DB_USER", "u681848152_user");//cambiar por el nombre de usuario definido en la configuracion de la BD.
define("DB_PASSWORD", "beatlm");//Modificar por el password elegido
define("DB_DATABASE", "u681848152_db");//Nombre de la base de datos reemplazar si se utilizo otro diferente al mencionado en el tutorial.
 



$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
       mysql_select_db(DB_DATABASE);
       
        
 $result = mysql_query("SELECT fecha, fmax, fmed FROM datos WHERE tipo='R' ORDER BY fecha ASC ");

	        



$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
?>
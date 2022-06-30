
<?php
/** 
 * 
 * Conexión al servidor
 * 
*/


    $server= 'localhost';/* aca se puede modificar el nombre de servidor para facilitar acceso*/
    $basededatos= 'stampymail';/* aca se puede modificar el nombre de la base de datos para facilitar acceso*/
    $user= 'gerardo'; /* aca se puede modificar el nombre de usuario para facilitar acceso*/
    $contraseña= '1234'; /* aca se puede modificar el nombre de contraseña para facilitar acceso*/
    

try {
        $link = new PDO("mysql:host=$server;dbname=$basededatos",$user,$contraseña);
        
	}catch (PDOException $e){
        die('connected filed:' .$e->getMessage());
    }

    

?>
<?php
/*$server='localhost';
$nombreusuario='root';
$password='';
$basedatos='phpexampledb';

try{
    $conn= new PDO("mysql:host=$server;dbname=$basedatos;",$nombreusuario);
} 
    
catch(PDOException $e){
    die('Connection failed:'.$e->getMessage());
}
*/
$server="localhost";
$user="root";
$pass="";
$db="rrhh";

$mysqli=new mysqli($server,  $user, $pass, $db);
/*if($mysqli->connect_error){
    die("Error de Conexion (" . $mysqli->connect_errno . ")");
}*/

?>


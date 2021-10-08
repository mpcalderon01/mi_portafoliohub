<?php
include ("../modelo/conexion.php");

session_start();


$pass=$_REQUEST['pass'];
$login=$_REQUEST['login'];

$sql="SELECT COUNT(*)  as contar from clientes where='login' and contraseña'pass'";
$consulta=mysqli_query($conn,$sql);
$lista=mysqli_fetch_array($consulta);

if ($lista['contar']>0) {
    die('El usuario existe');
} else {
    die('contraseña o usuario inconrrecta');
}


?>
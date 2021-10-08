<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor'.mysqli_connect_error());
$id_cliente     =$_POST['id'];
$Doc_cliente    =$_POST['Doc'];
$nombre					=$_POST['nombre'];
$apellido 	    =$_POST['apellido'];
$correo					=$_POST['correo'];
$telefono 	    =$_POST['telefono'];
$usuario				=$_POST['usuario'];
$Contrasena 		=$_POST['contrasena'];

$sql = "INSERT INTO clientes VALUES('$id_cliente','$Doc_cliente','$nombre','$apellido','$correo','$telefono','$usuario','$Contrasena')";

if ($conexion->query($sql)===TRUE){
	echo "Registro insertado correctamente";
}else{
	echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
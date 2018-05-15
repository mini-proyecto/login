<?php

$conexion=mysqli_connect("localhost", "root", "" ,"prueba");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$username = $_POST["username"];
$clave = $_POST["clave"];

$registrar = "INSERT INTO login (nombre, apellidos, username, clave) VALUES ('$nombre', '$apellidos', '$username', '$clave')";

$resultado = mysqli_query($conexion, $registrar);

if (!$resultado) {
    echo "Error al registrar usuario";
} else {
    $consulta="select * from login where username='$username' and clave='$clave'";

$resultados=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultados);

if($filas>0) {
    echo "hola men";
}
else{
    echo "no exite tal cosa :v";
}
}

mysqli_close($conexion);
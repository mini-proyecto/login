<?php
$username=$_POST['username'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "" ,"prueba");

$consulta="select * from login where username='$username' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0) {
    echo "hola $username";
}
else{
    echo "no exite tal cosa :v";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
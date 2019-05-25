<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 17/05/2019
 * Time: 0:58
 */

include 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$direccion=$_POST['direccion'];

$idnuevo="SELECT (max(id_cliente))+1 FROM cliente";
$resultado=mysqli_query($conexion,$idnuevo);
$row_resultado = mysqli_fetch_assoc($resultado);

$row_resultado=implode($row_resultado);
//echo $row_resultado['(max(id_cliente))+1'];

$insertar="INSERT INTO cliente(id_cliente,nombre, apellido, correo, pass, direccion) VALUES ('$row_resultado','$nombre', '$apellido', '$correo', '$pass', '$direccion')";
$resultadoInsertar=mysqli_query($conexion,$insertar);

if(!$resultadoInsertar){
    echo'Error al registrarse';
}else{
//    echo 'Usuario registrado exitosamente';
    header("Status: 301 Moved Permanently");
    header("Location: Login.html");
}
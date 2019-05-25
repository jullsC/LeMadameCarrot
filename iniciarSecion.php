<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 16/05/2019
 * Time: 23:29
 */

include'conexion.php';

$correo=$_POST['correo'];
$pass=$_POST['pass'];


//consultar cliente

$clientes="SELECT * FROM cliente WHERE correo='$correo' AND pass='$pass'";

$resultadoCliente=mysqli_query($conexion,$clientes);

if($resultadoCliente->num_rows<1){
//    echo 'error';
    header("Status: 301 Moved Permanently");
    header("Location: LoginError.html");

}else{
//   echo 'si entro';
    $clienteLogueado=mysqli_fetch_array($resultadoCliente);
    $id=$clienteLogueado["id_cliente"];
    $nombre=$clienteLogueado["nombre"];
    $apellido=$clienteLogueado["apellido"];
    $direccion=$clienteLogueado["direccion"];


    header("Status: 301 Moved Permanently");
    header("Location: indexLog.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo                                                               ");
//    header("Status: 301 Moved Permanently");
//    header("Location: datosUsuario.php");



//   header("Status: 301 Moved Permanently");
//   header("Location: indexLog.php");


}
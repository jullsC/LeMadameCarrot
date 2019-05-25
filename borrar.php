<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 19/05/2019
 * Time: 17:45
 */

include 'conexion.php';


$id=$_GET["elid"];
$nombre=$_GET["elnombre"];
$apellido=$_GET["elapellido"];
$correo=$_GET["elcorreo"];
$direccion=$_GET["ladireccion"];

$query5="DELETE FROM carrito WHERE id_cliente='$id'";
$resultadoEliminar=mysqli_query($conexion,$query5);

if(!$resultadoEliminar){
    echo'Error';
}else {
    header("Status: 301 Moved Permanently");
    header("Location: Pedidos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
}

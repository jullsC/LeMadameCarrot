<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 20/05/2019
 * Time: 21:34
 */

include 'conexion.php';

$id=$_POST["id"];
$nombre=$_POST["elnombre"];
$apellido=$_POST["elapellido"];
$correo=$_POST["elcorreo"];
$direccion=$_POST["ladireccion"];
$cantidad=$_POST["cantidad"];
$idProducto=$_POST["idProducto"];
$precio=$_POST["precio"];
$opcion=$_POST["opcion"];

$precioTotal=$precio*$cantidad;

$query="SELECT * FROM carrito WHERE id_producto=$idProducto AND id_cliente=$id";
$resultadoCarrito=mysqli_query($conexion,$query);

if($resultadoCarrito->num_rows<1){

    $insertar="INSERT INTO carrito(id_cliente,id_producto,cantidad,total) VALUES ('$id','$idProducto', '$cantidad', '$precioTotal')";
    $resultadoInsertar=mysqli_query($conexion,$insertar);

    if(!$resultadoInsertar){
    }else{
//    echo 'Usuario registrado exitosamente';
        header("Status: 301 Moved Permanently");
        header("Location: Panblanco.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
    }

}else {

    $productoenCarrito=mysqli_fetch_array($resultadoCarrito);
    $oldCantidad=$productoenCarrito["cantidad"];
    $oldTotal=$productoenCarrito["total"];

    $newCantidad=$oldCantidad+$cantidad;
    $newTotal=$oldTotal+$precioTotal;

    $query1="UPDATE carrito SET total='$newTotal', cantidad='$newCantidad' WHERE id_cliente='$id' AND id_producto=$idProducto";
    $resultadoupdate=mysqli_query($conexion,$query1);
    if(!$resultadoupdate){
        echo'Error al registrarse';
    }else{
        if ($opcion==1){
            header("Status: 301 Moved Permanently");
            header("Location: Panblanco.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
        } else if ($opcion==2){
        header("Status: 301 Moved Permanently");
        header("Location: Pandulce.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
    } else if ($opcion==3){
            header("Status: 301 Moved Permanently");
            header("Location: Reposteria.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
        }
    }
}












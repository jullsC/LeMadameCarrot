<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 19/05/2019
 * Time: 16:16
 */
include 'conexion.php';


$id=$_GET["elid"];
$nombre=$_GET["elnombre"];
$apellido=$_GET["elapellido"];
$correo=$_GET["elcorreo"];
$direccion=$_GET["ladireccion"];

$total=0;


$query="SELECT total FROM carrito WHERE id_cliente='$id'";
$resultadoTotal=mysqli_query($conexion,$query);

if($resultadoTotal->num_rows<1){
//    echo "nada";
    header("Status: 301 Moved Permanently");
    header("Location: Pedidos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
}else{
    while ($row = mysqli_fetch_assoc($resultadoTotal)){

        $total=$total+((int)$row['total']);
    }
    echo $total;
    echo 'el total fue      ';
}

if($total!=0){

    $query2="SELECT (max(id_compra))+1 FROM compras";
    $resultadoMax=mysqli_query($conexion,$query2);

    $row_idcompra = mysqli_fetch_assoc($resultadoMax);
    $row_idcompra=implode($row_idcompra);

    echo $row_idcompra;


    $query3="SELECT (max(RIGHT (referencia, 4)))+1 FROM compras";
    $resultadoRef=mysqli_query($conexion,$query3);

    $row_ref = mysqli_fetch_assoc($resultadoRef);
    $row_ref=implode($row_ref);

    $query4= "INSERT INTO compras (id_compra,id_cliente,fecha,total,referencia) VALUES ('$row_idcompra','$id',CURDATE(),$total,CONCAT(CURDATE() + 0,$row_ref))";
    $resultadoInsertar=mysqli_query($conexion,$query4);

    if(!$resultadoInsertar){
    }else{

        $query5="DELETE FROM carrito WHERE id_cliente='$id'";
        $resultadoEliminar=mysqli_query($conexion,$query5);

        if(!$resultadoEliminar){
            echo'Error';
        }else {
            header("Status: 301 Moved Permanently");
            header("Location: Pedidos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
        }

    }

}

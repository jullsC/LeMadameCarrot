<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 19/05/2019
 * Time: 23:52
 */

include'conexion.php';

$newdireccion=$_POST['direccion'];
$newcorreo=$_POST['correo'];
$id=$_POST['id'];


//consultar cliente



    $query="UPDATE cliente SET correo='$newcorreo', direccion='$newdireccion' WHERE id_cliente='$id'";
    $resultadoupdate=mysqli_query($conexion,$query);
    if(!$resultadoupdate){
        echo'Error al registrarse';
    }else{

        $clientes="SELECT * FROM cliente WHERE id_cliente='$id'";

        $resultadoCliente=mysqli_query($conexion,$clientes);

        if($resultadoCliente->num_rows<1){
//    echo 'error';
//            header("Status: 301 Moved Permanently");
//            header("Location: LoginError.html");

        }else{
//   echo 'si entro';
            $clienteLogueado=mysqli_fetch_array($resultadoCliente);
            $id=$clienteLogueado["id_cliente"];
            $nombre=$clienteLogueado["nombre"];
            $correo=$clienteLogueado["correo"];
            $apellido=$clienteLogueado["apellido"];
            $direccion=$clienteLogueado["direccion"];




        header("Status: 301 Moved Permanently");
        header("Location: Cuenta.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
    }





    }
<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 20/05/2019
 * Time: 0:19
 */

include'conexion.php';

$newpass=$_POST['passnew'];
$oldpass=$_POST['passold'];
$id=$_POST['id'];



    $clientes1="SELECT * FROM cliente WHERE id_cliente='$id'";

    $resultadoCliente1=mysqli_query($conexion,$clientes1);

    if($resultadoCliente1->num_rows<1){

    }else {
//   echo 'si entro';
        $clienteLogueado1 = mysqli_fetch_array($resultadoCliente1);
        $pass = $clienteLogueado1["pass"];
        $id=$clienteLogueado1["id_cliente"];
        $nombre=$clienteLogueado1["nombre"];
        $correo=$clienteLogueado1["correo"];
        $apellido=$clienteLogueado1["apellido"];
        $direccion=$clienteLogueado1["direccion"];

        if($oldpass===$pass){



            $query="UPDATE cliente SET pass='$newpass' WHERE id_cliente='$id'";
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



        }else{
            header("Status: 301 Moved Permanently");
            header("Location: CuentaError.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
        }
    }

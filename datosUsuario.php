<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 17/05/2019
 * Time: 17:57
 */

$id=$_GET["elid"];
$nombre=$_GET["elnombre"];
$apellido=$_GET["elapellido"];
$correo=$_GET["elcorreo"];
$direccion=$_GET["ladireccion"];


echo $id;
echo $nombre;
echo $apellido;


//header("Location: prueba1.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo");
echo "<a href=\"prueba1.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\">aqui</a>";
//echo $direccion;

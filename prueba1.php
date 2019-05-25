<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 17/05/2019
 * Time: 19:06
 */

include'conexion.php';

//$id=$_GET["elid"];
//$nombre=$_GET["elnombre"];
//$apellido=$_GET["elapellido"];
//$correo=$_GET["elcorreo"];
//$direccion=$_GET["ladireccion"];


echo "simon";


$query="SELECT url_img FROM productos WHERE nombre='Rebanada de mantequilla'";

$url=mysqli_query($conexion,$query);

if($url->num_rows<1){
    echo 'error';


}else {
    echo 'bien';
    $url=mysqli_fetch_assoc($url);
    $url=implode($url);
    echo $url;
    echo "<img src='$url'>";
}


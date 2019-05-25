<?php
/**
 * Created by PhpStorm.
 * User: Jurie Cedillo
 * Date: 20/05/2019
 * Time: 11:01
 */
include 'conexion.php';
$id_producto=$_GET['id'];

$query="SELECT * FROM productos WHERE id_producto=$id_producto";
$resultadoProducto=mysqli_query($conexion,$query);

if($resultadoProducto->num_rows<1){
//    echo 'error';
}else {
    $productoSeleccion = mysqli_fetch_array($resultadoProducto);
    $categoria = $productoSeleccion['categoria'];
    $nombre = $productoSeleccion['nombre'];
    $precio = $productoSeleccion['precio'];
    $url_img = $productoSeleccion['url_img'];

echo "{\"id\":\"$id_producto\",\"categoria\":\"$categoria\",\"nombre\":\"$nombre\",\"precio\":\"$precio\",\"url\":\"$url_img\"}";

        }
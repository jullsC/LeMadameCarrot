<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pedidos | Le Madame Carrot. Panadería online</title>
    <link rel="icon" href="logo1.png">
    <link rel="stylesheet" href="proyecto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background: #FFFAF0">
<header id="poster">

    <div id="name">
        <img src="name3.png">
    </div>

    <div id="botones">
        <a href="https://www.facebook.com/Le.Madame.Carrot.Panaderias/" target="_blank"><img src="face.png"></a>
        <a href="https://twitter.com/LPanaderias" target="_blank"><img src="twitter.png"></a>
        <a href="https://instagram.com/lemadamecarrot?utm_source=ig_profile_share&igshid=yb1439j1plrh" target="_blank"><img src="inst.png"></a>
    </div>

    <div id="out">
        <a href="Login.html"><img src="log.png"></a>
    </div>

    <nav class="hola" id="hola">
        <ul>
            <li>Hola<?php
                include 'conexion.php';
                $id=$_GET["elid"];
                $nombre=$_GET["elnombre"];
                $apellido=$_GET["elapellido"];
                $correo=$_GET["elcorreo"];
                $direccion=$_GET["ladireccion"];

                echo " "; echo $nombre; echo " "; echo $apellido;echo"</li>";


                $query3="SELECT (COUNT(*)) FROM carrito WHERE id_cliente='$id'";
                $resultadoRef=mysqli_query($conexion,$query3);

                $row_ref = mysqli_fetch_assoc($resultadoRef);
                $row_ref=implode($row_ref);

                echo "Carrito (";echo $row_ref;echo ")";
                echo "<li><a href=\"Cuenta.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><u>Mi Cuenta</u></a></li>";
                ?>
            <li><a href="index.html"><b>Salir</b></a></li>
        </ul>
    </nav>

</header>

<aside>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img src="grid.png" alt=""></label>
    <nav class="menu">
        <div id="divmenu">
            <ul>
                <?php
                include 'conexion.php';
                echo "<li><a href=\"indexLog.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><b>INICIO</b></a></li>";
                echo "<li><a href=\"Productos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><b>PRODUCTOS</b></a></li>";
                echo "<li><a href=\"Articulos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><b>NOTICIAS</b></a></li>";
                echo "<li><a href=\"Pedidos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><b>PEDIDOS</b></a></li>";
                echo "<li><a href=\"Blog.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><b>CONOCENOS</b></a></li>";
                ?>
            </ul>
        </div>
    </nav>
</aside>


<div class="container">
    <div class="row" style="text-align: center; margin-top: 30px"><div class="col-md-12"><i>Una vez confirmado tu pedido, podras relizar tu pago con el número de referencia que aparecerá en el historial de facturas.</i></div></div>
    <div class="row">
        <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 30px; color:#F4A460;margin-top: 20px; padding-bottom: 10px"><i>Resumen de Pedido</i> </div>
    </div>
    <div class="row" id="pedidostabla">
        <div class="col-md-3 col-0"><b>PRODUCTO</b></div>
        <div class="col-md-3 col-3"><b>CATEGORIA</b></div>
        <div class="col-md-2 col-3"><b>CANTIDAD</b></div>
        <div class="col-md-2 col-3"><b>PRECIO UNITARIO</b></div>
        <div class="col-md-2 col-3"><b>PRECIO TOTAL</b></div>
    </div>
</div>
    <div class="container overflow-auto" style="height: 400px; border:1px solid #F4A460">
        <?php
        $query="SELECT * FROM carrito JOIN productos ON carrito.id_producto=productos.id_producto JOIN categoria ON productos.categoria=categoria.id_categoria WHERE id_cliente='$id'";
        $resultadoCarrito=mysqli_query($conexion,$query);

        if($resultadoCarrito->num_rows<1){
//            echo "nada";
        }else{
            while ($row = mysqli_fetch_array($resultadoCarrito)){
                echo "<div class=\"row\">";
                echo "<div class=\"col-md-3 col-0\" style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460; height: 30px;\">".$row['nombre']."</div>";
                echo "<div class=\"col-md-3 col-3\"style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460;height: 30px;\">".$row['nombre_categoria']."</div>";
                echo "<div class=\"col-md-2 col-3\"style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460; height: 30px;\">".$row['cantidad']."</div>";
                echo "<div class=\"col-md-2 col-3\"style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460;height: 30px;\">".$row['precio']."</div>";
                echo "<div class=\"col-md-2 col-3\"style=\"border-bottom: 1px solid #F4A460;height: 30px;\">".$row['total']."</div>";
                echo "</div>";
            }

        }

        ?>

    </div>
    <div class="row" style="margin-top: 20px" id="botonesPedidos">
        <?php
        echo "<div class=\"col-md-6 col-6\" style=\"text-align: right\"><a href=\"borrar.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><input type=\"submit\" value=\"Borrar Todo\" class=\"btn btn-outline-secondary\"></a></div>";
        echo "<div class=\"col-md-6 col-6\" style=\"text-align: left\"><a href=\"confirmar.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><input type=\"submit\" value=\"Confirmar Pedido\" class=\"btn btn-warning\" id=\"botonPedir\"></a></div>";
        ?>
    </div>

</div>

<div class="container" style="margin-top: 40px">
    <div class="row">
        <div class="col-md-1 col-md-offset-1"></div>
        <div class="col-md-3" id="pedidosImagen"></div>
        <div class="col-md-7" style="background: rgba(244,164,96,3); color: #FFFAF0; padding-top: 25px; font-family: 'Yu Gothic UI'; font-size: 30px; text-align: center; padding-right: 15px"><b>¡Ahora puedes realizar tu pago en OXXO!</b>
            <br><img src="oxxo.png" height="75px" width="150px"><br><p style="font-size: 20px">En pedidos mayores a 200 pesos, el envio hasta tu casa es gratis.</p>
        </div>
        <div class="col-md-1 col-md-offset-1"></div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 30px; color:#F4A460;margin-top: 50px; padding-bottom: 10px"><i>Historíal de facturas</i> </div>
    </div>
    <div class="row" id="facturatabla">
        <div class="col-md-4 col-4"><b>FECHA</b></div>
        <div class="col-md-3 col-3"><b>TOTAL</b></div>
        <div class="col-md-5 col-5"><b>REFERENCIA</b></div>
    </div>
</div>
    <div class="container overflow-auto" style="height: 400px; border:1px solid #F4A460;margin-bottom: 50px">
        <?php
        $query2="SELECT * FROM compras WHERE id_cliente='$id'";
        $resultadoCompras=mysqli_query($conexion,$query2);

        if($resultadoCompras->num_rows<1){
//            echo "nada";
        }else{
            while ($row1 = mysqli_fetch_array($resultadoCompras)){
                echo "<div class=\"row\">";
                echo "<div class=\"col-md-4 col-4\" style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460; height: 30px;\">".$row1['fecha']."</div>";
                echo "<div class=\"col-md-3 col-3\"style=\"border-bottom: 1px solid #F4A460;border-right: 1px solid #F4A460;height: 30px;\">".$row1['total']."</div>";
                echo "<div class=\"col-md-5 col-5\"style=\"border-bottom: 1px solid #F4A460;height: 30px;\">".$row1['referencia']."</div>";
                echo "</div>";
            }

        }

        ?>




</div>


<footer id="pie">

    <div id="footimg">
        <div id="footbtn">
            <a href="https://twitter.com/LPanaderias" target="_blank"><img src="1.png"></a>
            <a href="https://instagram.com/lemadamecarrot?utm_source=ig_profile_share&igshid=yb1439j1plrh" target="_blank"><img src="2.png"></a>
            <a href="https://www.facebook.com/Le.Madame.Carrot.Panaderias/" target="_blank"><img src="3.png"></a>
        </div>
    </div>


    <div class="container" style="padding-top: 20px; color: #FFFAF0;">
        <div class="row">
            <div class="col-md-4">
                <h4>CONTACTA CON NOSOTROS</h4>
                Av. Paseo de la Victoria 2611, Jardines del Bosque, 32539 Cd Juárez, Chih.
                <br>
                Teléfono: 01 656 438 0640
                <br>
                pedidos@lemadamecarrot.com


            </div>

            <div class="col-md-4">
                <h4>HORARIO</h4>
                Lunes a Viernes: 07:30 - 14:30 | 16:30 - 20:30
                <br>
                Sábado y Domingo: 07:30 - 14:30

            </div>

            <div class="col-md-4" style="text-align: center">
                <img src="fondoColita.jpg" height="130" width="350">
            </div>
        </div>
    </div>
    <article style="text-align: center; margin-top: 15px; font-size: small; padding-left: 0">
        Copyright © 2019 Panadería Le Madame Carrot. Todos los derechos reservados.
        <br>
        Diseño por Aparicio Arely & Cedillo Julieta
    </article>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
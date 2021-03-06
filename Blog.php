<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conocenos | Le Madame Carrot. Panadería online</title>
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

<article id="tabladeinformacion" class="container">
        <div>
            <div class="row" style="text-align: center">

                    <img src="sucursal.jpg" width="600" height="400" style="text-align: center; margin: auto">
            </div>
            <div class="row" style="padding: 80px; text-align: justify">
                <div class="col-md-12 col-12">
                    <h1 align="center" style="font-family: 'Times New Roman'"><font color="#F4A460" size="6"><i>¡BIENVENIDOS A LA NUEVA WEB PANADERÍA LE MADAME CARROT</i></font></h1>
                    <br>
                    <p align="center">
                    <h4 style="font-family: 'Yu Gothic UI Light'">La panadería Le Madame Carrot te presenta su nueva web. Te ofrecemos la mayor calidad en pan, bollería, pastelería y repostería con servicio a domicilio para todos nuestros clientes.
                    <br><br><br>
                    Estamos de enhorabuena y muy orgullosos de presentarte nuestra nueva web Panadería Le Madame Carrot, una web con la que queremos ofrecerte la mejor experiencia de compra online de productos de panadería, bollería y pastelería.
                    <br><br><br>
                    Le hemos dado un toque más atractivo, para ir preparando tu paladar antes de degustar nuestras delicias :)  pero además, hemos tratado de facilitarte el mejor servicio de panadería a domicilio.
                    <br><br><br>
                    Tanto cuando hayas iniciado sesion como cliente en nuestra pagina, la opción de comprar nuestros productos,
                    desde la comodidad de tu hogar y/o oficina, etc. Contamos con nuestro servicio a domicilio o si lo prefiere,
                    puede realizar su compra en nuestra panadería en Cd.Juarez, Chihuahua. Estamos en Av. Paseo de la Victoria 2611, Jardines del Bosque, 32539. Estaremos encantados de saludarte.
                    <br><br><br>
                    Te invitamos a visitar nuestra sección de productos, donde podrás conocer nuestro surtido de calidad en pan, bollería, tartas de manzana, tartas de chocolate... Todo está para chuparse los dedos, así que tómate tu tiempo para probar toda nuestra variedad de panadería y repostería.
                    </h4>
                    </p>
            </div></div>
            <div class="row" style="text-align: center; margin-bottom: 50px;">
                <img src="fondoColitas%20copia.jpg" style="margin: auto">
            </div>

        </div>
</article>



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
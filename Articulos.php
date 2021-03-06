<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noticias | Le Madame Carrot. Panadería online</title>
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
        <a href=""><img src="log.png"></a>
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

<aside id="noticias" class="container">

        <div class="row" style="margin-bottom: 30px">
            <div class="col-md-6 col-sd-12" style="margin-top: auto; margin-bottom: auto"> <img src="mom2.jpg" width="500" height="400" align="center"></div>
            <div class="col-md-6 col-sd-12">
                <h1 align="center" style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Dia de las madres.</i></font></h1>
                <h5 align="justify" style="font-family: 'Yu Gothic UI Light'; padding: 20px">
                    La celebración del día de la madres se remota a la antigua Grecia, cuando se le rendían honores a Rhea, la madre de los dioses Júpiter, Neptuno y Plutón. Los romanos llamaban a esta celebración La Hilaria, se llevaba a cabo el 15 de marzo en el templo de Cybele y durante tres días se hacían ofrecimientos.
                    Posteriormente los primeros cristianos celebraban el día de las madres en honor a la virgen María, madre de Jesús.
                    <br><br>
                    En Estados Unidos, la celebración tiene sus orígenes hacia 1872, cuando Julia Ward Howe, autora del Himno de batalla de la República, sugirió que esa fecha fuera dedicada a honrar la paz, y comenzó celebrando cada año encuentros en las ciudades de Boston y Massachusetts en celebración del Día de la Madre.
                    <br><br>
                    El día de las madres en México tiene origen desde hace más de 80 años, cuando un periodista llamado Rafael Alducin que trabajaba para el periódico " Excélsior" hizo una invitación un 13 de Abril de 1922 a toda le gente, para que propusieran un día de festejo a las madres. Es así como el 10 de mayo de 1922, por primera vez en México se celebra a la madres.
                </h5>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px">
            <div class="col-md-6 col-sd-12">
            <img src="cakesmom.jpg" width="500" height="400" align="center">
            </div>
            <div class="col-md-6 col-sd-12" style="margin-top: auto; margin-bottom: auto; text-align: center">
                <h1 align="center" style="font-family: 'Times New Roman'; padding-top: 20px" ><font color="#F4A460"><i>
                    Madre solo hay una,<br>no la ponga a cocinar.
                </i></font></h1>

                <h4 align="center" style="font-family: 'Yu Gothic UI Light'">Ordena alguno de nuestros pasteles especiales</h4>
                <h3 align="center" style="font-family: 'Times New Roman'"><a href=""><font color="#F4A460">Realizar pedido</font></a></h3>
                <br>
                <img src="flecha.png" width="100" height="100">
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px">
           <div class="col-md-5 col-sd-12" style="margin-top: auto; margin-bottom: auto">
               <h4 align="justify" style="font-family: 'Yu Gothic UI Light'; padding-left: 50px">
                   Nuestros principales productos autenticos y de alta calidad que Panadería "Le Madame Carrot" te trae para tí,
                   a través de ingredientes cuidadosamente seleccionados mantenemos el compromiso de deleitar a nuestros clientes.</h4>
           </div>
           <div class="col-md-7 col-sd-12"><img src="noticia11.png" align="center" width="600" height="500">
           </div>
        </div>
</aside>

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
    </article>

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
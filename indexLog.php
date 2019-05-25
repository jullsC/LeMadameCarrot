<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Le Madame Carrot. Panadería online</title>
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
    <img src="log.png">
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
     <div class="container-fluid">
    <div class="row">
        <section id="carrusel" class="col-md-9"></section>
        <aside id="barra" class="col-md-3">
        <img src="barra.png">
        </aside>
     </div></div>
     <section id="centro" class="container" style="padding-top: 80px; margin-bottom: 130px">

             <div class="row">
                 <div class="col-md-7" STYLE="text-align: center"><font size="6"><h1 style="font-family: 'Times New Roman'"><i><font color="#F4A460">Se aproxima el 10 de Mayo</font></i></h1></font>
                     <p align="center"><h2 style="font-family: 'Yu Gothic UI Light';">
                      En Panadería Le Madame Carrot encontrará
                      una gran variedad de tipos de pasteles, al mejor precio y con un sabor delicioso.
                       <br><br>
                         Para este proximo 10 de Mayo sorprende a mamá con uno de nuestros más finos pasteles
                         no importa el tamaño, sabor, forma. Nosotros lo hacemos posible.</h2></p> <br>
                     <?php
                     echo "<a href=\"Articulos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><h4 style=\"font-family: 'Times New Roman'\" align=\"center\"><font color=\"#F4A460\">Ver ahora </font></h4></a>";
                     ?>
                 </div>
                 <div class="col-md-1 col-md-offset-1"></div>
                 <div class="col-md-4" style="text-align: center"><img src="pastelconflores.jpg" width="380" height="400"></div>
             </div>
             <div class="row" style="padding-top: 50px">
                 <div  class="col-md-7" STYLE="text-align: center;  padding-top: 70px"><font size="6"><h1 style="font-family: 'Times New Roman'"><i><font color="#F4A460">Reposteria fina para eventos especiales</font></i></h1></font>
                     <p align="center"><h2 style="font-family: 'Yu Gothic UI Light'">
                         Otra de nuestras grandes ventajas es poder cumplir los deseos de nuestros clientes
                         elaborando cualquier tipo de reposteria desde un cupcake hasta un pastel de boda.
                         <br><br>
                         <?php
                        echo "<a href=\"Reposteria.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion& elcorreo= $correo\"><h4 style=\"font-family: 'Times New Roman'\" align=\"center\"><font color=\"#F4A460\">Consulta catálogo</font></h4></a>";
                         ?>
                     </h2></p>
                 </div>
                 <div class="col-md-1 col-md-offset-1"></div>
                 <div class="col-md-4" style="text-align: center"><img src="pasteldeboda.jpeg" width="380" height="450"></div>
             </div>
             <div class="row" style="padding-top: 50px">
                 <div class="col-md-7" STYLE="text-align: center;"><font size="6"><h1 style="font-family: 'Times New Roman'" ><i><font color="#F4A460">De nuestra mesa a tu cafe</font></i></h1></font>
                     <p align="center" ><h2 style="font-family: 'Yu Gothic UI Light'">
                         Disfruta de toda una experiencia en tu paladar con nuestros productos recién elaborados
                         sin la necesidad de moverte de tu casa.<br><br> De lunes a sábado, cada mañana repartimos a domicilio para que tu
                         día empiece con una gran sonrisa.<br><br> Nuestro horario de reparto a particulares comienza a
                         las 8:30. ¿Quieres saber cómo realizar un pedido para que te lo llevemos a casa?
                         <br><br>
                         <?php
                         echo "<a href=\"Pedidos.php?elid=$id&elnombre=$nombre&elapellido=$apellido&ladireccion=$direccion&elcorreo=$correo\"><h4 style=\"font-family: 'Times New Roman'\" align=\"center\"><font color=\"#F4A460\">Pan a domicilio</font ></h4></a>";
                         ?>
                     </h2></p>
                 </div>
                 <div class="col-md-1 col-md-offset-1"></div>
                 <div class="col-md-4" style="padding-top: 50px; text-align: center"><img src="2222.jpg" width="380" height="450"></div>
             </div>

     </section>

     <section id="donitas" class="container">
         <div class="row">
             <div class="col-md-10 container">
                 <div class="row">
                 <div class="col-md-2 col-4"><img src="calendario.png" style="padding: 20px"></div>
                     <div class="col-md-4 col-8"style="padding: 20px"><h3 style="font-family: Gadugi">ABRIMOS DE LUNES A DOMINGO</h3></div>
                     <div class="col-md-2 col-4"><img src="telefono.png" style="padding: 20px"></div>
                 <div class="col-md-4 col-8"style="padding: 20px"><h3 style="font-family: Gadugi">PEDIDOS POR TELÉFONO</h3></div>
                 </div>
             <div class="row">
                 <div class="col-md-6"><h3 style="font-family: 'Yu Gothic UI Light'">Lunes a Viernes: 07:30 - 14:30 | 16:30 - 20:30
                     <br>Sábado y Domingo: 07:30 - 14:30</h3></div>
                 <div class="col-md-6">
                     <h3 style="font-family: 'Yu Gothic UI Light'">¿Necesitas realizar ya tu pedido?
                         <br> Llámanos al 01 656 438 0640,estaremos gustosos de atenderte.</h3></div>
             </div>
             <div class="row">
                 <div class="col-md-2 col-4"><img src="moto.png" style="padding: 20px"></div>
                 <div class="col-md-4 col-8" style="padding: 20px"> <h3 style="font-family: Gadugi">ENTREGA A DOMICILIO</h3></div>
                 <div class="col-md-2 col-4"><img src="atm.png" style="padding: 20px"></div>
                 <div class="col-md-4 col-8" style="padding: 20px"><h3 style="font-family: Gadugi">FORMAS DE PAGO</h3></div>
             </div>
             <div class="row">
                 <div class="col-md-6"><h3 style="font-family: 'Yu Gothic UI Light'">Unica sucursal en Ciudad Juarez.
                     <br>En la compra de mas de 200 MXN en cualquiera de nuestros
                     <br>productos,le llevamos su mercancia a las puertas de su hogar.</h3></div>
                 <div class="col-md-6"><h3 style="font-family: 'Yu Gothic UI Light'">Acude a tu Oxxo mas cercano a depositar el total y
                     <br> presenta en nuestra sucursal o repartidor tu ticket
                     <br> de compra.</h3></div>
             </div>
            </div>
             <div class="col-md-2 col-12" style="text-align: center">
                 <img src="donaslogo.png" width="250" height="600">
             </div>
         </div>
     </section>

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
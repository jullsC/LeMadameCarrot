<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Cuenta | Le Madame Carrot. Panadería online</title>
    <link rel="icon" href="logo1.png">
    <link rel="stylesheet" href="proyecto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    #boton{
        margin-top: 20px;
        background-color: rgb(246,157,60);
        border-color: #f69d3c;
    }
    #boton:hover{
        background-color: rgba(246,157,60,0.5);
        border-color: rgba(246,157,60,0.5);
    }
    #boton1{
        margin-top: 20px;
        background-color: rgb(246,157,60);
        border-color: #f69d3c;
    }
    #boton1:hover{
        background-color: rgba(246,157,60,0.5);
        border-color: rgba(246,157,60,0.5);
    }
</style>

</head>
<body style="background-color: #FFFAF0;">

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



       <section id="cuenta" class="container" style="margin-bottom: 80px;">
           <div class="row">
               <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 30px; color:#F4A460;margin-top: 20px; padding-bottom: 10px"><i>Tu información personal</i> </div>
           </div>
        <form action="editardatos.php" method="post">
            <div class="row">
                <?php
                echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"hidden\" value=$id id='id' name='id'></div>";
                ?></div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2"></div>
                <div class="col-md-2 col-form-label"><label>Nombre</label></div>
                <?php
                echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"text\" value=$nombre readonly></div>";
                ?>
                <div class="col-md-2 col-md-offset-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-2"></div>
                <div class="col-md-2 col-form-label"><label>Apellido</label></div>
                <?php
                echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"text\" value=$apellido readonly></div>";
                ?>
                <div class="col-md-2 col-md-offset-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-2"></div>
                <div class="col-md-2 col-form-label"><label>Correo electrónico</label></div>
                <?php
                echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"email\" value=$correo id='correo' name='correo' required></div>";
                ?>
                <div class="col-md-2 col-md-offset-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2"></div>
                <div class="col-md-2 col-form-label"><label>Dirección</label></div>
                <?php
                echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"text\" value='$direccion' id='direccion' name='direccion' required></div>";
                ?>
                <div class="col-md-2 col-md-offset-2"></div>
            </div>
            <div class="row">
            <div class="col-md-10" style="text-align: right"><input type="submit" value="Guardar cambios" class="btn btn-warning" id="boton"></div>
            <div class="col-md-2 col-md-offset-2"></div>
            </div>
        </form>

           <div class="row">
               <div class="col-md-12" style="font-family: 'Times New Roman'; font-size: 30px; color:#F4A460;margin-top: 20px; padding-bottom: 10px"><i>Cambiar contraseña</i> </div>
           </div>
           <form action="cambiarpass.php" method="post">
               <div class="row">
                   <?php
                   echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"hidden\" value=$id id='id' name='id'></div>";
                   ?></div>
               <div class="row">
                   <div class="col-md-2 col-md-offset-2"></div>
                   <div class="col-md-2 col-form-label"><label>Contraseña Actual</label></div>
                   <div class="col-md-6"><input class="form-control" type="password" required id='passold' name='passold' style="border: 2px solid red"></div>
                   <div class="col-md-2 col-md-offset-2"></div>
               </div>
               <div class="row">
                   <div class="col-md-2 col-md-offset-2"></div>
                   <div class="col-md-2 col-form-label"><label>Contraseña Nueva</label></div>
                   <div class="col-md-6"><input class="form-control" type="password" required id='passnew' name='passnew' style="border: 2px solid red"></div>
                   <div class="col-md-2 col-md-offset-2"></div>
               </div>
               <div class="row">
                   <div class="col-md-10" style="text-align: right"><input type="submit" value="Actualizar contraseña" class="btn btn-warning" id="boton"></div>
                   <div class="col-md-2 col-md-offset-2"></div>
               </div>
               <div class="row" style="color: red; text-align: center">
                   <div class="col-md-12" style="text-align: center;">Contraseña incorrecta</div>
               </div>
           </form>

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

            <div class="col-md-4">

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
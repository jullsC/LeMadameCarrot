<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pan Dulce | Le Madame Carrot. Panadería online</title>
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

<section id="pandulce">
    <div style="width: 100%; height: 190px; background-image: url('pand.jpg'); background-size: 100% 190px; margin-bottom: 50px">

    </div>

    <table border="0" width="90%" style="margin: 0 auto">
     <tr >
         <th><h1 style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Rebanadas</i><br></font></h1></th>
         <th><h1 style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Muffins</i></font></h1></th>
         <th><h1 style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Galletas</i></font></h1></th>
         <th><h1 style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Donas</i></font></h1></th>
         <th><h1 style="font-family: 'Times New Roman'"><font color="#F4A460"><i>Clasicos</i></font></h1></th>
         </tr>
        
        <tr >
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="1" class="imagen"><img src="rebanadanuez.jpg" width="250" height="199"></a><br><h4><i>Rebanada con mantequilla
            <br> $ 8.00  </i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="6" class="imagen"><img src="almendra.jpg" width="250" height="199"></a><br><h4><i>Muffin de almendra
            <br> $ 10.00 </i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="11" class="imagen"><img src="espejo.jpg" width="250" height="199"></a><br><h4><i>Espejo
            <br> $ 12.00 </i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="16" class="imagen"><img src="dona1.jpg" width="250" height="199"></a><br><h4><i>Dona de chocolate
            <br> $ 15.00 <i/></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="21" class="imagen"><img src="concha.jpg" width="250" height="199"></a><br><h4><i>Concha de vainilla
            <br> $ 8.00 </i></h4></td>
        </tr>
        
        <tr>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="2" class="imagen"><img src="rebanadacoco.jpg" width="250" height="199"></a><br><h4><i>Rebanada con coco
            <br> $ 10.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="7" class="imagen"><img src="muffin.jpg" width="250" height="199"></a><br><h4><i>Muffin de elote
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="12" class="imagen"><img src="galleta1.jpg" width="250" height="199"></a><br><h4><i>Galleta de nuez
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="17" class="imagen"><img src="dona2.jpg" width="250" height="199"></a><br><h4><i>Dona de maple
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="22" class="imagen"><img src="bunuelo.jpg" width="250" height="199"></a><br><h4><i>Buñuelo
            <br> $ 10.00</i></h4></td>
        </tr>
        
        <tr>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="3" class="imagen"><img src="rebanadanuez.jpg" width="250" height="199"></a><br><h4><i>Renabana de nuez
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="8" class="imagen"><img src="muffin1.jpg" width="250" height="199"></a><br><h4><i>Muffin de nuez
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="13" class="imagen"><img src="polvoron.jpg" width="250" height="199"></a><br><h4><i>Polvoron de anis
            <br> $ 12.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="18" class="imagen"><img src="dona3.jpg" width="250" height="199"></a><br><h4><i>Dona con almendra
            <br> $ 12.00<i/></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="23" class="imagen"><img src="bisquet.jpg" width="250" height="199"></a><br><h4><i>Bisquet
            <br> $ 15.00</i></h4></td>
        </tr>

        <tr>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="4" class="imagen"><img src="multi.jpg" width="250" height="199"></a><br><h4><i>Multi de chocolate
            <br> $ 12.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="9" class="imagen"><img src="muffin2.jpg" width="250" height="199"></a><br><h4><i>Muffin de naranja
            <br> $ 14.00</i></h4> </td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="14" class="imagen"><img src="polvoron1.jpg" width="250" height="199"></a><br><h4><i>Polvoron de chocolate
            <br> $ 10.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="19" class="imagen"><img src="dona4.jpg" width="250" height="199"></a><br><h4><i>Choux con chocolate
            <br> $ 16.00   <i/></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="24" class="imagen"><img src="glaseados.jpg" width="250" height="199"></a><br><h4><i>Glaseados
            <br> $ 12.00</i></h4></td>
        </tr>

        <tr>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="5" class="imagen"><img src="frambuesachoco.jpg" width="250" height="199"></a><br><h4><i>Rebanada de frambuesa
            <br> $ 15.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="10" class="imagen"><img src="mantecada.jpg" width="250" height="199"></a><br><h4><i>Mantecada
            <br> $ 10.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="15" class="imagen"><img src="polvoron2.jpg" width="250" height="199"></a><br><h4><i>Polvoron de fresa
            <br> $ 10.00</i></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="20" class="imagen"><img src="dona5.jpg" width="250" height="199"></a><br><h4><i>Dona de moka
            <br> $ 15.00<i/></h4></td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="25" class="imagen"><img src="porky.jpg" width="250" height="199"></a><br><h4><i>Puerquito de piloncillo
            <br> $ 15.00</i></h4></td>
        </tr>

    </table>

</section>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="miModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Agregar a pedido</h5>
            </div>
            <form action="agregarCarrito.php" method="post">
                <div class="modal-body container" id="infoModal">
                    <div class="row">
                        <div class="col-md-4 col-4"><img id="poner" src="" height="100" width="150"></div>
                        <div class="col-md-8 col-8 container">

                            <div class="row">
                                <div class="col-md-12 nombreP" style="font-family: 'Times New Roman'; font-size: 20px; color:#F4A460; text-align: center"></div>
                                <div class="col-md-12 desP" style="text-align: center; margin-bottom: 10px"></div>

                                <label class="col-md-5 col-5 col-form-label" style="text-align: right">Cantidad</label>
                                <input type="number" min="1" max="99" class="cantidad form-control col-md-4 col-4" id="cantidad" name="cantidad">
                                <div class="col-md-3 col-3 col-md-offset-3"></div>
                                <div class="row">
                                    <?php
                                    echo "<div class=\"col-md-6\"><input class=\"form-control\" type=\"hidden\" value=$id id='id' name='id'></div>";
                                    //echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" value=$id id='elid' name='elid'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" value=$nombre id='elnombre' name='elnombre'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" value=$correo id='elcorreo' name='elcorreo'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" value=$direccion id='eldireccion' name='ladireccion'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" value=$apellido id='elapellido' name='elapellido'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" id='precio' name='precio'></div>";
                                    echo "<div class=\"col-md-10\"><input class=\"form-control\" type=\"hidden\" id='opcion' name='opcion' value='2'></div>";
                                    echo "<div class=\"col-md-2\"><input class=\"form-control\" type=\"hidden\"  id='idProducto' name='idProducto'></div>";
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Agregar" class="btn btn-warning" id="boton">

                </div>
            </form>
        </div>
    </div>
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


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {


        $(".imagen").click(function (e) {

            console.log(e);
            $.ajax({
                // la URL para la petición
                url : 'productosDatos.php',

                // la información a enviar
                data : { id : e.currentTarget.id},

                // especifica si será una petición POST o GET
                type : 'GET',

                // el tipo de información que se espera de respuesta
                dataType : 'json',

                // código a ejecutar si la petición es satisfactoria;
                // la respuesta es pasada como argumento a la función
                success : function(json) {

                    console.log(json);
                    $("div.nombreP").html(json.nombre);
                    document.getElementById("poner").src=json.url;
                    $("div.desP").html("$"+json.precio+".00 pza");
                    document.getElementById("idProducto").value=json.id;
                    document.getElementById("precio").value=json.precio;

                },

                // código a ejecutar si la petición falla;
                // son pasados como argumentos a la función
                // el objeto de la petición en crudo y código de estatus de la petición
                error : function(xhr, status) {
                    var json1 = xhr.responseText;
                    var json=JSON.parse(json1);


                    // $("div.modal-body").html(json.nombre);

                    console.log(xhr.responseText);

                },

                // código a ejecutar sin importar si la petición falló o no
                complete : function(xhr, status) {

                }
            });

        });

    });
</script>

</body>
</html>
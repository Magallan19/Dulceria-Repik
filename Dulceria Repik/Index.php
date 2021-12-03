<?php 
    session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Img/favicon.ico" type="image/png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Stayle.css">
    <script src="https://kit.fontawesome.com/167bb7a25e.js" crossorigin="anonymous"></script>
    <title>Duceria Repik</title>
</head>

<body>
    <header>
        <div class="container p-4">
            <div class=" row">
                <div class="col-md-12 mx-auto ">
                    <div>
                        <img src="Img/01.png" class="rounded float-left">
                        <img src="Img/01.png" class="rounded float-right">
                    </div>
                    <div class="mx-auto col-md-7 p-4 input-group">

                        <input type="text" class="form-control input1 text-center" placeholder="Buscador..">
                        <div class=" input-group-append icono ">
                            <span class="input-group-text icono "><i class="fas fa-search "></i></span>
                        </div>
                    </div>

                    <div class="col-md-8 mx-auto link ">
                        <div class="text-center ">
                            <a href="Marcas.php" class="btn marca float-left">Marcas</a>
                            <a href="ofertas.php" class="btn ofertas ">Ofertas</a>
                            <?php if(isset($_SESSION['Usuario'])){
                            ?>
                            <a href="Carrito.php" class="btn Crea float-right "> <?php echo $_SESSION['Usuario']  ?> </a>
                            <?php
                            }else{
                                ?>
                            <a href="ingresar.html" class="btn Crea float-right ">Iniciar sesion</a>
                                <?php  
                            } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container Ajuste">
        <div class="row ">
            <div class="col-md-12 mx-auto ">

                <div>
                    <div class="ContenedorPrincipal">
                        <button id="izquieda" class="izquieda"><i class="fas fa-angle-left"></i></button>

                        <div class="contenedorcarousel">
                            <div class="carousel">
                                <div class="imagenes">
                                    <img src="Img/2.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/3.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/4.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/5.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/6.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/7.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/8.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/9.png" alt="" srcset="">
                                </div>
                                <div class="imagenes">
                                    <img src="Img/10.png" alt="" srcset="">
                                </div>
                            </div>
                        </div>

                        <button id="derecha" class="derecha"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-8 mx-auto link ">
                    <div class="text-center d-block ">
                        <a href="Contacto.html" class="btn Contactanos float-left">Contactanos</a>
                        <?php if(isset($_SESSION['Usuario'])){
                             ?>
                            <a href="Php/Cerrar.php" class="btn Carrito ">Cerrar Session</a>
                        <?php

                        }else{
                            ?>
                            <a href="Carrito.php" class="btn Carrito ">Carrito</a>
                        <?php
                        } ?>
                        <a href="Surcusales.php" class="btn Sucursales  float-right ">Sucursales</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class=" text-center p-3 Pie ">
        <div class="container">
            <div class="col-md-12 mx-auto">
                <h6 class="rounded float-left font1">repik_ventas02@outlook.com</h6>
                <h6 class="rounded float-right font1">Repik Oficial</h6>
                <div class="font">
                    <i class="fab fa-facebook iconos"></i>
                    <i class="fab fa-twitter-square iconos"></i>
                    <i class="fab fa-instagram-square iconos"></i>
                </div>
            </div>
        </div>
    </footer>
    <script src="Js/Carousel.js"></script>
</body>

</html>
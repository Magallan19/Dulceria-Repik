<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Stayle.css">
    <script src="https://kit.fontawesome.com/167bb7a25e.js" crossorigin="anonymous"></script>
    <title>Ofertas</title>
</head>

<body>
    <header class="encabezado">
        <div class="container p-4 ">
            <div class="row">
                <div class="col-md-12 text-center mx-auto">
                    <a href="Index.php" class="btn inicio float-right">Inicio</a>
                    <div class="col-md-4 mx-auto input-group">
                        <input type="text" class="form-control input1 text-center" placeholder="Buscador..">
                        <div class=" input-group-append">
                            <span class="input-group-text icono  "><i class="fas fa-search "></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="container p-4">
        <div class="row">
            <div class="col-sm-3 float-left p-3">
                <a href="ofertas.php" class="btn Oferta btn-lg ">Ofertas</a>
                <a href="Marcas.php" class="btn btn-info btn-lg ListaA">Marcar</a>
                <a href="Surcusales.php" class="btn btn-info btn-lg ListaA">Sucursales</a>
                <a href="Carrito.php" class="btn btn-info btn-lg ListaA">Carrito</a>
                <a href="Contacto.html" class="btn btn-info btn-lg ListaA">Contacto</a>
                 <?php if(isset($_SESSION['Usuario'])) {  ?>
                <a href="Php/Cerrar.php" class="btn btn-info btn-lg ListaA">Cerrar Sesion</a>
                <?php }  ?>


            </div>
            <div class="col-md-9 mx-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 mx-auto">
                            <div class="CtnOfertas">
                                <p>#1</p>
                                <div class="Cont">
                                    <h4>25% de descuento en la compra de 4 paquetes de la marca Ricolino</h4>
                                </div>
                            </div>
                            <div class="CtnOfertas">
                                <p>#2</p>
                                <div class="Cont">
                                    <h4>50% de descuento en la compra de 1000 pesos en la marca Mara</h4>
                                </div>
                            </div>
                            <div class="CtnOfertas">
                                <p>#3</p>
                                <div class="Cont">
                                    <h4>Envío gratis en la compra arriba de $ 5,000 en general</h4>
                                </div>
                            </div>
                            <div class="CtnOfertas">
                                <p>#4</p>
                                <div class="Cont">
                                    <h4>15% de descuento en cualquier producto de la marca Vero</h4>
                                </div>
                            </div>
                            <div class="CtnOfertas">
                                <p>#5</p>
                                <div class="Cont">
                                    <h4>40% de descuento en la compra de $1,500 de la marca Lucas</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 mx-auto">
                            <img src="img/67.png" class=" Ofertaimg" width="150" alt="">
                            <img src="img/68.png" class=" Ofertaimg1" width="150" alt="">
                            <img src="img/69.png" class=" " width="150" alt="">
                            <img src="img/70.png" class=" Ofertaimg2" width="150" alt="">
                            <img src="img/71.png" class=" Ofertaimg4" width="150" alt="">

                        </div>
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
</body>

</html>
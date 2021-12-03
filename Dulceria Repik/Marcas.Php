<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Stayle.css">
    <script src="https://kit.fontawesome.com/167bb7a25e.js" crossorigin="anonymous"></script>
    <title>Marcas</title>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-3 float-left p-3">
                <a href="Marcas.php" class="btn marca1 btn-lg ">Marcas</a>

                <a href="Carrito.php" class="btn btn-info btn-lg ListaA">Carrito</a>
                <a href="Surcusales.php" class="btn btn-info btn-lg ListaA">Sucursales</a>
                <a href="ofertas.php" class="btn btn-info btn-lg ListaA">Ofertas</a>
                <a href="Contacto.html" class="btn btn-info btn-lg ListaA">Contacto</a>
                <a href="Php/Cerrar.php" class="btn btn-info btn-lg ListaA">Cerrar Sesion</a>


            </div>
            <div class="col-md-9">
                <div class="container p-4 m-4">
                    <div class="row m-3 p-3">
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Vero"><img src="Img/11.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
                        </div>
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Lucas"><img src="Img/12.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
                        </div>
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Mana"><img src="Img/13.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
                        </div>
                    </div>
                    <div class="row m-3 p-3">
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Rosa"><img src="Img/14.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
                        </div>
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Ricolino"><img src="Img/15.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
                        </div>
                        <div class="col-sm-4 ">
                            <a href="Dulces.php?Marca=Totis"><img src="Img/16.png" class="img-fluid Imgmarcas" width="190" alt=""></a>
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
<?php 
    include("Php/Bd.php");
    include("Php/Carrito.php");
    session_start();

    $Marca = $_GET['Marca'];
    $sql = "SELECT * FROM Articulos WHERE Marca = '$Marca'";
    $resultado = mysqli_query($conex,$sql);
    $resultado1 = mysqli_query($conex,$sql);
    

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
    <title><?php echo $Marca ?></title>
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
            <div class="col-md-3 float-left p-1">
                <a href="Marcas.php" class="btn marca1 btn-lg ">Marcas</a>
                <img src="Img/<?php Logo($resultado1); ?>   " class="img-fluid mx-auto d-block Imgmarcas" width="150" alt="">
                <a href="Carrito.php" class="btn btn-info btn-lg ListaA">Carrito</a>
                <a href="Surcusales.html" class="btn btn-info btn-lg ListaA">Sucursales</a>
                <a href="ofertas.html" class="btn btn-info btn-lg ListaA">Ofertas</a>
                <a href="Contacto.html" class="btn btn-info btn-lg ListaA">Contacto</a>
                <?php if(isset($_SESSION['Usuario'])) {  ?>
                <a href="Php/Cerrar.php" class="btn btn-info btn-lg ListaA">Cerrar Sesion</a>
                <?php }  ?>

            </div>
            <div class="col-md-9">
                <div class="container  m-5">
                    <div class="CtnDulces">
                        <?php while($row = $resultado ->fetch_array()){ ?>
                        <div class="box text-center">
                            <a href="Carrito.php?id=<?php echo $row['Id_Articulo'] ?>"><img src="Img/<?php echo $row['Imagen'] ?>" class="img-fluid Imgmarcas" width="" alt=""></a>
                            <div class="CtnPrecioCarrito">
                                <div class="CtnPrecio">
                                    <h6 class="Precio"><?php echo $row['Precio'] ?></h6>
                                </div>
                                <div class="CtnCarrito">
                                    <a href="Carrito.php?id=<?php echo $row['Id_Articulo'] ?>"><i class="fas fa-cart-plus"></i></a>
                                
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
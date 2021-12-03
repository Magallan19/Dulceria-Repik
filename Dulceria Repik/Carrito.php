<?php 

    include("Php/Bd.php");
    session_start();
   
    if(isset($_SESSION['Carrito'])){
        if(isset($_GET['id'])){
            $arreglo = $_SESSION['Carrito'];
            $encontro = false;
            $numero = 0;
            for($i=0;$i<count($arreglo);$i++){
                if($arreglo[$i]['Id']==$_GET['id']){
                    $encontro = true;
                    $numero = $i;
                }
            }
            if($encontro == true){
                $arreglo[$numero]['Cantidad']= $arreglo[$numero]['Cantidad']+1;
                $_SESSION['Carrito']=$arreglo;
            }else{
                $Nombre = "";
                $Precio = 0;
                $Imagen = "";
                $sql = "SELECT * FROM Articulos WHERE Id_Articulo =".$_GET['id'];
                $resultado = mysqli_query($conex,$sql);
                while($row = $resultado ->fetch_array()){
                    $Precio = $row['Precio'];
                    $Imagen = $row['Imagen'];
                }
                $arregloN = array('Id'=>$_GET['id'],
                                    'Precio'=> $Precio,
                                    'Imagen'=>$Imagen,
                                    'Cantidad'=>1
                                    );
               array_push($arreglo,$arregloN);
                $_SESSION['Carrito']=$arreglo;
            }
        }
        
    }else{
        
        if(isset($_GET['id'])){
            $Nombre = "";
            $Precio = 0;
            $Imagen = "";
            $sql = "SELECT * FROM Articulos WHERE Id_Articulo =".$_GET['id'];
            $resultado = mysqli_query($conex,$sql);
            while($row = $resultado ->fetch_array()){
                $Precio = $row['Precio'];
                $Imagen = $row['Imagen'];
            }
            $arreglo[ ] = array('Id'=>$_GET['id'],
                                'Precio'=> $Precio,
                                'Imagen'=>$Imagen,
                                'Cantidad'=>1
                                );
            $_SESSION['Carrito']=$arreglo;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Img/favicon.ico" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Stayle.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/167bb7a25e.js" crossorigin="anonymous"></script>
    <title>Carrito</title>
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
    <div class="container AjusteC">
        <div class="row">
            <div class="col-sm-3 float-left p-3">
                <a href="Carrito.php" class="btn marca1 btn-lg ">Carrito</a>
                <i class="fas fa-shopping-cart mx-auto Carrito1"></i>
                <a href="Marcas.php" class="btn btn-info btn-lg ListaA">Marcar</a>
                <a href="Surcusales.php" class="btn btn-info btn-lg ListaA">Sucursales</a>
                <a href="ofertas.php" class="btn btn-info btn-lg ListaA">Ofertas</a>
                <a href="Contacto.html" class="btn btn-info btn-lg ListaA">Contacto</a>
                 <?php if(isset($_SESSION['Usuario'])) {  ?>
                <a href="Php/Cerrar.php" class="btn btn-info btn-lg ListaA">Cerrar Sesion</a>
                <?php }  ?>

            </div>
            <div class="col-md-9">
                <?php 
                if(isset($_SESSION['Usuario'])){

                
                $total = 0;
                    if(isset($_SESSION['Carrito'])){
                        $datos = $_SESSION['Carrito'];
                        $total = 0;
                        for($i=0;$i<count($datos);$i++){
                            ?>
                            <div class="producto p-4">
                                <div class="row">
                                    <div class="col-sm-6 text-center ">
                                        <img src="Img/<?php echo $datos[$i]["Imagen"] ?>" class="img-fluid Imgmarcas p-2" >
                                    </div>
                                    <div class="col-sm-6 my-auto mx-auto">
                                        <h6 class="Precio">Precio:<?php echo  $datos[$i]['Precio'] ?></h6>
                                        <label for="" class="Precio">Cantidad:</label>
                                        <input class="Cantidad form-control  " type="text"  
                                                                data-Precio="<?php echo  $datos[$i]['Precio'] ?>" 
                                                                data-Id="<?php echo  $datos[$i]['Id'] ?>" 
                                                                value="<?php  echo $datos[$i]['Cantidad'] ?>"><br>
                                        <h6 class="subtotal Precio">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></h6>
                                    </div>

                                </div>
                                <br>
                                
                            </div>
                            <?php 

                        $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total; 
                        $_SESSION['Total']=$total;
                        }
                        ?>
                        <div class="row">
                                    <div class="col-sm-3 mx-auto">
                                        <form action="Php/Compra.php" method="POST">
                                            <div class="form-group">
                                                <label for="" class="laS">Sucusales</label>
                                                <select  class="form-control" name="Sucusales">
                                                    <option val></option>
                                                    <option value="Garcia">Garcia</option>
                                                    <option value="Monterry">Monterry</option>
                                                    <option value="Escobedo">Escobedo</option>
                                                    <option value="Apodaca">Apodaca</option>
                                                </select>
                                            </div>
                                            <?php  ?>
                                            <?php if($total){  ?>
                                                    <center><h3 id="total" >Total: <?php echo $total ?> </h3></center>
                                                    <center><input type="submit" class="SubC" value="Compra"></center>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                       <?php  
                    }else{
                        ?>
                        <h3 class="text-center m-5">No a Seleciona ningun Articulo</h3>
                        
                        <?php  
                    } 
                    
                }else{
                    ?>
                    <div class="container p-5 my-auto mx-auto">
                        <div class="row">
                            <div class="col-sm-12 p-5 m-5">
                                <h4 class="h4falso">
                                    <a href="ingresar.html" class="">Inicia Session Para Usar el Carrito de Compras</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </div>
    <br>
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
    
     
     <script src="Js/Carrito.js"></script>
</body>

</html>
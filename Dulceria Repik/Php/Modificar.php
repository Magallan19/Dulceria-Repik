<?php 
    session_start();
    $arreglo = $_SESSION['Carrito'];
    $numero = 0;
    $total = 0;
    for($i = 0; $i<count($arreglo); $i++){
        if($arreglo[$i]==$_POST['Id']){
            $numero = $i;
        }

    }
    $arreglo[$numero]['Cantidad'] =$_POST['Cantidad'];
    for($i = 0; $i<count($arreglo); $i++){
       $total = ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
    }
    $_SESSION['Carrito']=$arreglo;
    echo $total;
?>
<?php 
    include("Bd.php");
    session_start();

    
    
    unset($_SESSION['Carrito']);

    header('Location: ../Carrito.php');

?>
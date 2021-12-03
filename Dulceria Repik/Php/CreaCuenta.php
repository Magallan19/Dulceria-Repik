<?php
    include("Bd.php");
    session_start();
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Password = $_POST['Password'];
    
    if($Nombre){
        if($Apellido){
            if($Telefono){
                if($Correo){
                    if($Password){
                            $sql = "INSERT INTO Usuario (Usuario,Apellido,Telefono,Corro,Password) VALUES ('$Nombre','$Apellido','$Telefono','$Correo','$Password')";
                            $resultado = mysqli_query($conex,$sql);
                            $_SESSION['Usuario']= $Nombre;
                            header('Location: ..../Index.html ');
                    }else{
                        header('Location: ../CrearCuentar.html ');
                    }
                }else{
                    header('Location: ../CrearCuenta.html ');
                }
            }else{
                header('Location: ../CrearCuenta.html ');
            }
        }else{
            header('Location: ../CrearCuenta.html ');
        }
    }else{
        header('Location: ../CrearCuenta.html ');
    }

    if($A == true){
        echo $A;
       
        

    }
?>
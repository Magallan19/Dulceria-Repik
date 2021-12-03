<?php 
    include("Bd.php");
    session_start();
    if(isset($_POST['Correo'])){
        $Correo = $_POST['Correo'];
        $Password = $_POST['Password'];
        $sql=  "SELECT * FROM Usuario WHERE Corro = '$Correo' AND Password = '$Password'";
        $resultado = mysqli_query($conex,$sql);
        if(mysqli_num_rows($resultado) >=1){
             while($row =$resultado->fetch_array()){
                $Usuario = $row['Usuario'];
                $_SESSION['Usuario']=$Usuario;
                $Id = $row['Id_Usuario'];
                $_SESSION['Id_Usuario']=$Id;
            }
            
            header('Location: ../Index.php');
        }
        else
        {
            header('Location: ../Ingresar.html');
        }
        }

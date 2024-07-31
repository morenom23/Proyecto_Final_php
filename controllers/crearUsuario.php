<?php

    include("../database/Conexion.php");

    // Registro de usuario
    if (isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña =($_POST['password']); 

        $insertar = "INSERT INTO usuarios (`nombre`, `correo`, `password`) VALUES ('$nombre', '$correo', '$contraseña')";

        if (mysqli_query($conexion, $insertar)) {

            header("location: ../views/login.php");
        
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }
?>


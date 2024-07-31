<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../routes/public/css/styles/formularios.css">
</head>
<body>
    


<?php
    

include("../database/Conexion.php");

if (isset($_POST['enviar'])) {
    $login_correo = $_POST['correo'];
    $login_contraseña = $_POST['password'];

    // Usar consultas preparadas para evitar inyecciones SQL
    $query = "SELECT password FROM usuarios WHERE correo = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "s", $login_correo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $stored_password);
        mysqli_stmt_fetch($stmt);

        // Comparar la contraseña proporcionada con la almacenada
        if ($login_contraseña === $stored_password) {
           
            header('Location: ../views/dashboard.php');
            exit();
            

        } else {
            include('../views/login.php');
           
        }
    } else {
        echo "No existe una cuenta con ese correo.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>

</body>
</html>
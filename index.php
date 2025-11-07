<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellidos'];

    if(isset($_SESSION['nombre']) && isset($_SESSION['apellido'])){
        header('Location: bienvenida.php');
        exit;
    }else{
        echo "ERROR";
    }
}

?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sombrero Seleccionador de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="height: 100vh; display: flex; align-items: center; justify-content: center; background-color: rgba(71, 53, 62, 0.15);">
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
<h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
    <form action="index.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos">
        <input type="submit">
    </form>

    <?php

    

    

    ?>
</div>
</body>
</html>
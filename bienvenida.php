<?php
session_start();

include_once __DIR__ . '/datos.php';


if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])){
    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellido'];
}else{
    header('Location: /index.php');
    exit;
}

$casaSeleccionada = array_rand($casas_info);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        background-color: <?php echo $casas_info[$casaSeleccionada]['background_color']?>;
        color: <?php echo $casas_info[$casaSeleccionada]['text_color']?>    
    }

    img {
        max-width: 500px;
        max-height: 500px;
    }

</style>
</head>
<body>
<div class="container text-center">
     <h1> Bienvenido a tu nueva casa en Hogwarts</h1>

<div class="welcome-message mt-4">
    <?php
        echo "<div style='width: 90%; height: 800px; background-color: ".$casas_info[$casaSeleccionada]['message_background']."; display: flex; flex-direction: column; align-items: center; justify-content: center; overflow:hidden; text-align:center; border-radius: 16px'>";
        echo "<h2>Bienvenido ".$nombre." ".$apellidos." has sido seleccionado para ".$casaSeleccionada."</h2>";
        echo "<p>".$casas_info[$casaSeleccionada]['welcome_message']."</p>";
        echo "<img src='".$casas_info[$casaSeleccionada]['image']."' alt=''>";
        echo "</div>";
    ?>
</div>
</div>
</body>
</html>
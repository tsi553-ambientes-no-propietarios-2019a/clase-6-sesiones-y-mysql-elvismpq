<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
if ($_GET) {
    if (isset($_GET['error_message'])) {
        $error_message=$_GET['error_message'];
    }elseif (isset($_GET['log_out'])) {
        $log_out=$_GET['log_out'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>

</head>
<body>
    <form action="inicio.php" method="post">
    <input type="text" name="txtuser" id="iduser">
    <input type="password" name="txtpass" id="idpass">
    <input type="submit" value="Iniciar Sesión"></form>
    <?php 
    if (isset($error_message)) {
      echo '<strong>'.$error_message.'</strong>';
      }elseif(isset($log_out)){
    echo '<strong>'.$log_out.'</strong>';  
      }
      ?>
</body>
</html>
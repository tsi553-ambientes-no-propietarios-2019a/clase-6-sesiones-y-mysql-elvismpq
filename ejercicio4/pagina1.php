<?php
/**
 * Escribir una página en PHP que permita registrar una queja en una base de datos.
 * Disponer un formulario que permita almacenar el nombre del visitante (objeto HTML de tipo "text"), la descripción de la queja (objeto de tipo 
 * "textarea"). Almacenar en el archivo de texto la fecha y hora de la queja.
 *
 * El archivo "pagina1.php" debe ser el formulario de ingreso de datos.
 * El archivo "pagina2.php" debe registrar la información en la base de datos.
 * Por último el archivo "pagina3.php" debe imprimir todas las quejas registradas hasta el momento. Colocar un hipervínculo en el 
 * archivo "pagina1.php" para poder ver todas las quejas registradas.
 *
 */

if($_GET){
    if (isset($_GET['succeed_message'])) {
        $succeed_message=$_GET['succeed_message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 1</title>
</head>
<body>
    <form action="pagina2.php" method="post">
    <h1>Formulario de Queja</h1><br>
    <p>Nombre del visitante:   </p><input type="text" name="RegVisitante" required><br>
    <p>Descripción:</p><br>
    <textarea name="areaQueja" cols="30" rows="10" required></textarea><br>
    <input type="submit" value="Enviar"><br>
    </form>
    <a href="pagina3.php">Ver todas las quejas</a><br>
    <?php 
    if (isset($succeed_message)) {
        echo '<strong>'.$succeed_message.'</strong>';
    }
        
    ?>
</body>
</html>
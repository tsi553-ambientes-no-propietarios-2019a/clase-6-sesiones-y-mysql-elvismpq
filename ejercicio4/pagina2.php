<?php
if ($_POST) {
    if (isset($_POST['RegVisitante']) && isset($_POST['areaQueja'])) {
        $visitante=$_POST['RegVisitante'];
        $queja=$_POST['areaQueja'];
        //determinar hora y fecha actuales
        $fecha=date('Y-m-d H:i:s');
        $conn= new mysqli('localhost','root','12345','ejercicio4');

        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        
        

        $sql_insert="insert into quejas(nombreVis,DescrQueja,FecyHorQueja) values('$visitante','$queja','$fecha')";
        $conn->query($sql_insert);
        if($conn->error){
            echo 'Ocurrio un error ----> '.$conn->error;
        }else {
            header('Location: pagina1.php?succeed_message=Queja registrada!');
        }
    }else {
        header('Location: pagina1.php?error_message=Ingrese todos los datos!');
    }
}



?>
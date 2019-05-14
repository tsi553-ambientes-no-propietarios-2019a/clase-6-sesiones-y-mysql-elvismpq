<?php

    $conn= new mysqli('localhost','root','12345','ejercicio4');

    if ($conn->connect_error) {
        echo 'Error en la conexion '. $conn->connect_error;
    }

    $sql="select * from quejas";
    $res=$conn->query($sql);
    

    if($conn->error){
        header('Location: index.php?error_message=Ocurrió un error: '.$conn->error);
        exit;
    }
    
            
        
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>pagina 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre de Vistante</th>
      <th scope="col">Queja</th>
      <th scope="col">Fecha y Hora de Queja</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($res->num_rows> 0 ) {
        while($row=$res->fetch_assoc()) {?>
  <tr>
      <th scope="row"><?php print_r($row['idquejas']);?></th>
      <td><?php print_r($row['nombreVis']); ?></td>
      <td><?php print_r($row['DescrQueja']); ?></td>
      <td><?php print_r($row['FecyHorQueja']); ?></td>
    </tr>
  <?php
        }
}else {
    echo 'No hay quejas<br>';
    

}
echo '<a href="pagina1.php">Regresar</a><br>';
  ?>
    
</table>

</div>
    </body>
    </html>
    
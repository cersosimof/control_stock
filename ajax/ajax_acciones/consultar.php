<?php
require '../../ConnectDb.php';

$id_articulo = $_POST["id"];

$sql = "SELECT * FROM movimientos WHERE id_articulo = '$id_articulo'";

$instance = ConnectDb::getInstance();
$listado = $instance->ExecuteQuery($sql);

?>



<h2>Ultimos Movimientos:</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Accion</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>

    <?php 

while ($row = mysqli_fetch_assoc($listado)) 
{
    printf("<tr>");
    printf("<th scope='col'>%s</th>", $row["accion"]);
    printf("<th scope='col'>%s</th>", $row["fecha"]);
    printf("<th scope='col'>%s</th>", $row["cantidad"]);
    printf("<th scope='col'>%s</th>", $row["usuario"]);
    printf("</tr>");
}
    ?>
    </tr>
  </tbody>
</table> 
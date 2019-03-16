<?php
require "../../../control_stock/modelos/articulo.php";

$aBuscar = $_POST["aBuscar"];
$cantidad = $_POST["cantidad"];
// $destino = $_POST["destino"];

$articuloCreado = new Articulo();
$result = $articuloCreado->reducirCantidad($aBuscar, $cantidad);

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notificacion:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php 
        if($result == "supera") {
          echo "No posee esa cantidad en stock";
        } else {
          echo "La nueva cantidad en stock es de ". $result;
        }
        ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
require "../../../control_stock/modelos/articulo.php";

$aBuscar = $_POST["aBuscar"];
$cantidad = $_POST["cantidad"];


$articuloCreado = new Articulo();
$result = $articuloCreado->aumentarCantidad($aBuscar, $cantidad);
echo $result;
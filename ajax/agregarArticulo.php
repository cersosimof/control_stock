<?php
require "../modelos/articulo.php";

$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$notas = $_POST["notas"];
$stock = $_POST["stock"];
$alerta = $_POST["alerta"]; 

$articuloCreado = new Articulo();
$result = $articuloCreado->altaArticulo($categoria, $marca, $modelo, $notas, $stock, $alerta);
echo $result;
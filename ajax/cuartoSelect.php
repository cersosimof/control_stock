<?php 

require '../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$rps = $_POST["resultadoPrimerSelect"];
$rss = $_POST["resultadoSegundoSelect"];
$rts = $_POST["resultadoTercerSelect"];

$sql = "SELECT id_articulo FROM articulos WHERE categoria = '$rps' AND marca = '$rss' AND modelo = '$rts'";
$buscarCategorias = $instance->ExecuteQuery($sql);

$codigo = $buscarCategorias->fetch_assoc();

echo $codigo["id_articulo"];


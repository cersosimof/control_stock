<?php 

require '../../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$sql = "SELECT categoria FROM articulos GROUP BY categoria";
$buscarCategorias = $instance->ExecuteQuery($sql);

$indicador = $_POST["indicador"];
?>

<form id="primerForm" name="primerSelectName" action="">
    <select onchange="enviarPrimerForm('<?php echo $indicador; ?>')" id="primerSelect" class="custom-select custom-select-sm campoOpcion">
        <option >Seleccine categoria</option>
<?php

while($categoria = $buscarCategorias->fetch_assoc()) {
    echo "<option>",$categoria['categoria'],"</option>";
}

?>
    </select>
</form>
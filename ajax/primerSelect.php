<?php 

require '../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$sql = "SELECT categoria FROM articulos GROUP BY categoria";
$buscarCategorias = $instance->ExecuteQuery($sql);

?>

<form id="primerForm" name="primerSelectName" action="">
    <select onchange="enviarPrimerForm()" id="primerSelect" class="custom-select custom-select-lg mb-3">
        <option >Open this select menu</option>
<?php

while($categoria = $buscarCategorias->fetch_assoc()) {
    echo "<option>",$categoria['categoria'],"</option>";
}

?>
    </select>
</form>
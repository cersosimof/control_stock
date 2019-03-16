<?php 

require '../../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$resultadoPrimerSelect = $_POST["resultadoPrimerSelect"];
$resultadoSegundoSelect = $_POST["resultadoSegundoSelect"];
$indicador = $_POST["indicador"];

$sql = "SELECT modelo FROM articulos WHERE categoria = '$resultadoPrimerSelect' AND marca = '$resultadoSegundoSelect' GROUP BY marca";
$buscarCategorias = $instance->ExecuteQuery($sql);

?>


<form id="tercerForm" name="tercerSelectName" action="">
    <select onchange="informaClave('<?php echo $indicador; ?>')" id="tercerSelect" class="custom-select custom-select-sm campoOpcion">
        <option >Seleccione modelo</option>
        <?php

        while($categoria = $buscarCategorias->fetch_assoc()) {
            echo "<option>",$categoria['modelo'],"</option>";
        }

        ?>
    </select>
</form>
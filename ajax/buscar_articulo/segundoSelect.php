<?php 

require '../../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$resultadoPrimerSelect = $_POST["resultadoPrimerSelect"];
$indicador = $_POST["indicador"];

$sql = "SELECT marca FROM articulos WHERE categoria = '$resultadoPrimerSelect' GROUP BY marca";
$buscarCategorias = $instance->ExecuteQuery($sql);

?>


<form id="segundoForm" name="segundoSelectName" action="">
    <select onchange="enviarSegundoForm('<?php echo $indicador; ?>')" id="segundoSelect" class="custom-select custom-select-sm campoOpcion">
        <option >Seleccione marca</option>

        <?php

        while($categoria = $buscarCategorias->fetch_assoc()) {
            echo "<option>",$categoria['marca'],"</option>";
        }

        ?>
    </select>
</form>
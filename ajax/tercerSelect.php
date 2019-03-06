<?php 

require '../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$resultadoPrimerSelect = $_POST["resultadoPrimerSelect"];
$resultadoSegundoSelect = $_POST["resultadoSegundoSelect"];

$sql = "SELECT modelo FROM articulos WHERE categoria = '$resultadoPrimerSelect' AND marca = '$resultadoSegundoSelect' GROUP BY marca";
$buscarCategorias = $instance->ExecuteQuery($sql);

?>


<form id="tercerForm" name="tercerSelectName" action="">
    <select onchange="informaClave()" id="tercerSelect" class="custom-select custom-select-sm">
        <option >Open this select menu</option>
        <?php

        while($categoria = $buscarCategorias->fetch_assoc()) {
            echo "<option>",$categoria['modelo'],"</option>";
        }

        ?>
    </select>
</form>
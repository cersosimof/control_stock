<?php 

require '../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$resultadoPrimerSelect = $_POST["resultadoPrimerSelect"];

$sql = "SELECT marca FROM articulos WHERE categoria = '$resultadoPrimerSelect' GROUP BY marca";
$buscarCategorias = $instance->ExecuteQuery($sql);

?>


<form id="segundoForm" name="segundoSelectName" action="">
    <select onchange="enviarSegundoForm()" id="segundoSelect" class="custom-select custom-select-lg mb-3">
        <option >Open this select menu</option>

        <?php

        while($categoria = $buscarCategorias->fetch_assoc()) {
            echo "<option>",$categoria['marca'],"</option>";
        }

        ?>
    </select>
</form>
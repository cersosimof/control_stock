<?php 

require '../ConnectDb.php';
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();

$idEmpresa = $_POST["idEmpresa"];


$sql = "SELECT id_articulo, marca, modelo, stockInicial FROM articulos WHERE id_articulo = '$idEmpresa'";
$buscarCategorias = $instance->ExecuteQuery($sql);

$numero_de_resultados = $buscarCategorias->num_rows;

if($numero_de_resultados>0)
{
$codigo = $buscarCategorias->fetch_assoc();
?>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Marca:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $codigo["marca"]; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Modelo:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $codigo["modelo"]; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Stock:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $codigo["stockInicial"]; ?>" readonly>
        </div>
    </div>

<?php 
} 
?>
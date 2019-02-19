

<?php
require "componentes/header.php";
require '../conexion.php';
$Conn = new Conexion();
$Conn->CreateConnection();
?>


<!--
        <div style='margin-top: 2%' class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Bienvenido al control de stock. <span class="text-muted">Adri Adri Te ROMPO TODOOOO.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500" src="Photos/tiza.jpg"></img>
            </div>
        </div>
-->


<form>
  <div class="form-row align-items-center">

    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" id='botonIngresar'>Ingresar</button>
    <button type="button" class="btn btn-secondary" id='botonRetirar'>Retirar</button>
    <button type="button" class="btn btn-secondary" id='botonConsultar'>Consultar</button>
    </div>

    <div class="col-sm-3 my-1">
      <div class="input-group">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>

    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">BUSCAR</button>
    </div>
  </div>
</form>



<div id='formulario'>
</div>





<script>



</script>
<?php
require 'componentes/footer.php'
?>


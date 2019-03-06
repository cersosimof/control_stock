<?php
require "componentes/header.php";
?>

<div>
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab" onclick="llamarCuerpo(this)">Ingresar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" onclick="llamarCuerpo(this)">Retirar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" data-toggle="tab" onclick="llamarCuerpo(this)">Consultar</a>
            </li>
        </ul>
    </div>

    <div id="cuerpo">
    <form>
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label" id="labelClave">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="aBuscar">
                <h6 id="noRecuerdaCodigo">No recuerda el codigo?</h6>
                <div id="mensajes">
                    <div id="mensaje"></div>
                    <div id="segundoMensaje"></div>
                    <div id="tercerMensaje"></div>
                </div>
                </div>
            </div>
            <div class="form-group row" id="divCantidad">
                <label for="idCantidad" class="col-sm-2 col-form-label" id="labelCantidad">Cantidad a Ingresar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idCantidad">
                </div>
            </div>

            <div id="lugarBoton">
                <button class="btn btn-success" id="botonSubmit">Ingresar</button>
            </div>

        </form>
    </div>

</div>

<?php
require 'componentes/footer.php'
?>
<script src="javascripts/script.js"></script>




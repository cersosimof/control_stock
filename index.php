

<?php
require "componentes/header.php";
?>

<div style="margin-top: 4%">
    <div>
    <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#" role="tab" data-toggle="tab" id='botonIngresar'>Ingresar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" role="tab" data-toggle="tab" id='botonRetirar'>Retirar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" role="tab" data-toggle="tab" id='botonConsultar'>Consultar</a>
  </li>
</ul>
    </div>

    <form >
        <div id="cuerpo">
            <label for="aBuscar">Que buscar</label>
            <input type="text" id="aBuscar">
            <h6 id="noRecuerdaCodigo">No recuerda el codigo?</h6>

            <div id="mensajes">
                <div id="mensaje"></div>
                <div id="segundoMensaje"></div>
                <div id="tercerMensaje"></div>
            </div>

            <div id="lugarBoton">
                <button>Aceptar</button>
            </div>
        </div>
    </form>
</div>

<?php
require 'componentes/footer.php'
?>

<script>

// ############################################################
// #################   BUSCADOR DE CATEGORIA   ################
// ############################################################

// CREA PRIMER SELECT
document.querySelector("#noRecuerdaCodigo").addEventListener("click", (e) => {
    document.querySelector("#noRecuerdaCodigo").innerHTML = "";
    e.preventDefault();
    var resAjax = modeloAJAX('ajax/primerSelect.php', "", '#mensaje');
} )

// CREA SEGUNDO SELECT
function enviarPrimerForm(e) {
    select = document.getElementById("primerSelect");
    resultadoPrimerSelect = select.options[select.selectedIndex].innerText;
    var resAjax = modeloAJAX('ajax/segundoSelect.php', {'resultadoPrimerSelect' : resultadoPrimerSelect}, '#segundoMensaje');
}

// CREA TERCER SELECT
function enviarSegundoForm(e) {
    select2 = document.getElementById("segundoSelect");
    resultadoSegundoSelect = select2.options[select2.selectedIndex].innerText;
    var resAjax = modeloAJAX('ajax/tercerSelect.php', { 'resultadoPrimerSelect' : resultadoPrimerSelect, 'resultadoSegundoSelect' : resultadoSegundoSelect }, '#tercerMensaje');
}

function informaClave() {
    select3 = document.getElementById("tercerSelect");
    resultadoTercerSelect = select3.options[select3.selectedIndex].innerText;
    $.ajax({
        type: 'POST',
        url: 'ajax/cuartoSelect.php',
        data: { 'resultadoPrimerSelect' : resultadoPrimerSelect, 'resultadoSegundoSelect' : resultadoSegundoSelect, 'resultadoTercerSelect' : resultadoTercerSelect },
        success: function(data){
            document.querySelector("#aBuscar").value = data;
        }
    })
}

// FUNCION QUE RESUME AJAX
function modeloAJAX(url, data, donde){
        $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success:function(res){
            document.querySelector(donde).innerHTML = res;
        }
    })
}
</script>



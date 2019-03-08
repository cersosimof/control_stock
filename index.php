<?php
require "componentes/header.php";
?>

<div class="row">
    <div class="col-10">
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

        <div id="cuerpo">

        </div>
    </div>
    <div class="col-2 cuadroDerecha">
        <p>Alerta</p>
    </div>
</div>


<?php
require 'componentes/footer.php'
?>

<script>
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

function loadScript (fileurl) {
    let script = document.createElement('script');
    script.src = fileurl;
    document.body.append(script);
  }

modeloAJAX("ajax/contenido_solapas/ingresar.php", "", "#cuerpo");
loadScript('javascripts/script.js');
loadScript('javascripts/ingresar_script.js');
</script>





<?php
require 'componentes/header.php';
require 'vistas/iom_body.php';
require 'componentes/footer.php';
?>

<script src='javascripts/script_opciones.js'></script>
<script src='javascripts/script_acciones.js'></script>




































<!-- <script>

var botonSubmitIngresar = document.querySelector("#bsi")
var botonSubmitEntregar = document.querySelector("#bse")

//INGRESAR
botonSubmitIngresar.addEventListener("click", (e) => {
    e.preventDefault();
    aBuscar = document.querySelector("#_ingresar").value;
    cantidad = document.querySelector("#cantidad_ingresar").value;
    console.log('apretaste el boton enviar');
    $.ajax({
        type: 'POST',
        url: "ajax/ajax_acciones/ingresar.php",
        data: {'aBuscar' : aBuscar, 'cantidad' : cantidad },
        success:function(res){
            document.querySelector("#lugarModal").innerHTML = res;
            $('#exampleModal').modal('show')
        }
    })
})

//ENTREGAR
botonSubmitEntregar.addEventListener("click", (e) => {
    e.preventDefault();
    var aBuscar = document.querySelector("#_entregar").value;
    var cantidad = document.querySelector("#cantidad_entregar").value;
    // var destino = document.querySelector("#idDestino").value;

    $.ajax({
        type: 'POST',
        url: "ajax/ajax_acciones/retirar.php",
        data: {'aBuscar' : aBuscar, 'cantidad' : cantidad },
        success:function(res){
            document.querySelector("#lugarModal").innerHTML = res;
            $('#exampleModal').modal('show')
        }
    })

})

function postBoton() {
    location.href = "/";
}

</script> -->



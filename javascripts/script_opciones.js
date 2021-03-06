/* 
Creador de los Select para busqueda de categoria 
*/

function abrirForm(indicador) {
        document.querySelector("#noRecuerdaCodigo"+indicador).innerHTML = "";
        modeloAJAX('ajax/buscar_articulo/primerSelect.php', {'indicador' : indicador }, '#mensaje'+indicador);
}
function enviarPrimerForm(indicador) {
    select = document.getElementById("primerSelect");
    resultadoPrimerSelect = select.options[select.selectedIndex].innerText;
    modeloAJAX('ajax/buscar_articulo/segundoSelect.php', {'indicador' : indicador, 'resultadoPrimerSelect' : resultadoPrimerSelect}, '#segundoMensaje'+indicador);
}
function enviarSegundoForm(indicador) {
    select2 = document.getElementById("segundoSelect");
    resultadoSegundoSelect = select2.options[select2.selectedIndex].innerText;
     modeloAJAX('ajax/buscar_articulo/tercerSelect.php', { 'indicador' : indicador, 'resultadoPrimerSelect' : resultadoPrimerSelect, 'resultadoSegundoSelect' : resultadoSegundoSelect }, '#tercerMensaje'+indicador);
}
function informaClave(indicador) {
    select3 = document.getElementById("tercerSelect");
    resultadoTercerSelect = select3.options[select3.selectedIndex].innerText;
    $.ajax({
        type: 'POST',
        url: 'ajax/buscar_articulo/cuartoSelect.php',
        data: { 'resultadoPrimerSelect' : resultadoPrimerSelect, 'resultadoSegundoSelect' : resultadoSegundoSelect, 'resultadoTercerSelect' : resultadoTercerSelect },
        success: function(data){
                document.querySelector("#"+indicador).value = data;
                document.querySelector("#mensajes"+indicador).innerHTML = "";
                var id = data;
                transformar(indicador);
        }
    })
}

function movimientos(a)
{
    $.ajax({
        type: 'POST',
        url: 'ajax/ajax_acciones/consultar.php',
        data: { 'id' : a },
        success: function(data){
            document.querySelector("#mensajes_consultar").innerHTML = data;
        }
    })
    
}

/*
Funcion para personalizar el estilo 
una vez cargado el valor
*/

function transformar(accion) //_algo
{
    var valor = document.querySelector("#"+accion).value;
    if(valor != "")

    {
        $.ajax({
            type: 'POST',
            url: 'ajax/funcionTransformar.php',
            data: { 'idEmpresa' : valor },
            success: function(data){

            document.querySelector("#info"+accion).innerHTML = data; //todo el html de los forms readonly O ALERTA!
            }
        })
    }
    if(accion == "_consultar" &&    )
    {
        document.querySelector("#noRecuerdaCodigo"+accion).innerHTML = "<div onclick='movimientos("+valor+")' id='masInfo'>+ Info</div>";

    }
}


// FUNCION QUE RESUME AJAX
function modeloAJAX(url, data, donde){
    document.querySelector(donde).innerHTML = '' +
    '<div class="spinner-border" role="status">' +
    '<span class="sr-only">Loading...</span></div>'  

        $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success:function(res){
            document.querySelector(donde).innerHTML = res;
        }
    })
}

// function loadScript (fileurl) {
//     let script = document.createElement('script');
//     script.src = fileurl;
//     document.body.append(script);
//   }


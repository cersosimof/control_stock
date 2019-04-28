

/* Creador de los Select para busqueda de categoria */
function abrirForm(indicador) {
        document.querySelector("#noRecuerdaCodigo").innerHTML = "";
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
                transformar(indicador);
        }
    })
}

/*
Funcion para personalizar el estilo 
una vez cargado el valor
*/

function transformar(accion)
{
    var valor = document.querySelector("#"+accion).value;
    if(valor != "")
    {
        $.ajax({
            type: 'POST',
            url: 'ajax/funcionTransformar.php',
            data: { 'idEmpresa' : valor },
            success: function(data){
                console.log(data);
                document.querySelector("#info"+accion).innerHTML = data;
            }
        })
    }
    else
    {
        console.log("El campo estaba vacio");
    }

//    alert("Bienvenido a la funcion transformar")
}


// FUNCION QUE RESUME AJAX
function modeloAJAX(url, data, donde){
    document.querySelector(donde).innerHTML = 
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


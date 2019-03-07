function llamarCuerpo(obj) {
    if(obj.innerHTML == "Ingresar") {
        modeloAJAX("ajax/contenido_solapas/ingresar.php", "", "#cuerpo");
        loadScript('javascripts/ingresar_script.js');
    }
    if (obj.innerHTML == "Retirar") {
        modeloAJAX("ajax/contenido_solapas/retirar.php", "", "#cuerpo");
    }
    if(obj.innerHTML == "Consultar") {
        modeloAJAX("ajax/contenido_solapas/consultar.php", "", "#cuerpo");
    }
    loadScript('javascripts/script.js');
}

// ############################################################
// #################   BUSCADOR DE CATEGORIA   ################
// ############################################################

// CREA PRIMER SELECT
document.querySelector("#noRecuerdaCodigo").addEventListener("click", () => {
    document.querySelector("#noRecuerdaCodigo").innerHTML = "";
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

// INFORMA LA CLAVE
function informaClave() {
    select3 = document.getElementById("tercerSelect");
    resultadoTercerSelect = select3.options[select3.selectedIndex].innerText;
    $.ajax({
        type: 'POST',
        url: 'ajax/cuartoSelect.php',
        data: { 'resultadoPrimerSelect' : resultadoPrimerSelect, 'resultadoSegundoSelect' : resultadoSegundoSelect, 'resultadoTercerSelect' : resultadoTercerSelect },
        success: function(data){
            document.querySelector("#aBuscar").value = data;
            document.querySelector("#mensajes").innerHTML = "";
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

function loadScript (fileurl) {
    let script = document.createElement('script');
    script.src = fileurl;
    document.body.append(script);
  }

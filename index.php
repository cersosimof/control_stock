<html>

<head>
<title> CONTROL DE STOCK </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="../../control_stock/CSS/style.css"> -->
<link rel="stylesheet" href="CSS/style.css">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Inventario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/vistas/alta.php">Alta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vistas/baja.php">Baja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vistas/modif.php">Modificar</a>
            </li>
        </ul>
        </div>
    </nav>
</header>

<main role="main">

<div class="container marketing">
<hr style="margin-top: 6%" class="featurette-divider">

<div class="bd-example bd-example-tabs">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ingresar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Entregar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Consultar</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade  active show" id="home" role="tabpanel" aria-labelledby="home-tab">

    <!-- INGRESAR -->
    <div id="cuerpo">
        <form>
            <div id="info_ingresar"></div>
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label" id="labelClave">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="_ingresar" onblur="transformar('_ingresar')">
                <h6 id="noRecuerdaCodigo" onclick='abrirForm("_ingresar")'>No recuerda el codigo?</h6>
                
                <div id="mensajes_ingresar">
                    <div id="mensaje_ingresar"></div>
                    <div id="segundoMensaje_ingresar"></div>
                    <div id="tercerMensaje_ingresar"></div>
                </div>

                </div>
            </div>
            <div class="form-group row" id="divCantidad">
                <label for="idCantidad" class="col-sm-2 col-form-label" id="labelCantidad">Cantidad a Ingresar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad_ingresar">
                </div>
            </div>

            <div id="lugarBoton">
                <button class="btn btn-success" id="bsi">Ingresar</button>
            </div>
        </form>
    </div>
    <!-- INGRESAR -->

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <!-- ENTREGAR -->
    <div id="cuerpo">
        <form>
            <div id="info_entregar"></div>
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="_entregar" onblur="transformar('_entregar')">

                <h6 id="noRecuerdaCodigo" onclick='abrirForm("_entregar")'>No recuerda el codigo?</h6>

                    <div id="mensajes_entregar">
                        <div id="mensaje_entregar"></div>
                        <div id="segundoMensaje_entregar"></div>
                        <div id="tercerMensaje_entregar"></div>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="idCantidad" class="col-sm-2 col-form-label">Cantidad a retirar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cantidad_entregar">
                </div>
            </div>
            <div class="form-group row">
                <label for="idDestino" class="col-sm-2 col-form-label">Destinatario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idDestino">
                </div>
            </div>       
            <div id="lugarBoton">
                <button class="btn btn-danger" id="bse">Entregar</button>
            </div>
        </form>
    </div>
    <!-- ENTREGAR -->

    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <!-- CONSULTAR -->
    <div id="cuerpo">
        <div id="info_consultar"></div>
        <form>
        <input type="hidden" id="selector" value="consultar">
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label" id="labelClave">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="_consultar" onblur="transformar('_consultar')">
                <h6 id="noRecuerdaCodigo" onclick='abrirForm("_consultar")'>No recuerda el codigo?</h6>

                
                <div id="mensajes_consultar">
                    <div id="mensaje_consultar"></div>
                    <div id="segundoMensaje_consultar"></div>
                    <div id="tercerMensaje_consultar"></div>
                </div>
                </div>
            </div>
            <!-- <div id="lugarBoton">
                <button class="btn btn-success" id="botonSubmit">Consultar Stock</button>
            </div> -->
        </form>
    </div>
    <!-- CONSULTAR -->

    </div>
  </div>
</div>

<div id="lugarModal"></div>


</div>

<hr class="featurette-divider">

<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2019 ChersoFM.     <!-- <a href="#">Privacy</a> · <a href="#">Terms</a> --> </p>
</footer>

</main>
<script src="javascripts/jquery.js"></script> 
<!-- <script src="../../control_stock/javascripts/jquery.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

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



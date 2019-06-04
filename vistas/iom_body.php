
<div class="bd-example bd-example-tabs">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active show" id="ingresar-tab" data-toggle="tab" href="#ingresar" role="tab" aria-controls="ingresar" aria-selected="true">Ingresar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="entregar-tab" data-toggle="tab" href="#entregar" role="tab" aria-controls="entregar" aria-selected="false">Entregar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Consultar</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade  active show" id="ingresar" role="tabpanel" aria-labelledby="ingresar-tab">

    <!-- INGRESAR -->
    <div id="cuerpo">
        <form>
            <div id="info_ingresar"></div>
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label" id="labelClave">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="_ingresar" onblur="transformar('_ingresar')">
                <h6 id="noRecuerdaCodigo_ingresar" onclick='abrirForm("_ingresar")'>No recuerda el codigo?</h6>
                
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
    <div class="tab-pane fade" id="entregar" role="tabpanel" aria-labelledby="entregar-tab">

    <!-- ENTREGAR -->
    <div id="cuerpo">
        <form>
            <div id="info_entregar"></div>
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label">Codigo del Articulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="_entregar" onblur="transformar('_entregar')">

                <h6 id="noRecuerdaCodigo_entregar" onclick='abrirForm("_entregar")'>No recuerda el codigo?</h6>

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

    <div class="tab-pane fade" id="consultar" role="tabpanel" aria-labelledby="consultar-tab">
    <!-- CONSULTAR -->
    <div id="cuerpo">
        <div id="info_consultar">
        </div>
        <form>
            <input type="hidden" id="selector" value="consultar">
            <div class="form-group row">
                <label for="aBuscar" class="col-sm-2 col-form-label" id="labelClave">Codigo del Articulo</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="_consultar"> -->
                    <input type="text" class="form-control" id="_consultar" onblur="transformar('_consultar')">
                    <h6 id="noRecuerdaCodigo_consultar" onclick='abrirForm("_consultar")'>No recuerda el codigo?</h6>
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

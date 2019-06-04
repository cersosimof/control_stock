<?php

require '../componentes/header.php';

?>


<form action='?enviando=1' method='POST' class="needs-validation" novalidate>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="idCat">Categoria</label>
      <input type="text" name="categoria" class="form-control" id="idCat" placeholder="Memoria RAM" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="idMarca">Marca</label>
      <input type="text" name="marca"  class="form-control" id="idMarca" placeholder="Kingston" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="idMod">Modelo</label>
      <div class="input-group">
        <input type="text" name="modelo" class="form-control" id="idMod" placeholder="8 GB" required>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="idNotas">Notas:</label>
      <input type="text" name="notas" class="form-control" id="idNotas" placeholder="Estado nuevo - caja en mal estado" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="idStock">Stock Inicial</label>
      <input type="text" name="stockInicial" class="form-control" id="idStock" placeholder="500" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="idAlerta">Alerta</label>
      <input type="text" name="alerta" class="form-control" id="idAlerta" placeholder="15" required>
    </div>
  </div>
  <button class="btn btn-primary" id="btnSubmit" type="submit">Dar ingreso!</button>
</form>

</form>

<?php require "../componentes/footer.php"; ?>

<script>


var btnSubmit = document.querySelector("#btnSubmit");

btnSubmit.addEventListener("click", (e) => {
  e.preventDefault();
  var categoria = document.querySelector("#idCat").value;
  var marca = document.querySelector("#idMarca").value;
  var modelo = document.querySelector("#idMod").value;
  var notas = document.querySelector("#idNotas").value;
  var stock = document.querySelector("#idStock").value;
  var alerta = document.querySelector("#idAlerta").value;

    $.ajax({
    type: 'POST',
    url: '../ajax/agregarArticulo.php',
    data:{
      'categoria': categoria,
      'marca': marca,
      'modelo': modelo,
      'notas': notas,
      'stock': stock,
      'alerta': alerta,
      },
    success: function(data){
      if(data == 1) {
        alert("El articulo se dio de alta correctamtente"),
        window.location.href = "../";
      } else {
        alert("hubo un problema, reintente :(")
      }
      }
    })


})

</script>


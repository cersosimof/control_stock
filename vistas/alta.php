<html>

<head>
<title> CONTROL DE STOCK </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="../../control_stock/CSS/style.css"> -->
<link rel="stylesheet" href="../../CSS/style.css">
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
                <!-- <a class="nav-link" href="/control_stock/vistas/alta.php">Alta</a> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vistas/baja.php">Baja</a>
                <!-- <a class="nav-link" href="/control_stock/vistas/baja.php">Baja</a> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vistas/modif.php">Modificar</a>
                <!-- <a class="nav-link" href="/control_stock/vistas/modif.php">Modificar</a> -->
            </li>
        </ul>
        </div>
    </nav>
</header>

<main role="main">

<div class="container marketing">
<hr style="margin-top: 6%" class="featurette-divider">

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


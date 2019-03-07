var aBuscar = document.querySelector("#aBuscar").value;
var cantidad = document.querySelector("#idCantidad").value;
var botonSubmit = document.querySelector("#botonSubmit")

botonSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: "ajax/ajax_acciones/ingresar.php",
        data: {},
        success:function(res){
            console.log(res)
        }
    })
})

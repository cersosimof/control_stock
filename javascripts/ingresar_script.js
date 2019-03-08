
var botonSubmit = document.querySelector("#botonSubmit")

botonSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    var aBuscar = document.querySelector("#aBuscar").value;
    var cantidad = document.querySelector("#idCantidad").value;

    $.ajax({
        type: 'POST',
        url: "ajax/ajax_acciones/ingresar.php",
        data: {'aBuscar' : aBuscar, 'cantidad' : cantidad },
        success:function(res){
            console.log(res)
        }
    })
})

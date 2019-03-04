<?php

require '../ConnectDb.php';

class Articulo {

    // PROPIEDADES
    private $categoria;
    private $marca;
    private $modelo;
    private $notas;
    private $stockInicial;
    private $alerta;
 
    public function __construct(){
        $this->categoria=$_POST["categoria"];
        $this->marca=$_POST["marca"];
        $this->modelo=$_POST["modelo"];
        $this->notas=$_POST["notas"];
        $this->stockInicial=$_POST["stockInicial"];
        $this->alerta=$_POST["alerta"];
    }

    function altaArticulo($categoria, $marca, $modelo, $notas, $stockInicial, $alerta){
        $sql = "INSERT INTO articulos (id_articulo, categoria, marca, modelo, notas, stockInicial, alerta) VALUES (NULL, '$categoria', '$marca', '$modelo', '$notas', '$stockInicial', '$alerta')";
        $instance = ConnectDb::getInstance();
        $conn = $instance->ExecuteQuery($sql);
            if($conn == 1) {
                return 1;
            }
    }

    // METODOS
    // function aumentarCantidad {

    // }

    // function reducirCantidad {

    // }

    // function establecerStock {

    // }

    // function modificarUltimoRetiro {

    // }

    // function modificarUltimoIncremento {

    // }

}
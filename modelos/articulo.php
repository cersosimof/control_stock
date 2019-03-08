<?php


class Articulo {

    // PROPIEDADES
    private $id_articulo;
    private $categoria;
    private $marca;
    private $modelo;
    private $notas;
    private $stockInicial;
    private $alerta;
    private $cantidad;

    public function __construct(){
        // $this->categoria=$_POST["categoria"];
        // $this->marca=$_POST["marca"];
        // $this->modelo=$_POST["modelo"];
        // $this->notas=$_POST["notas"];
        // $this->stockInicial=$_POST["stockInicial"];
        // $this->alerta=$_POST["alerta"];
    }

    function altaArticulo($categoria, $marca, $modelo, $notas, $stockInicial, $alerta){
        require '../ConnectDb.php';
        $sql = "INSERT INTO articulos (id_articulo, categoria, marca, modelo, notas, stockInicial, alerta) VALUES (NULL, '$categoria', '$marca', '$modelo', '$notas', '$stockInicial', '$alerta')";
        $instance = ConnectDb::getInstance();
        $conn = $instance->ExecuteQuery($sql);
            if($conn == 1) {
                return 1;
            }
    }

    // METODOS
    function aumentarCantidad($id_articulo, $cantidad) {
        require '../../ConnectDb.php';
        $instance = ConnectDb::getInstance();

        $sql = "SELECT stockInicial FROM articulos WHERE id_articulo = '$id_articulo' ";
        $conn = $instance->ExecuteQuery($sql);

        $row = $conn->fetch_assoc();
        $nuevoStock = $row['stockInicial'] + $cantidad;

        $sql2 = "UPDATE articulos SET stockInicial = '$nuevoStock' WHERE id_articulo = '$id_articulo'";
        $conn2 = $instance->ExecuteQuery($sql2);
        
        if($conn2 == 1) {
            $sql3 = "SELECT stockInicial FROM articulos WHERE id_articulo = '$id_articulo' ";
            $conn3 = $instance->ExecuteQuery($sql3);
    
            $row3 = $conn3->fetch_assoc();
            $nuevoStock3 = $row3['stockInicial'];
            return $nuevoStock3;
        }

    }

    // function reducirCantidad {

    // }

    // function establecerStock {

    // }

    // function modificarUltimoRetiro {

    // }

    // function modificarUltimoIncremento {

    // }

}
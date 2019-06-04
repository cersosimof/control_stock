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
    private $destino;

    public function __construct(){
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

    function aumentarCantidad($id_articulo, $cantidad) {
        $nuevoStock = $this->consultarStock($id_articulo) + $cantidad;
        $update = $this->updateStock($nuevoStock, $id_articulo);
        $this->registro($id_articulo, 'i', $cantidad, 'PS');
        if($update == 1) 
        {
            return $nuevoStock;
        }
    }

    
    function reducirCantidad($id_articulo, $cantidad, $destino) 
    {
        $stockActual = $this->consultarStock($id_articulo);
        $this->registro($id_articulo, 'r', $cantidad, $destino);
        if($stockActual < $cantidad) 
        {
            return "supera";
        } 
        else 
        {
            $stockActual = $stockActual - $cantidad;
            $update = $this->updateStock($stockActual, $id_articulo);
            if($update == 1) 
            {
                return $stockActual;
            }
        }
    }

    
    private function consultarStock($art)
    {
        require_once '../../ConnectDb.php';
        $instance = ConnectDb::getInstance();
        $sql = "SELECT stockInicial FROM articulos WHERE id_articulo = '$art' ";
        $conn = $instance->ExecuteQuery($sql);
        $stock = $conn->fetch_assoc();
        $stock = $stock['stockInicial'];
        return $stock;
    }

    private function updateStock($nuevoStock, $art)
    {
        require_once '../../ConnectDb.php';
        $instance = ConnectDb::getInstance();
        $update = "UPDATE articulos SET stockInicial = '$nuevoStock' WHERE id_articulo = '$art'";
        $conn2 = $instance->ExecuteQuery($update);
        return $conn2;
    }

    private function registro($id_articulo, $accion, $cantidad, $usuario)
    {
        require_once '../../ConnectDb.php';
        $instance = ConnectDb::getInstance();
        $fecha = date("H:i:s");
        $query = "INSERT INTO `movimientos` (`id_trans`, `id_articulo`, `accion`, `fecha`, `cantidad`, `usuario`) VALUES (NULL, '$id_articulo', '$accion', '$fecha', '$cantidad', '$usuario');";
        $result = $instance->ExecuteQuery($query);
        echo $result;
    }
}

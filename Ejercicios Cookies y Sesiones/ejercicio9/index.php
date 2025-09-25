<?php
//Sesion si no existe
if (!isset($_SESSION)){
    session_start();
}

//Cesta si no existe
if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
}


// Productos
$productos = [
    "p1" => ["Nombre" => "Logitech K120", "Descripción" => "Teclado multimedia USB plug&play, trabPoint Caps (10px, Soft Dome)", "Precio" => 25.99],
    "p2" => ["Nombre" => "Razer DeathAdder V2", "Descripción" => "Ratón gaming ergonómico con sensor óptico de alta precisión", "Precio" => 59.99],
    "p3" => ["Nombre" => "Corsair K95 RGB", "Descripción" => "Teclado mecánico con retroiluminación RGB y teclas programables", "Precio" => 199.99],
    "p4" => ["Nombre" => "Logitech MX Master 3", "Descripción" => "Ratón inalámbrico avanzado para productividad con rueda de desplazamiento MagSpeed", "Precio" => 99.99],
    "p5" => ["Nombre" => "HyperX Cloud II", "Descripción" => "Auriculares gaming con sonido envolvente 7.1 y micrófono desmontable", "Precio" => 89.99],
    "p6" => ["Nombre" => "Samsung T7 Portable SSD", "Descripción" => "Disco sólido externo portátil, USB 3.2, hasta 1TB de almacenamiento", "Precio" => 129.99]
];

// Acciones 
if (isset($_GET["accion"])) {
    switch ($_GET["accion"]) {
        case "añadir":
            if (isset($_GET["producto"]) && isset($productos[$_GET["producto"]])) {
                array_push($_SESSION["cesta"], $_GET["producto"]);
            }
            break;

        case "detalles":
            $productoDetalle = $_GET["producto"];
            $valoresProducto = verDetalles($productoDetalle, $productos);
            require 'valores.view.php'; // SOLO se carga la vista de detalle
            exit; // Importantísimo: no cargar index.view.php
            break;

        case "vaciar":
            $_SESSION["cesta"] = [];
            break;
    }
}

// Elementos producto en cesta
function cargarCesta($productos) {
    $cestaCompleta = [];
    if (!empty($_SESSION["cesta"])) {
        foreach ($_SESSION["cesta"] as $productoID) {
            if (isset($productos[$productoID])) {
                $cestaCompleta[] = $productos[$productoID];
            }
        }
    }
    return $cestaCompleta;
}

// Variable para HTML
$productosSeleccionados = cargarCesta($productos);



//Detalles producto
function verDetalles($productoDetalle, $productos){
    //Hay que utilizar key para cada "id"!
    foreach ($productos as $key => $producto){
        if ($key === $productoDetalle){
            $descripcionProducto = $producto["Descripción"];
            $nombreProducto = $producto["Nombre"];
            $valoresProducto = [$nombreProducto, $descripcionProducto];
            return $valoresProducto;
        }
    }
    return null; // por si no existe
}


function mostrarValores($valoresProducto){
    require 'valores.view.php';
}



include "index.view.php";
?>
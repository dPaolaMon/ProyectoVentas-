<?php
require "conexion.php";
require "controllers/ProductoController.php";

$controller = new ProductoController($pdo);

$accion = $_GET['accion'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($accion) {

    case 'crear':
        $controller->crear();
        break;
    
    case 'guardar':
        $controller->guardar();
        break;

    case 'editar':
        $controller->editar($id);
        break;

    case 'actualizar':
        $controller->actualizar();
        break;

    case 'eliminar':
        $controller->eliminar($id);
        break;

    default:
        $controller->index();
}

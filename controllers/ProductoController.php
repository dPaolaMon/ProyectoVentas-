<?php
require "models/ProductoModel.php";

class ProductoController {

    private $model;

    public function __construct($pdo) {
        $this->model = new ProductoModel($pdo);
    }

    public function index() {
        $productos = $this->model->obtenerTodos();
        include "views/header.php";
        include "views/productos/lista.php";
        include "views/footer.php";
    }

    public function crear() {
        include "views/header.php";
        include "views/productos/crear.php";
        include "views/footer.php";
    }

    public function guardar() {
        $this->model->insertar($_POST);
        header("Location: index.php");
    }

    public function editar($id) {
        $producto = $this->model->obtenerPorId($id);
        include "views/header.php";
        include "views/productos/editar.php";
        include "views/footer.php";
    }

    public function actualizar() {
        $this->model->actualizar($_POST);
        header("Location: index.php");
    }

    public function eliminar($id) {
        $this->model->eliminar($id);
        header("Location: index.php");
    }
}
 

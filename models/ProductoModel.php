 
<?php

class ProductoModel {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // READ (listar)
    public function obtenerTodos() {
        $sql = "SELECT * FROM productos ORDER BY id_producto DESC";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE
    public function insertar($data) {
        $sql = "INSERT INTO productos (nombre, precio_venta, precio_compra, categoria, inventario)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['nombre'],
            $data['precio_venta'],
            $data['precio_compra'],
            $data['categoria'],
            $data['inventario']
        ]);
    }

    // Obtener un registro
    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE id_producto = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function actualizar($data) {
        $sql = "UPDATE productos SET nombre=?, precio_venta=?, precio_compra=?, categoria=?, inventario=? 
                WHERE id_producto=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['nombre'],
            $data['precio_venta'],
            $data['precio_compra'],
            $data['categoria'],
            $data['inventario'],
            $data['id_producto']
        ]);
    }

    // DELETE
    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id_producto = ?");
        return $stmt->execute([$id]);
    }
}

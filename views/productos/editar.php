<form action="index.php?accion=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $producto['id_producto'] ?>">

    Nombre: <input type="text" name="nombre" value="<?= $producto['nombre'] ?>"><br>
    PV: <input type="number" step="0.01" name="precio_venta" value="<?= $producto['precio_venta'] ?>"><br>
    PC: <input type="number" step="0.01" name="precio_compra" value="<?= $producto['precio_compra'] ?>"><br>
    Categoria: <input type="text" name="categoria" value="<?= $producto['categoria'] ?>"><br>
    Inventario: <input type="number" name="inventario" value="<?= $producto['inventario'] ?>"><br>

    <button type="submit">Actualizar</button>
</form>
 

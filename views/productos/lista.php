<a href="index.php?accion=crear">Crear nuevo producto</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>PV</th>
        <th>PC</th>
        <th>Categoria</th>
        <th>Inventario</th>
        <th>Opciones</th>
    </tr>

    <?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p['id_producto'] ?></td>
        <td><?= $p['nombre'] ?></td>
        <td><?= $p['precio_venta'] ?></td>
        <td><?= $p['precio_compra'] ?></td>
        <td><?= $p['categoria'] ?></td>
        <td><?= $p['inventario'] ?></td>
        <td>
            <a href="index.php?accion=editar&id=<?= $p['id_producto'] ?>">Editar</a> |
            <a href="index.php?accion=eliminar&id=<?= $p['id_producto'] ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
 

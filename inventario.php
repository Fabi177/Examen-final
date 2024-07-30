<?php
include 'conexion.php';

$sql = "SELECT productos.nombre_producto, productos.precio, productos.cantidad, categorias.nombre_categoria, productos.id_producto 
        FROM productos 
        JOIN categorias ON productos.id_categoria = categorias.id_categoria";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="styles.css">
    .btn-group {
    margin: 20px 0;
    text-align: center; /* Centrar los botones */
}

.btn-group a {
    display: inline-block;
    text-decoration: none;
    background: #ffffff; /* Fondo blanco para un estilo más limpio */
    color: #333; /* Color de texto oscuro para contraste */
    padding: 12px 24px;
    border: 2px solid #ddd; /* Borde sutil */
    border-radius: 8px; /* Bordes redondeados más suaves */
    margin: 5px;
    font-weight: normal;
    font-size: 1em;
    transition: all 0.3s ease; /* Transiciones suaves */
}

.btn-group a:hover {
    background: #f0f0f0; /* Fondo ligeramente gris para hover */
    color: #000; /* Color de texto oscuro en hover */
    border-color: #bbb; /* Borde más oscuro en hover */
}

.btn-group a.add {
    border-color: #4caf50; /* Borde verde */
    color: #4caf50; /* Texto verde */
}

.btn-group a.add:hover {
    background: #d4edda; /* Fondo verde claro en hover */
}

.btn-group a.modify {
    border-color: #2196f3; /* Borde azul */
    color: #2196f3; /* Texto azul */
}

.btn-group a.modify:hover {
    background: #d1e3f9; /* Fondo azul claro en hover */
}

.btn-group a.delete {
    border-color: #f44336; /* Borde rojo */
    color: #f44336; /* Texto rojo */
}

.btn-group a.delete:hover {
    background: #f8d7da; /* Fondo rojo claro en hover */
}

</head>
<body>
    <div class="container">
        <h1>Inventario de Productos</h1>
        <div class="btn-group">
            <a href="Alta1.php" class="add">Agregar Producto</a>
        </div>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['nombre_producto']}</td>
                            <td>{$row['precio']}</td>
                            <td>{$row['cantidad']}</td>
                            <td>{$row['nombre_categoria']}</td>
                            <td>
                                <a href='Modificacion.php?id={$row['id_producto']}' class='modify'>Modificar</a>
                                <a href='Baja.php?id={$row['id_producto']}' class='delete' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este producto?\")'>Eliminar</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>

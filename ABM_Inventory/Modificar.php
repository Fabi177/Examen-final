

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Modificar Producto</title>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #e3f2fd; /* Fondo azul claro */
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

h1 {
    text-align: center;
    color: #333;
    font-size: 2em;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 5px;
}

input[type="text"], input[type="number"], select {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 1em;
    box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
}

input[type="text"]:focus, input[type="number"]:focus, select:focus {
    border-color: #4caf50; /* Borde verde al enfocar */
    outline: none; /* Elimina el borde azul por defecto */
}

input[type="submit"] {
    background-color: #4caf50; /* Verde vibrante */
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1em;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #388e3c; /* Verde más oscuro al pasar el ratón */
}

</head>
<body>
    <div class="container">
        <h1>Modificar Producto</h1>
        
        <?php if (!$datos): ?>
            <p>Producto no encontrado.</p>
        <?php else: ?>
            <form method="post" action="modificar_producto.php">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" value="<?= $datos['nombre_producto'] ?>" required>

                <label for="precio">Precio:</label>
                <input type="number" step="0.01" id="precio" name="precio" value="<?= $datos['precio'] ?>" required>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" value="<?= $datos['cantidad'] ?>" required>

                <label for="id_categoria">Categoría:</label>
                <select id="id_categoria" name="id_categoria" required>
                    <?php while($row = mysqli_fetch_assoc($result_categorias)): ?>
                        <option value="<?= $row['id_categoria'] ?>" <?= $row['id_categoria'] == $datos['id_categoria'] ? 'selected' : '' ?>><?= $row['nombre_categoria'] ?></option>
                    <?php endwhile; ?>
                </select>

                <input type="hidden" name="ID_producto" value="<?= $datos['id_producto'] ?>">
                <input type="submit" value="Guardar Cambios">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>

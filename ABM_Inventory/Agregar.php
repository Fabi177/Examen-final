<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <style>
       body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f7f9fc; 
    margin: 0;
    padding: 0;
}

form {
    background-color: #ffffff; 
    width: 60%;
    margin: 40px auto; 
    padding: 25px;
    border-radius: 12px; 
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
    border: 1px solid #e1e1e1; 
}

fieldset {
    border: none;
    padding: 0;
}

legend {
    font-size: 1.6em;
    margin-bottom: 20px;
    text-align: center;
    color: #333; 
}

label {
    display: block;
    font-size: 1.1em;
    color: #555; 
    margin-bottom: 5px;
}

input[type="text"], input[type="number"], select {
    width: calc(100% - 16px); 
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1em;
    box-sizing: border-box; 
}

input[type="text"]:focus, input[type="number"]:focus, select:focus {
    border-color: #007bff; 
    outline: none; 
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3; 
}

    </style>
</head>
<body>
    <header>
        <center>
            <h1 class="titulo">Agregar Producto</h1>
        </center>
    </header>
    <form name="nombre_producto" action="agregar.php" method="POST" autocomplete="on">
        <fieldset>
            <legend>Producto</legend>
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre del Producto" required>
            
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" placeholder="Ingresar Precio" required>
            
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="Ingresar Cantidad" required>
            
            <label for="id_categoria">Categoría:</label>
            
            
            <input value="Agregar Producto" type="submit">
        </fieldset>
    </form>
</body>
</html>
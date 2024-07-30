<?php
include 'conexion.php';

if ($_POST) {
    $nombre_producto = $_POST['nombre_producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $id_categoria = $_POST['id_categoria'];

    echo "El nombre del producto es: " . $nombre_producto . "<br>";
    echo "El precio es: " . $precio . "<br>";
    echo "La cantidad es: " . $cantidad . "<br>";
    echo "La categoría es: " . $id_categoria . "<br>";

    $sql = "INSERT INTO 'productos' ('nombre_producto', 'precio', 'cantidad', 'id_categoria') VALUES ('$nombre_producto', '$precio', '$cantidad', '$id_categoria')";
    var_dump($sql);
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo producto agregado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<script>
    window.location.replace("inventario.php");
</script>


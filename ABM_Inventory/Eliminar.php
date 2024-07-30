<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id_producto=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: inventario.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<script type="text/javascript">
    window.location.replace("inventario.php");
</script>
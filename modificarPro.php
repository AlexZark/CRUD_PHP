<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreProducto"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["cantidadStock"])) {
        $id = $_POST["id"];
        $nom = $_POST["nombreProducto"];
        $des = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $cant = $_POST["cantidadStock"];
        $sql = $conexion->query("UPDATE productos SET Nombre_Producto='$nom', Descripcion='$des', Precio='$precio', Cantidad_Stock='$cant' WHERE ID_Producto=$id");
         if ($sql) {
            header("location:index.php");
         } else {
            echo "<div class='alert alert-warning'>ERROR AL ACTUALIZAR</div>";
         }
    } else {
        echo 'campos vacios';
    }
}
?>

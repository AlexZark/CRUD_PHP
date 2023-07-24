<?php
if(!empty($_POST["btnregistrar"])){
if(!empty($_POST["nombreProducto"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["cantidadStock"])){

    $Nom=$_POST["nombreProducto"];
   $Des=$_POST["descripcion"];
   $Prec=$_POST["precio"];
   $Cant=$_POST["cantidadStock"];

   $sql=$conexion->query("insert into productos(Nombre_Producto ,Descripcion, Precio , 	Cantidad_Stock )values (' $Nom','$Des',' $Prec','$Cant') ");
    if($sql==1){

        echo '<div class="alert alert-succes">Producto de Limpieza Registrado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger"> Error  al registrar el Producto de Limpieza</div>';

    }

}else{
    echo"algunos de los campos esta vacio";
}

}
?>
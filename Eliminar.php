<?php 
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from productos where ID_Producto=  $id");
   if($sql==1){
    echo '<div> Producto de Limpieza Eliminado</div>';
   }else{
    echo '<div> EROR AL ELiminar</div>';

   }
}
?>
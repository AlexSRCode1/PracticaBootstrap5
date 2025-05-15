<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];


$query="DELETE FROM `productos` WHERE IdProductos='$id'";

$res=$conexion->query($query);

if($res){
    header("location:../vistas/listaProductos.php");
}else{
    echo "no se pudo eliminar";
}

?>
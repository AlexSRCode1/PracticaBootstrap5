<?php
include('../modelos/conexion.php');

$nom= $_POST['nombre'];
$ap= $_POST['apellido'];
$ci= $_POST['ci'];
$gnro= $_POST['genero'];
$curs= $_POST['curso'];

$query="INSERT INTO estudiante( Nombre, Apellido, CI, Genero, Curso)
VALUES ('$nom','$ap','$ci','$gnro','$curs')";

$res=$conexion->query($query);

if($res){
    echo "se inserto correctamente";
}else{
    echo "no se guardo";
}

?>
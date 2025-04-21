<?php
include('../modelos/conexion.php'); // Asegúrate de que la ruta sea correcta

// Inicializar variables
// $producto = $descripcion = $fecha_ingreso = $cantidad = $costo = $codigo_barras = "";
// $mensaje = "";

// Procesar el formulario cuando se envía
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario

    $cli = $_POST['idClientes'];
    $nom = $_POST['nombre'];
    $apelli = $_POST['apellido'];
    $email = $_POST['email'];
    $gen = $_POST['genero'];
    $fere = $_POST['fecha_registro'];
    $telf = $_POST['telefono'];
    $direc = $_POST['direccion'];

    // Preparar la consulta SQL
    $query = "INSERT INTO clientes (IdClientes, Nombres, Apellido, Email, Genero, Fecha_registro, Telefono, Direccion) 
              VALUES ('$cli', '$nom', '$apelli', '$email', '$gen', '$fere', '$telf', '$direc')";

    // Ejecutar la consulta
    $res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaClientes.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }

// }
?>
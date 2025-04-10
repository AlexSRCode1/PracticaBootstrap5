<?php
include('../modelos/conexion.php'); // Asegúrate de que la ruta sea correcta

// Inicializar variables
// $producto = $descripcion = $fecha_ingreso = $cantidad = $costo = $codigo_barras = "";
// $mensaje = "";

// Procesar el formulario cuando se envía
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario

    $prod = $_POST['producto'];
    $descrip = $_POST['descripcion'];
    $fecha = $_POST['fecha_registro'];
    $cant = $_POST['cantidad'];
    $cost = $_POST['costo'];
    $code = $_POST['codigo_barras'];

    // Preparar la consulta SQL
    $query = "INSERT INTO productos (Producto, Descripcion, Fecha_Registro, Cantidad, Costo, Codigo_Barras)
              VALUES ('$prod', '$descrip', '$fecha', '$cant', '$cost', '$code')";

    // Ejecutar la consulta
    $res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaProductos.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }

// }
?>
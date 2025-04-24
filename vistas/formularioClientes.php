<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Clientes</title>


    <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>


</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <h2 class="text-center">Formulario de Registro de Clientes</h2>
        <form method="POST" action="../controladores/crearFormularioClientes.php" class="form-group">


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" required></input>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email:</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="formulario-group">
                        <label for="">Genero</label>
                        <select class="form-select" name="genero" id="">
                            <option value=""> Seleccione... </option>
                            <option value="Masculino"> Masculino </option>
                            <option value="Femenino"> Femenino </option>        
                            <option value="Otros"> Otros </option>                    
                        </select>
            </div>

            <div class="mb-3">
                <label for="fecha_registro" class="form-label">Fecha de Registro:</label>
                <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>
            
            

            <div class="formulario-group">    
                        <!-- <input class="btn btn-primary" value="Guardar" type="button"> -->
                        <button class="btn btn-primary w-100 name="add_prod" type="submit" action="../vistas/listaProductos"> Guardar </button>

                    </div>

        </form>
    </div>
</div>

</body>
</html>
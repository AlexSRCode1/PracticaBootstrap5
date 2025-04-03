<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>

</head>
<body>

<div class="container">
        <h1>Registro estudiante</h1>
        <div class="row">
            <div class="col-md-6"  >
                <form method="POST" action="../controladores/crearEstudiante.php">

                    <div class="formulario-group">
                        <label for="">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>

                    <div class="formulario-group">
                        <label for="">Apellido</label>
                        <input class="form-control" name="apellido" type="text">
                    </div>

                    <div class="formulario-group">
                        <label for="">CI</label>
                        <input class="form-control" name="ci" type="text">
                    </div>

                    <div class="formulario-group">
                        <label for="">Genero</label>
                        <select class="form-select" name="genero" id="">
                            <option value=""> Seleccione... </option>
                            <option value=""> Masculino </option>
                            <option value=""> Femenino </option>        
                            <option value=""> Otros </option>                    
                        </select>
                    </div>

                    <div class="formulario-group">
                        <label for="">Curso</label>
                        <input class="form-control" name="curso" type="text">
                    </div>
                    <br>
                    <div class="formulario-group">    
                        <!-- <input class="btn btn-primary" value="Guardar" type="button"> -->
                        <button class="btn btn-primary type="submit"> Guardar </button>

                    </div>

                </form>
            </div>
        </div>
    </div>

    
</body>
</html>
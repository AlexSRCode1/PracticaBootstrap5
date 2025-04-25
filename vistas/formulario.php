<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Productos</title>


    <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>


</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="row">
    <div class="">
        <h2 class="text-center">Formulario de Registro de Productos</h2>
        <form method="POST" action="../controladores/crearFormulario.php" class="form-group">


            <div class="form-group">
                <label for="producto" class="form-label">Nombre del Producto:</label>
                <input type="text" id="producto" name="producto" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea type="text" id="descripcion" name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="fecha_ingreso" class="form-label">Fecha de Registro:</label>
                <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="costo" class="form-label">Costo:</label>
                <input type="number" id="costo" name="costo" class="form-control" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="codigo_barras" class="form-label">Código de Barras:</label>
                <input type="text" id="codigo_barras" name="codigo_barras" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="categoria">Seleccione Categoría</label>
                <select class="form-select" name="categoria" id="categoria">
                     <option value="">Seleccione...</option>
                     
                        <?php

                            include('../modelos/conexion.php'); 

                            $query="SELECT `Id_Categoria`, `Nombre` FROM `categoria`";
                            $res=$conexion->query($query);

                            if($res->num_rows>0){

                                $combobit="";
                                while($row=$res->fetch_array(MYSQLI_ASSOC))
                                {
                                    $combobit = "<option value='".$row['Id_Categoria']."'>".$row['Nombre']."</option>";

                                    echo $combobit;
                                }
                                
                            }
                            else
                            {
                                echo "No hay ningun dato para mostrar";
                            }

                            
                        ?>
                    </select>
            </div>

            <br>

            <div class="form-group">    
                        <!-- <input class="btn btn-primary" value="Guardar" type="button"> -->
                        <button class="btn btn-primary w-100" name="add_prod" type="submit" action="../vistas/listaProductos"> Guardar </button>

                    </div>

        </form>
        
    </div>
</div>
</div>

</body>
</html>
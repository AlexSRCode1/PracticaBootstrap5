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
    <h1> Lista de producto</h1>   
    
    
    <div class="row">
        <table class="table">

        
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Codigo de Barra</th>
                <th>Categoria</th>
                <th>Opciones</th>
            </tr>
            </thead>



            <tbody>

            <?php
                
                include('../modelos/conexion.php');

                $query="SELECT `IdProductos`, `Producto`, `Descripcion`, `Fecha_Registro`, `Cantidad`, `Costo`, `Codigo_Barras`,`Id_Categoria` FROM `productos`";

                $res=$conexion->query($query);

                while($row=$res->fetch_assoc()) 
                {
                    ?>
                    <tr>
                    <td><?php echo $row['IdProductos'] ?> </td>
                    <td><?php echo $row['Producto'] ?> </td>
                    <td><?php echo $row['Descripcion'] ?></td>
                    <td><?php echo $row['Fecha_Registro'] ?></td>
                    <td><?php echo $row['Cantidad'] ?></td>
                    <td><?php echo $row['Costo'] ?></td>
                    <td><?php echo $row['Codigo_Barras'] ?></td>
                    <td><?php echo $row['Id_Categoria'] ?></td>
                    <td class="text-center">
                        <a href="eliminar/eliminarProducto.php?ide= <?php echo $row['IdProductos'];?>" 
                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar" 
                        <span class="fas fa-trash"></span>
                        </a>
                    </td>
                    </tr>
                <?php
                }
               
            ?>      

            
            </tbody>

        </table>
    </div>
 </div>    



</body>
</html>
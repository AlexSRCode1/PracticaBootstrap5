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
    <h1> Lista de Clientes</h1>   
    
    
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
            </tr>
            </thead>



            <tbody>

            <?php
                
                include('../modelos/conexion.php');

                $query="SELECT `IdProductos`, `Producto`, `Descripcion`, `Fecha_Registro`, `Cantidad`, `Costo`, `Codigo_Barras` FROM `productos`";

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
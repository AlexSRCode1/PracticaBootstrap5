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
                <th>Apellido</th>
                <th>Email</th>
                <th>Genereo</th>
                <th>Fecha de Registro</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>
            </thead>



            <tbody>

            <?php
                
                include('../modelos/conexion.php');

                $query="SELECT `IdClientes`, `Nombres`, `Apellido`, `Email`, `Genero`, `Fecha_registro`, `Telefono`, `Direccion` FROM `clientes`";

                $res=$conexion->query($query);

                while($row=$res->fetch_assoc()) 
                {
                    ?>
                    <tr>
                    <td><?php echo $row['IdClientes'] ?> </td>
                    <td><?php echo $row['Nombres'] ?> </td>
                    <td><?php echo $row['Apellido'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Genero'] ?></td>
                    <td><?php echo $row['Fecha_registro'] ?></td>
                    <td><?php echo $row['Telefono'] ?></td>
                    <td><?php echo $row['Direccion'] ?></td>
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
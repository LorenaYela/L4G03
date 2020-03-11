<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form>
    <table border="1" cellspacing="0" cellpadding="3" >
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>email</td>
        </tr>
        <tr >
            <?php
            $con= new mysqli("localhost","root","","personas");
            $query="select * from personas";
            $result=$con->query($query);//--> mysqli_query($con,$query)
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['email']?></td>
        </tr>
            <?php 
            }
            $con->close();
            ?>
    </table>
    </form>
    <a href="crear.php">Agregar</a>
</body>
</html>
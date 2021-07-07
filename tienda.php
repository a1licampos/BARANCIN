<?php include 'header.php'; 
 include ("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tienda.css">
</head>
<body>
    

    <div class="contenedor">
        
        <div class="box">

            <h1>Aquí encuentra las tres B: bueno, bonito y barato<h1>
            
            <form action="" method="get">
                <input type="text" name="busqueda" placeholder="Producto...">
                <input type="submit" name="enviar" value="Buscar"> 
            </form>

        </div>

        <div class="box2">
        </div>

        <div class="box3">
            <h2>PRODUCTOS</h2>

            <?php include 'cartas.php'; ?>

        </div>


    </div>


    <?php
    
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $conexion->query("SELECT * FROM productos WHERE Producto LIKE '%$busqueda%'");

        while ($row = $consulta ->fetch_array()) {
            echo $row['Producto'].'<br>';
        }

    }

    ?>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>
</html>
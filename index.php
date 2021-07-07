<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="index_estilo.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d8214ad5fd.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="contenedor">

        <div class="contenido1">
            
            <h2>BARANCIN</h2>
            
            <div class="parrafo">

                <img src="img1.png" alt="">

                <p>
                    Es un novedoso y sencillo sistema para adquirir productos de 
                    la tierra mexicana, es una plataforma de comercio que se 
                    distingue por una abierta relación entre productor y consumidor,
                    fácil seguimiento del producto e impulso al talento mexicano.
                </p>
                
            </div>
        </div>

        <div class="contenido2">

            <h2> VENDER </h2>
            
                <p>
                    Crea una cuenta <br>
                    Sube tus productos <br> 
                    ¡Vende tus productos! <br>
                </p>

                <a href="#" class="btn"> <span>NUEVA</span> </a>

        </div>

        <div class="contenido3">
            <h2>COMPRAR</h2>
            <p>
                Busca el producto <br>
                Resuelve tus dudas <br>
                ¡Disfruta tu compra! <br>
            </p>
            
            <a href="tienda.php" class="btn"> <span>TIENDA</span> </a>
        </div>

        <div class="contenido4">

            <h2>¡GRACIAS!</h2>

            <div class="parrafo2">

                <img src="img2.png" alt="">
                
                <p>
                    Bella es mi tierra Mexicana, <br>
                    Bella es mi tierra Mexicana, <br>
                    y no porque lo diga yo, <br> 
                    si no porque los hechos son.
                </p>

                <p>Irma Periban</p>

            </div>

        </div>

     </div> <!-- CONTENEDOR -->
    
    

    <script>
        const btn = document.querySelector('.btn');
        btn.onmousemove = function(e){
            const x = e.pageX - btn.offsetLeft;
            const y = e.pageY - btn.offsetTop;

            btn.style.setProperty('--x', x + 'px');
            btn.style.setProperty('--y', y+ '')
        }
    </script>


    <footer>
        <?php include 'footer.php' ?>
    </footer>

</body>
</html>
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detalles_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0" nonce="fNCP5aoW"></script>
    
    <div class="contenedor">

        <div class="img">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="cafe1.jpg" class="d-block w-100" alt="cafe 1">
                    </div>
                    <div class="carousel-item">
                    <img src="cafe2.jpg" class="d-block w-100" alt="cafe 2">
                    </div>
                    <div class="carousel-item">
                    <img src="cafe3.jpg" class="d-block w-100" alt="cafe 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="comprar">

                    <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
                </div>
            <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
            <script>
                function initPayPalButton() {
                paypal.Buttons({
                    style: {
                    shape: 'rect',
                    color: 'white',
                    layout: 'vertical',
                    label: 'paypal',

                    },

                    createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{"description":"CAFÉ MOLIDO\nLugar de Cosecha: Uruapan, Michoacán\nAgricultor: Miguel Cervantes","amount":{"currency_code":"MXN","value":258,"breakdown":{"item_total":{"currency_code":"MXN","value":50},"shipping":{"currency_code":"MXN","value":200},"tax_total":{"currency_code":"MXN","value":8}}}}]
                    });
                    },

                    onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    });
                    },

                    onError: function(err) {
                    console.log(err);
                    }
                }).render('#paypal-button-container');
                }
                initPayPalButton();
            </script>

        </div>

        <div class="info">
            
            <h2>CAFÉ MOLIDO</h2>

            <p>
                <b>Lugar de Cosecha: </b> Uruapan, Michoacán <br>
                <b>Agricultor: </b> Miguel Cervantes <br>
                <b>Acerca del Producto: </b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet nihil, hic et culpa molestiae, architecto provident incidunt quae quibusdam laborum! Libero laudantium deserunt, omnis harum ipsam debitis dolores quas.
            </p>

        </div>

        <div class="comentarios">
        <div class="fb-comment-embed" data-href="https://www.facebook.com/zuck/posts/10102577175875681?comment_id=1193531464007751&amp;reply_comment_id=654912701278942" data-width="720" data-include-parent="true"></div>
        </div>

        <div class="ofertas">
            <h2>¿Dudas? Cintéotl puede ayudarte</h2>
            <a href="bot.php">
                <img src="chatbot.png" alt="">
            </a> 
        </div>
        
    </div>


    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
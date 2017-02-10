<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/styles/grid.css">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/products.css">
</head>

<body>

    <header>
       <?php include("view/overAll/header.html"); ?>
    </header>


     <div class="row">
        <div class="products" style="margin-left:10%;margin-right:10%;">
            LATEST PRODUCTS
            <hr/>
            <section>
               <?php
                    for($i=1;$i<=6;$i++){

                ?>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/laptop<?php echo $i;?>.jpg" alt="">
                    <ul>
                        <li>Producto</li>
                        <li class="azul">$10,000.00</li>
                    </ul>
                </div>
                <?php
                    }
                ?>
            </section>
        </div>
    </div>

    <footer>
        <?php include("view/overAll/footer.html"); ?>
    </footer>
</body>

</html>

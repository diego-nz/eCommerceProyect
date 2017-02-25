<!---Codificado por Diego Núñez Copyright--->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/styles/grid.css">
    <link rel="stylesheet" href="assets/styles/slider.css">
    <link rel="stylesheet" href="assets/styles/products.css">
    <link rel="stylesheet" href="assets/styles/main.css">
    <title>Best Shop</title>
</head>

<body>
    <header>
        <?php include( "view/overAll/header.html"); ?>
    </header>

    <div class="slider">
        <ul>
            <li>
                <img src="assets/images/slider.jpg" />
                <span>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt temporibus atque</h4>
                            <p>Lorem ipsum dolor...</p>
                        </span>
            </li>
            <li>
                <img src="assets/images/slider1.jpg" />
                <span>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, laudantium sapie, deleniti, illo!</h4>
                            <p>More lorem ipsum dolor...</p>
                        </span>
            </li>
            <li>
                <img src="assets/images/slider3.jpg" />
                <span>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum veritatis et, so4>
                            <p>More lorem ipsum dolor...</p>
                        </span>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="products">
            LATEST PRODUCTS
            <hr/>
            <section>
                <?php
                    $array=array( "camera", "desktop", "laptop", "tablet","component");
                    $random=rand(0,3);
                    $random2=rand(1,6);
                    for($i=1;$i<=12;$i++){
                        $random=rand(0,4);
                        $random2=rand(1,6);
                ?>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <a href="?view=showProduct&article=<?php echo $random2?>&category=<?php echo $array[$random]?>"><img src="assets/images/<?php echo $array[$random].$random2;?>.jpg" alt=""></a>
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

    <div class="row boxes">

        <div class="left col-lg-6 col-md-12 col-xs-12">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="leftBox">
                    <ul>
                        <li class="descriptionBox">Free shipping all</li>
                        <li class="descriptionBox">orders over</li>
                        <li class="priceBox">$200</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="leftBoxRight">
                    <ul>
                        <li class="descriptionBox">Your own </li>
                        <li class="descriptionBox">banners</li>
                        <li class="descriptionBox">everywhere!</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="right col-lg-6 col-md-12 col-xs-12">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="rightBox">
                    <ul>
                        <li class="descriptionBox">Sign up</li>
                        <li class="descriptionBox">for discount</li>
                        <li class="priceDiscountBox">-30%</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="rightBoxRight">
                    <ul>
                        <li class="descriptionBox">Add your email</li>
                        <li class="descriptionBox">and get</li>
                        <li class="descriptionBox">discount code!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row products">
        <div class="featured col-lg-3 col-md-3 col-xs-12">
            Featured
            <hr>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <img src="assets/images/hp.jpg" alt="">
            </div>
            <div class="featuredText col-lg-6 col-md-6 col-xs-12">
                <h6>Producto</h6>
                <h5>$10,000</h5>
            </div>

        </div>
        <div class="showProducts col-lg-9 col-md-9 col-xs-12">
            <a href="#">Desktops</a>
            <a href="">Components</a>
            <hr>
            <img src="assets/images/productHp.jpg" alt="">
            <h6>HP lP306</h6>

        </div>
    </div>


    <footer>
        <?php include( "view/overAll/footer.html"); ?>
    </footer>
</body>

</html>

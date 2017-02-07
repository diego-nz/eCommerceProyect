<!---Codificado por Diego Núñez--->
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
    <!---<div class="headerLeft">
            <div class="row">
                <div class="col-lg-3 col-md-2">
                    Call us +48500-312-312
                </div>
                <div class="col-lg-9 col-md-10 headerRight">
                    <nav class="nav1">
                        <ul>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">English US</a></li>
                            <li><a href="#">Dollar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>--->


    <header>
       <?php include("view/overAll/header.html"); ?>
    </header>

    <nav>
        <input type="checkbox" id="menuBtn">
        <label for="menuBtn">
            <img src="assets/images/movil.png" alt="">
        </label>
        <div class="row menu">
            <ul>
                <li>
                    <a href=""><img src="assets/images/home.png" alt="home"></a>
                </li>
                <li><a href="">Desktop</a></li>
                <li><a href="">Laptop & Notebooks</a></li>
                <li><a href="">Components</a></li>
                <li><a href="">Tablets</a></li>
                <li><a href="">Cameras</a></li>
                <li><a href="">Information</a></li>
            </ul>
        </div>
    </nav>

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
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/hp.jpg" alt="">
                    <ul>
                        <li>Producto</li>
                        <li class="azul">$10,000.00</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/hp.jpg" alt="">
                    <ul>
                        <li>Producto</li>
                        <li class="azul">$10,000.00</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/hp.jpg" alt="">
                    <ul>
                        <li>Producto</li>
                        <li class="azul">$10,000.00</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <img src="assets/images/hp.jpg" alt="">
                    <ul>
                        <li>Producto</li>
                        <li class="azul">$10,000.00</li>
                    </ul>
                </div>
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
        <?php include("view/overAll/footer.html"); ?>
    </footer>
</body>

</html>

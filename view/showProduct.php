<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Components</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/styles/grid.css">
    <link rel="stylesheet" href="assets/styles/products.css">
    <link rel="stylesheet" href="assets/styles/main.css">
</head>

<body>

    <header>
        <?php include( "view/overAll/header.html"); ?>
    </header>


    <div class="row">
        <div>
            <div class="col-lg-6 col-md-4 col-xs-12 productShow">
                <img src="assets/images/<?php echo $_GET["category"].$_GET["article"];?>.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-4 col-xs-12 emailProduct">
            <fieldset>
                <legend>Hola</legend>
            </fieldset>
        </div>
    </div>

    <footer>
        <?php include( "view/overAll/footer.html"); ?>
    </footer>
</body>

</html>

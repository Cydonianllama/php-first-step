<?php  ?>

<!-- https://www.adaweb.es/modelo-vista-controlador-mvc-php/#:~:text=El%20paradigma%20modelo%20vista%20controlador,hacer%20que%20sea%20m%C3%A1s%20legible. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/index.css">
    <title>Crud Products</title>
</head>
<body>
    <div class = "container">
    
        <header class ="header">
            <div class="header__logo">
                Grandez
            </div>
            <nav class ="header__nav">
                <a  class ="header__nav__a" href="./views/login.php">Login</a>
            </nav>
        </header>

        <div class = "hero">
            <div class = "hero__description">
                <h2 class ="hero__description__h2">MY FIRST PHP APP</h2>
                <p class ="hero__description__p">
                    this is my first step with php, i feel very exited, because i only found offers
                    with this language :(, prueba de rendereizacion
                </p>
                <a class = "hero__description_calltoaction" href="./contact.php">Contact Me please XD</a>
            </div>
        </div>

        <div class="fake-form">
            <input type="text" id="name-product" placeholder="name product">
            <input type="text" id="description" placeholder="description">
            <select name="select-category" id="select-category">
                <option value="selection">select</option>
                <option value="primary">primary</option>
                <option value="secondary">secundary</option>
                <option value="luxury">luxury</option>
            </select>
            <input type="number" placeholder="quantity" id="quantity">
            <button id="btn-create">create</button>
        </div>
        <div id = "demo__app">
    
        </div>

    </div>
    <script type="text/JavaScript" src = "./public/index.js"></script>
</body>
</html>
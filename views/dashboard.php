<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class = "container">
        <a href="../index.php">logout</a>
        <form action = "./createProduct">
            <input type="text" name="name-product" id="name-product" placeholder= "name-product">
            <input type="text" name="category" id = "category" placeholder="placeholder">
            <input type="number" name="quantity" id  ="quantity" placeholder="quantity">
            <button type = "submit">create</button> 
        </form>
    </div>
</body>
</html>
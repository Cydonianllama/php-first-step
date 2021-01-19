<?php include('../controllers/statesLogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <link rel="stylesheet" href="../public/login.css">
    <title>Login</title>
</head>
<body>

    <div class = "container">
        <form class ="form-login" action = "../controllers/login.php" method = "POST">
            <div class = "form-login__log-login <?php echo $class ?>">
                <?php include('../controllers/statesLogin.php');   echo $login_msg; ?> 
            </div>
            <div class ="form-login__uservector ">

            </div>
            <input  class = "form-login__input" name = "username" type="text" placeholder = "username" required >
            <input class = "form-login__input" type="password" name = "password" placeholder = "password">
            <button id = "btn-login"class = "form-login__button" name="submit" type = "submit">Login</button>
        </form>
        <script src="../public/login.js"></script>
    </div>
</body>
</html>
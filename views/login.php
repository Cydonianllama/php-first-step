<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class = "container">
        <form action="../controllers/login.php" METHOD = "POST">
            <input  name = "username" type="text" placeholder = "username" required >
            <input type="password" name = "password" placeholder = "password">
            <button type = "submit">Login</button>
        </form>
    </div>
</body>
</html>
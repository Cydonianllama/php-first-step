<?php 

    function findUser($username,$password){
        if ($username === "erick123" && $password === "admin123+."){
            header("Location: http://192.168.1.88:8080/x_proyecto1/views/dashboard.php");
        }else{
            header("Location: http://192.168.1.88:8080/x_proyecto1/views/login.php");
        }
    }

    if (isset($_POST["username"]) && isset($_POST["password"]) ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        findUser($username,$password);
    }

?>
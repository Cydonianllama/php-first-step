<?php 

    // in the html i will put this in the action for auto-call and aply the logic in the same file
    //echo $_SERVER["PHP_SELF"]

    // header for redirect to another page or php file
    //header("Location: http://localhost:8080/phpFirstStep/views/dashboard.php");
    //die(); // is important destruct the actions after header

    // the sleep function can work for prevent important things
    //sleep(1);

    // for processing a json for response
    //$msg = array("msg"=> $login_msg ,"class" => $class);
    //$json = json_encode($msg);

    // message render in the page of login
    //$login_msg = '';

    // class for apply css in the box of information
    //$class = "none";

    // this variable assing the state of the login action
    //$state_login = "";

    /* commented for a problem (reassign)
    function findUser($username,$password){
        if ($username === "erick123" && $password === "admin123+."){
            $login_msg = 'sucess login';
            //header("Location: http://localhost:8080/phpFirstStep/views/dashboard.php");
        }else{
            $login_msg = 'error login, please try again';
            //header("Location: http://localhost:8080/phpFirstStep/views/login.php");
        }
    }
    */

    // validation processing
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // if the user submit the data login
        if (isset($_POST["submit"])){
            // if the user post username and password
            if (isset($_POST["username"]) && isset($_POST["password"]) ) {

                $username = $_POST["username"];
                $password = $_POST["password"];

                // this dont work because a reassign 
                //findUser($username,$password);

                if ($username === "erick123" && $password === "admin123+."){
                    
                    //change the state of the variables
                    $statesTXT = fopen('../utils/states.txt','w');
                    $segments = "state_msg_login = you are correctly login\nstate_class = sucess";
                    fwrite($statesTXT,$segments);
                    fclose($statesTXT);

                    //redirect the location (sucess redirection)
                    header("Location: http://localhost:8080/phpFirstStep/views/dashboard.php ");
                    die();
                    
                }else{

                    //change the state of the variables
                    $statesTXT = fopen('../utils/states.txt','w');
                    $segments = "state_msg_login = try the user data again\nstate_class = error";
                    fwrite($statesTXT,$segments);
                    fclose($statesTXT);

                    //redirect the location (error redirection)
                    header("Location: http://localhost:8080/phpFirstStep/views/login.php ");
                    die();

                }
            }
        }
    }else{
            $login_msg = " ";
    }    

?>
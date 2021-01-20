<?php 

include_once "./products.php";

$controller = new product();

//deletion controller action

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //if deletion

    // .. the code of the deletion

}




if (isset($_POST["name-product"])) {

    $idCategory = 0;

    switch($_POST["nameCategory"]){
        case "carnes":
            $idCategory = 1;
            break;
        case "bebidas":
            $idCategory = 2;
            break;
        case "dulces":
            $idCategory = 3;
            break;
        case "verdura":
            $idCategory = 4;
            break;
        case "fruta":
            $idCategory = 5;
            break;
        case "tuberculo":
            $idCategory = 6;
            break;
    }

    $controller->createProduct($_POST["name-product"],$_POST["description-product"],$idCategory,$_POST["quantity"]);
}


// $controller is used for list the products
include_once "../views/dashboard.php";

?>
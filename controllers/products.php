<?php 

# my current route is : __dir__

include_once "../models/product.php"; 

class product extends connection{

    //this cached the response of the database
    private $model;

    function __construct(){
        //parent::__construct();
        $this->model = new modelProduct();
    }

    function listAllProducts(){

        //getAllProducts return the rows (products)
        $products_data = $this->model->getAllProducts();

        if ($products_data == false){
            echo "a problem ocurred, please try later";
        }

        // iterate and render the rows of the table
        while($row = $products_data->fetch()){
            echo 
            "
                <tr class = 'table__body__row' data-set-id=".$row["idProducts"].">
                    <td>".$row["name_product"]."</td>
                    <td>".$row["description_procuct"]."</td>
                    <td>".$row["nameCategory"]."</td>
                    <td>".$row["quantity"]."</td>
                    <td><input type='radio' selected></td>
                </tr>
            ";
        }
    }

    function filterByCategory(){

    }

    function createProduct($name_product,$description_product,$nameCategory,$quantity){
        $this->model->createProduct($name_product,$description_product,$nameCategory,$quantity);
    }

    function deleteProduct(){

    }

    function updateProduct(){

    }
    
}
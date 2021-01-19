<?php 

include_once '../utils/connection.php';

class product extends connection{

    function __construct(){
        //parent::__construct();
    }

    function getAllProducts(){
        $query = $this->getConnection()->prepare("select name_product , description_procuct , nameCategory ,quantity  from products inner join productCategory p where p.idCategory = products.idCategory;");
        $query->execute();
        while($row = $query->fetch()){
            echo 
            "
                <tr class = 'table__body__row'>
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

    function createProduct(){

    }

    function deleteProduct(){

    }

    function updateProduct(){

    }
    
}
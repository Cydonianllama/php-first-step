<?php 

include_once '../utils/connection.php';

class product extends connection{

    function __construct(){
        //parent::__construct();
    }

    function getProductById($currentId){

    }
    
    // get all products
    function getProducts(){
        $query = $this->getConnection()->prepare("select * from products");
        $query->execute();
        while ($row = $query->fetch()) {
            echo $row['name_'].": ".$row['description']."<br />";
        }
    }
}
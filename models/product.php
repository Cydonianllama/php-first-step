<?php

//the connection to mysql
include_once '../utils/connection.php';

class modelProduct extends connection{

    function __construct(){
        //parent::__construct();
    }

    function getAllProducts(){
        $query;
        try{
            $this->getConnection()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $this->getConnection()->prepare("select name_product , description_procuct , nameCategory ,quantity ,idProducts from products inner join productCategory p where p.idCategory = products.idCategory;");
            $query->execute();
        }catch(PDOException $e){
            return false;
        }
        
        return $query;
    }

    function filterByCategory(){

    }

    //nameCategory is a number -> the id of the category inserted into the database
    function createProduct($name_product,$description_product,$nameCategory,$quantity){
        $query = $this->getConnection()->prepare("insert into products(name_product,description_procuct,idCategory,quantity) values('".$name_product."','".$description_product."',".$nameCategory.",".$quantity.");");
        $query->execute();
        return $query;
    }

    function deleteProduct($id1,$id2,$id3,$id4,$id5,$quantity){

        //this query allow to delete totally 5 products

        //validations
        switch($quantity){
            case 1 :
                //delete a product
                $query = " DELETE FROM products WHERE idProducts IN (".$id1.")";
                break;
            case 2 :
                //delete 2 products
                $query = " DELETE FROM products WHERE idProducts IN (".$id1.",".$id2.")";
                break;
            case 3 :
                //delete 3 products
                $query = " DELETE FROM products WHERE idProducts IN (".$id1.",".$id2.",".$id3.")";
            case 4 :
                //delete 4 products
                $query = " DELETE FROM products WHERE idProducts IN (".$id1.",".$id2.",".$id3.",".$id4.")";
                break;
            case 5 :
                //delete 5 products
                $query = " DELETE FROM products WHERE idProducts IN (".$id1.",".$id2.",".$id3.",".$id4.",".$id5.")";
            break;
        }
        
        
        
        
        


    }

    function updateProduct(){

    }
    
}
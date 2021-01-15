<?php 
    class Products {
        
        private $nameProduct;
        private $description;
        private $category;
        private $quantity;

        function getNameProduct(){
            return $this->$nameProduct;
        }
        function getDescription(){
            return $this->$description;
        }
        function getCategory(){
            return $this->$category;
        }
        function getQuantity(){
            return $this->$quantity;
        }

        function setNameProduct($nameProduct){
            $this->$nameProduct = $nameProduct;
        }
        function setDescription($description){
            $this->$description = $description;
        }
        function setCategory($category){
            $this->$category = $category;
        }
        function setQuantity($quantity){
            $this->$quantity = $quantity;
        }

        function __contruct($nameProduct,$description,$category,$quantity){
            $this->$nameProduct = $nameProduct;
            $this->$description = $description;
            $this->$category = $description;
            $this->$quantity = $quantity;
        }
    }
?>
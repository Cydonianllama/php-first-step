<?php
    class connection{
        
        private $username;
        private $password;

        private $conn;

        //@return connection
        function getConnection(){
            $conn = new PDO('mysql:host=localhost;dbname=prueba', $this->username, $this->password);
            
            // set the error mode exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
            return $conn;
        }

        function closeConnection(){
            $this->conn = null;
        }

        function __contruct(){
            $this->$username = "root";
            $this->$password = "";
        }
    }
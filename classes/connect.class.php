<?php

    class Connect{
     
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "products";
        
        function connectDB(){
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . $conn->connect_error);
            
            if ($conn->connect_error){return $this->newDB();}
            else{return $conn;}
        }
        
        function newDB(){
            $conn = new mysqli($this->servername, $this->username, $this->password);
            $query = 'SELECT * from products';
            $result = $this->connectDB()->query($query);
            
                if($result == FALSE)
                {
                    $this->connectDB()->query('CREATE DATABASE products');
                    $this->connectDB()->query('USE products');
                    $this->connectDB()->query('CREATE TABLE items (SKU CHAR(10) PRIMARY KEY, name CHAR(30), price FLOAT, SA CHAR(40), weight FLOAT, height FLOAT, width FLOAT, length FLOAT, size FLOAT)');
                    return $conn;
                }
        }
    }

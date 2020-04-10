<?php
class Connect
{
    //Connection parameters
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "products";

    //Creates connection to database
    function connectDB()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . $conn->connect_error);

        if ($conn->connect_error)
        {
            return $this->newDB();
        }
        else
        {
            return $conn;
        }
    }

    //Creates new database if not present
    function newDB()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password);
        $query = 'SELECT * from products';
        $result = $conn->query($query);

        if ($result == false)
        {
            $conn->query('CREATE DATABASE products');
            $conn->query('USE products');
            $conn->query('CREATE TABLE items (SKU CHAR(10) PRIMARY KEY, name CHAR(30), price FLOAT, SA CHAR(40), weight FLOAT, height FLOAT, width FLOAT, length FLOAT, size FLOAT)');
            return $conn;
        }
    }
    
    function saveProduct($Product){
        
        $query = "INSERT INTO items (SKU, name, price, SA";
        
        foreach($Product->getAttributes() as $index=>$attribute)
        {
            $query = $query . ", " . $attribute;
        }
        
        $query = $query . ") VALUES (";
        
        $query = $query . '"' . $Product->getSKU() . '"' . ", ";
        $query = $query . '"' . $Product->getName() . '"'  . ", ";
        $query = $query . $Product->getPrice() . ", ";
        $query = $query . '"' . $Product->getSpecialAttribute() . '"' . ", ";

        foreach($Product->getAttributes() as $index=>$attribute)
        {
            if($index>0)
            {
                $query = $query . ", ";
            }
            $func = "get" . $attribute ;
            $query = $query . $Product->$func();
            
        }
        $query = $query . ")";
        
        $con = $this->connectDB();
       $test =  $con->query($query);
        if($test)
        {
            echo ('Saved!');
        }
        else
        {
            echo ('Something went wrong...');
            echo("Error description: " . mysqli_error($con));
            echo($query);
        }
    }
}

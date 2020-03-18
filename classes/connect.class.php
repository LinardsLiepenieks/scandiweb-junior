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
}

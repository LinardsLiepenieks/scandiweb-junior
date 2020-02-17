<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    
    

    $conn = new mysqli($servername, $username, $password);
    
    
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);

    $q = mysqli_query($conn, 'SELECT * from products');
    
    if($q == FALSE)
    {
        mysqli_query($conn, 'CREATE DATABASE products');
        mysqli_query($conn, 'USE products');
        mysqli_query($conn, 'CREATE TABLE items (SKU CHAR(10) PRIMARY KEY, name CHAR(30), price FLOAT, SA CHAR(40))');
    }
    


    

    
?>
    
    
    






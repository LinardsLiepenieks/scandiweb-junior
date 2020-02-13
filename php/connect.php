<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);

    $q = mysqli_query($conn, 'SELECT * from products');
    
    if($q == FALSE)
    {
        mysqli_query($conn, 'CREATE DATABASE products');
        mysqli_query($conn, 'CREATE TABLE items (SKU CHAR(10) PRIMARY KEY, name CHAR(30), price FLOAT, SA CHAR(40))');
    }

    $SKU = $_POST['SKU'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    
    //print_r($_POST);
    if($_POST['Weight']!=="")
     $SA = $_POST['Weight'] . " KG";
    else if($_POST['height']!=="")
        $SA = $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'];
    else if ($_POST['size']!=="")
        $SA = $_POST['size'] . " MB";
    else{
        echo "Select a product type";
        return false;
    }


    $sql = "INSERT INTO items (SKU, name, price, SA)
    VALUES ('$SKU', '$Name', '$Price', '$SA')";

    mysqli_query($conn, $sql);
    

    
?>
    
    
    






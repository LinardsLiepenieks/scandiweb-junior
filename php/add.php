<?php  



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products";
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);
   

//for testing reasons it creates database if not present, so that we dont need to manually create it
if ($conn->connect_error){
    
    $conn = new mysqli($servername, $username, $password);
    $q = mysqli_query($conn, 'SELECT * from products');
 
    if($q == FALSE)
    {
        mysqli_query($conn, 'CREATE DATABASE products');
        mysqli_query($conn, 'USE products');
        mysqli_query($conn, 'CREATE TABLE items (SKU CHAR(10) PRIMARY KEY, name CHAR(30), price FLOAT, SA CHAR(40), weight FLOAT, height FLOAT, width FLOAT, length FLOAT, size FLOAT)');
    }}

    $SKU = $_POST['sku'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Weight = $Height = $Length = $Width = $Size = '';
    $SA = $_POST['sa'];
    echo $SA;
    


    if($SA == 'book')
    {
        $Weight = $_POST['weight'];
    }

    else if($SA == 'furniture')
    {
        $Height = $_POST['height'];
        $Width = $_POST['width'];
        $Length = $_POST['length'];
    }

    else if ($SA == 'DVD-disc'){
        $Size = $_POST['size'];}

    else{
        echo "Select a product type";
        return false;
    }

    $sql = "INSERT INTO items (SKU, name, price, SA, weight, height, width, length, size)
    VALUES ('$SKU', '$Name', '$Price', '$SA', '$Weight', '$Height', '$Width', '$Length', '$Size')";

    mysqli_query($conn, $sql);


?>
<?php  



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products";
$conn = new mysqli($servername, $username, $password, $dbname);

    $SKU = $_POST['sku'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    

    if($_POST['weight']!=="")
        $SA = $_POST['weight'] . " KG";

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
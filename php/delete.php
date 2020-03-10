<?php  



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "products";
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);


$del = $_POST['del'];

$sql = "DELETE FROM items WHERE SKU IN (";

foreach ($del as &$sku) {
    $sql = $sql. '("'.$sku. '"), ';
}

$sql = substr($sql, 0, -2);
$sql = $sql . ');';
mysqli_query($conn, $sql);
echo json_encode($sql);


?>
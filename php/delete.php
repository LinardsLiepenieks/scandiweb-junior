<?php  

//Connect to database
require_once "../classes/connect.class.php";
$con = new Connect();

$del = $_POST['del']; //array of values to be deleted

//Create Query that deletes every checked item
    $query = "DELETE FROM items WHERE SKU IN (";

    foreach ($del as &$sku) {
        $query = $query. '("'.$sku. '"), ';
    }

    $query = substr($query, 0, -2);
    $query = $query . ');';

//execute query
$con->connectDB()->query($query);
echo json_encode($del);


?>

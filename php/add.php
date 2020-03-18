<?php

require_once "../classes/Product.class.php";
$product = new Product($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['sa'], $_POST['weight'], $_POST['height'], $_POST['width'], $_POST['length'], $_POST['size']);

if ($product->get_sa() != "def") {
    $product->save();
}

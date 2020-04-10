<?php
require_once "../classes/product-type/Book.class.php";
require_once "../classes/product-type/Furniture.class.php";
require_once "../classes/product-type/DVD.class.php";
require_once "../classes/connect.class.php";





if ($_POST['sa'] != "def") {
    
        if ($_POST['sa'] == 'book')
        {
            $Product = new Book;
            
            $Product->setWeight($_POST['weight']);
        }
        else if ($_POST['sa'] == 'furniture')
        {
            $Product = new Furniture;
            
            $Product->setHeight($_POST['height']);
            $Product->setWidth($_POST['width']);
            $Product->setLength($_POST['length']);
        }
        else if ($_POST['sa'] == 'DVD-disc')
        {
            $Product = new DVD;
            
            $Product->setSize($_POST['size']);
        }
    
            $Product->setSKU($_POST['sku']);
            $Product->setName($_POST['name']);
            $Product->setPrice($_POST['price']);
            $Product->setSpecialAttribute($_POST['sa']);
    
            $Conn = new Connect;
            $Conn->saveProduct($Product);

}
else{
    echo ('Choose a product type');
}

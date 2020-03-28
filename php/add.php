<?php
require_once "../classes/product-type/Book.class.php";
require_once "../classes/product-type/Furniture.class.php";
require_once "../classes/product-type/DVD.class.php";




if ($_POST['sa'] != "def") {
    
            
    
        if ($_POST['sa'] == 'book')
        {
            $Product = new Book;
            
            $Product->set_sku($_POST['sku']);
            $Product->set_name($_POST['name']);
            $Product->set_price($_POST['price']);
            $Product->set_sa($_POST['sa']);
            $Product->set_weight($_POST['weight']);
            
            $Product->set_save_query(
           "INSERT INTO items (SKU, name, price, SA, weight)
    VALUES ('{$Product->get_sku()}', '{$Product->get_name()}', '{$Product->get_price()}', '{$Product->get_sa()}', '{$Product->get_weight()}')" );
            
        }
        else if ($_POST['sa'] == 'furniture')
        {
            $Product = new Furniture;
            
            $Product->set_sku($_POST['sku']);
            $Product->set_name($_POST['name']);
            $Product->set_price($_POST['price']);
            $Product->set_sa($_POST['sa']);
            $Product->set_height($_POST['height']);
            $Product->set_width($_POST['width']);
            $Product->set_length($_POST['length']);
            
            $Product->set_save_query(
           "INSERT INTO items (SKU, name, price, SA, height, width, length)
    VALUES ('{$Product->get_sku()}', '{$Product->get_name()}', '{$Product->get_price()}', '{$Product->get_sa()}', '{$Product->get_height()}', '{$Product->get_width()}', '{$Product->get_length()}')" );
        }
        else if ($_POST['sa'] == 'DVD-disc')
        {
            $Product = new DVD;
            
            $Product->set_sku($_POST['sku']);
            $Product->set_name($_POST['name']);
            $Product->set_price($_POST['price']);
            $Product->set_sa($_POST['sa']);
            $Product->set_size($_POST['size']);
            
            $Product->set_save_query(
           "INSERT INTO items (SKU, name, price, SA, size)
    VALUES ('{$Product->get_sku()}', '{$Product->get_name()}', '{$Product->get_price()}', '{$Product->get_sa()}', '{$Product->get_size()}')" );}
    
    
                $Product->Save();

}
else{
    echo ('Choose a product type');
}
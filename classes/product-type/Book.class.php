<?php
require_once "../classes/Product.class.php";

class Book extends Product
{
    protected $weight;
    
    function __construct()
    {
        $this->attributes = array("Weight");
    }
    public function getWeight()
    {
        return $this->weight;
    }
    
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
}
?>

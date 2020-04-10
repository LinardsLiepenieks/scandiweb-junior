<?php
require_once "../classes/Product.class.php";

class DVD extends Product
{
    protected $size;
    
    function __construct()
    {
        $this->attributes = array("Size");
    }
    public function getSize()
    {
        return $this->size;
    }
    
    public function setSize($size)
    {
        $this->size = $size;
    }
    
}
?>

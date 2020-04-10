<?php
require_once "../classes/Product.class.php";

class Furniture extends Product
{
    protected $height;
    protected $width;
    protected $length;
    
    function __construct()
    {
        $this->attributes = array("Height", "Width", "Length");
    }
    public function getHeight()
    {
        return $this->height;
    }
     public function getWidth()
    {
        return $this->width;
    }
     public function getLength()
    {
        return $this->length;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function setLength($length)
    {
        $this->length = $length;
    }
    
}

?>

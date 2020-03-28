<?php
require_once "../classes/Product.class.php";

class Furniture extends Product
{
    protected $Height;
    protected $Width;
    protected $Length;

    
    public function get_height()
    {
        return $this->Height;
    }
     public function get_width()
    {
        return $this->Width;
    }
     public function get_length()
    {
        return $this->Length;
    }
    
    public function set_height($Height)
    {
        $this->Height = $Height;
    }
    public function set_width($Width)
    {
        $this->Width = $Width;
    }
    public function set_length($Length)
    {
        $this->Length = $Length;
    }
    
}

?>
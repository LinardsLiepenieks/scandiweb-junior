<?php
require_once "../classes/Product.class.php";

class DVD extends Product
{
    protected $Size;
    
    public function get_size()
    {
        return $this->Size;
    }
    
    public function set_size($Size)
    {
        $this->Size = $Size;
    }
    
}

?>
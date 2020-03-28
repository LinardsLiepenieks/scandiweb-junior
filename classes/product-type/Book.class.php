<?php
require_once "../classes/Product.class.php";

class Book extends Product
{
    protected $Weight;
    
    public function get_weight()
    {
        return $this->Weight;
    }
    
    public function set_weight($Weight)
    {
        $this->Weight = $Weight;
    }
    
}

?>
<?php
require_once "connect.class.php";
class Product extends Connect
{
    //Class variables
    private $SKU;
    private $Name;
    private $Price;
    private $SA; //Name of special attribute
    private $Save_query;
    
    public function set_sku($SKU)
    {
        $this->SKU = $SKU;
    }
    public function set_sa($SA)
    {
        $this->SA = $SA;
    }
    public function set_name($Name)
    {
        $this->Name = $Name;
    }
    public function set_price($Price)
    {
        $this->Price = $Price;
    }
    public function set_save_query($Query)
    {
        $this->Save_query = $Query;
    }
    public function get_sa()
    {
        return $this->SA;
    }
      public function get_name()
    {
        return $this->Name;
    }
      public function get_price()
    {
        return $this->Price;
    }
      public function get_sku()
    {
        return $this->SKU;
    }

    //Save the proper value for SpecialAttribute
    function Save()
    {

        $this->connectDB()
            ->query($this->Save_query);

        echo 'Saved';
    }
}

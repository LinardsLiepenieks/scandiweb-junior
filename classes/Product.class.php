<?php
class Product
{
    //Class variables
    private $SKU;
    private $name;
    private $price;
    private $specialAttribute;
    protected $attributes;
    
    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }
    public function setSpecialAttribute($specialAttribute)
    {
        $this->specialAttribute = $specialAttribute;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setSaveQuery($query)
    {
        $this->saveQuery = $query;
    }
    public function getSpecialAttribute()
    {
        return $this->specialAttribute;
    }
      public function getName()
    {
        return $this->name;
    }
      public function getPrice()
    {
        return $this->price;
    }
      public function getSKU()
    {
        return $this->SKU;
    }
       public function getAttributes()
    {
        return $this->attributes;
    }
    //Save the proper value for SpecialAttribute

}

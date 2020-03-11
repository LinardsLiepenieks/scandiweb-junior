<?php  

require_once "connect.class.php";
class Product extends Connect{

   private $SKU;
   private $Name;
   private $Price;
   private $Weight, $Height, $Width, $Length, $Size;
   private $SA; //Name of special attribute
    
    public function __construct($SKU, $Name, $Price, $SA, $Weight, $Height, $Width, $Length, $Size){
        
        $this->connectDB();
        
        $this->SKU = $SKU;
        $this->Name = $Name;
        $this->Price = $Price;
        $this->SA = $SA;
    
    //Set special attribute
    if($this->SA == 'book'){$this->Weight = $Weight;}
    else if($this->SA == 'furniture'){
        $this->Height = $Height;
        $this->Width = $Width;
        $this->Length = $Length;}
    else if ($this->SA == 'DVD-disc'){$this->Size = $Size;}
    else{
        echo ('Choose a product type');}
    }
    
    public function get_sa()
    {
        
        return $this->SA;
        
    }
    //Save the proper value for SpecialAttribute
    function Save(){
    
    
    //Insert into database
    $query = "INSERT INTO items (SKU, name, price, SA, weight, height, width, length, size)
    VALUES ('$this->SKU', '$this->Name', '$this->Price', '$this->SA', '$this->Weight', '$this->Height', '$this->Width', '$this->Length', '$this->Size')";
    $this->connectDB()->query($query);

    echo 'Saved';
}}

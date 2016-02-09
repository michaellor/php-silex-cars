<?php
class Car
{
    private $make_model;
    private $price;
    public $miles;

    function setMakeModel($new_model)
    {
      $this->make_model = $new_model;
    }

    function getMakeModel()
    {
      return $this->make_model;
    }

    function setPrice($new_price)
    {
        $this->price = (float) $new_price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function __construct($make_model, $price, $miles)
    {
        $this->make_model = $make_model;
        $this->price = $price;
        $this->miles = $miles;
    }

    function worthBuying($max_price)
    {
        if ($this->price <= $max_price) {
          return true;
        }

    }
}

?>

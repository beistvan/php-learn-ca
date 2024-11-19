<?php
class Beverage {
  public $temperature, $color, $opacity;
  function __construct($temperature, $color){
     $this->temperature = $temperature;
     $this->color = $color;
  }
  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}

$cola = new Beverage("cold", "black");
echo $cola->getInfo();
?>

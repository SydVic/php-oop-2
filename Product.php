<?php
class Product {
  public $name;
  public $price;
  public $description;

  function __construct($_name, $_price, $_description) {
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;
  }
}
?>
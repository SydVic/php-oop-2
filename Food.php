<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $animal;
  public $weight;

  function __construct($_name, $_price, $_description, $_animal, $_weight) {
    parent::__construct($_name, $_price, $_description);
    $this->animal = $_animal;
    $this->weight = $_weight;
  }
}
?>
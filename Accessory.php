<?php
require_once __DIR__ . "/Product.php";

class Accessory extends Product {
  public $category;
  public $brand;

  function __construct($_name, $_price, $_description, $_category, $_brand) {
    parent::__construct($_name, $_price, $_description);
    $this->category = $_category;
    $this->brand = $_brand;
  }
}
?>
<?php
class User {
  public $name;
  public $mail;
  public $registered;
  public $cart = [];
  protected $discount;

  function __construct($_name, $_mail, $_registered = false) {
    $this->name = $_name;
    $this->mail = $_mail;
    $this->registered = $_registered;
  }

  public function setDiscount() {
    if ($this->registered === true) {
      $this->discount = 20;
    } else {
      $this->discount = 0;
    }
  }

  public function getDiscount() {
    return $this->discount;
  }

  function addProductToCart($_product) {
    $this->cart[] = $_product;
  }
}
?>
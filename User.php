<?php
class User {
  public $name;
  public $mail;
  public $registered = false;
  public $cart = [];
  private $discount;

  function __construct($_name, $_mail) {
    $this->name = $_name;
    $this->mail = $_mail;
  }

  public function setDiscount() {
    if ($this->registered === true) {
      $this->discount = 20;
    } else {
      $this->discount = 0;
    }
  }
}
?>
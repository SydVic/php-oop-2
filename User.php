<?php
class User {
  public $name;
  public $mail;
  public $registered;
  public $cart = [];
  protected $discount;
  protected $valid_credit_card = false;

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

  function getFinalPrice() {
    $total_price = 0;
    $final_price = $total_price;
    foreach($this->cart as $item) {
      $total_price += $item->price;
    }
    $final_price = $total_price - ($total_price / 100 * $this->discount);
    return $final_price;
  }

  function printCart($product) {
    return $product->printProductInfo();
  }

  function validatePayment() {
    if ($this->valid_credit_card === true) {
      return "pagamento acettato";
    } else {
      return "carta scaduta, prova un'altro metodo di pagamento";
    }
  }
}
?>
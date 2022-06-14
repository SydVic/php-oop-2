<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Accessory.php";

$dog_food = new Food("Crocchette Purina", 22.99, "Crocchette Cane Adulto con Manzo, Cereali e Verdure", "cane", 12);
var_dump($dog_food);
?>
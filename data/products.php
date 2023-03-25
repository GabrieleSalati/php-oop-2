<?php

require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/bed.php";
require_once __DIR__ . "/../models/food.php";
require_once __DIR__ . "/../models/toy.php";

$beds = [
    new Bed("Ragnarok", new Category("Dog"), 234, "Big size doggo bed", 34000, "Big", "Cotton"),
    new Bed("Caragor", new Category("Cat"), 2, "LOTR themed catto bed", 16000, "Medium", "Dragon scales"),
];
$food = [
    new Food("Chicken nuggets", new Category("Dog"), 13000, "Delicious nuggets", 80.99, "Extra large", "Chicken"),
    new Food("Big Tuna", new Category("Cat"), 45000, "Savage tasty tuna", 149.99, "Small", "Tuna"),
];
$toys = [
    new Toy("Mega ball", new Category("Dog"), 187, "High speed mega ball", 99.99, "Yellow", "Plastic"),
    new Toy("Torpedo rat", new Category("Cat"), 82, "Torpedo shaped rat", 1500, "Grey", "Rubber")
];

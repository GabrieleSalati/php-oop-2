<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{
    public $size;
    public $main_ingredient;

    public function __construct(
        string $name,
        Category $category,
        int $availability,
        string $description,
        float $price,
        string $size,
        string $main_ingredient
    ) {
        parent::__construct($name, $category, $availability, $description, $price);
        $this->size = $size;
        $this->main_ingredient = $main_ingredient;
    }
}

<?php

require_once __DIR__ . "/product.php";

class Toy extends Product
{
    public $color;
    public $material;

    public function __construct(
        string $name,
        Category $category,
        int $availability,
        string $description,
        float $price,
        string $color,
        string $material
    ) {
        parent::__construct($name, $category, $availability, $description, $price);
        $this->color = $color;
        $this->material = $material;
    }
}

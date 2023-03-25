<?php

require_once __DIR__ . "/product.php";

class Bed extends Product
{
    public $size;
    public $material;

    public function __construct(
        string $name,
        Category $category,
        int $availability,
        string $description,
        float $price,
        string $size,
        string $material
    ) {
        parent::__construct($name, $category, $availability, $description, $price);
        $this->size = $size;
        $this->material = $material;
    }
}

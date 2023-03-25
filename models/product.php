<?php

include_once __DIR__ . "/category.php";

class Product
{
    public $name;
    public $category;
    protected $availability;
    public $description;
    protected $price;

    public function __construct(
        string $name,
        Category $category,
        int $availability,
        string $description,
        float $price
    ) {
        $this->name = $name;
        $this->category = $category;
        $this->availability = $availability;
        $this->description = $description;
        $this->price = $price;
    }
}

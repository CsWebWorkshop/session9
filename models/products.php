<?php

class Products
{
    private array $Products;

    public function __construct($Products)
    {
        $this->Products = $Products;
    }

    public function getProduct($id) {
        return $this->Products[$id];
    }

    public function ProductList() {
        return $this->Products;
    }
}

$database = new Products([
    [
        'id' => 0,
        'title' => "Apple Watch",
    'creator' => "Apple",
    'Size' => "120*150",
    'Material' => "استیل",
    'desc' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias aperiam cumque nobis ad natus, aut voluptas necessitatibus? Molestias laudantium illo, beatae in numquam minima repellat? Magnam beatae animi nisi.",
    "rating" =>  4.8,
    "ratingCount"=> 87,
    "location" => "Apple Sports | Jaksel",
    "price"=> 85.00,
    "Discount"=> 10,
    "previousPrice"=> 90.00
], [
    'id' => 1,
    'title' => "Samsung Watch",
    'creator' => "Xiami",
    'Size' => "200*150",
    'Material' => "شیشه",
    'desc' => "Lorem ",
    "rating"=> 4.8,
    "ratingCount"=> 87,
    "location" => "Apple Sports | Jaksel",
    "price"=> 85.00,
    "Discount"=> 10,
    "previousPrice"=> 90.00
    
    ]
]);

?>
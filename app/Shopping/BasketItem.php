<?php


namespace App\Shopping;

class BasketItem
{
    private string $type;
    private float $price;
    public function __construct(string $type, float $price)
    {
        $this->type = $type;
        $this->price = $price;
    }
    public function type()
    {
        return $this->type;
    }
    public function price()
    {
        return $this->price;
    }
    public function priceFormatted()
    {
       return "£" . number_format($this->price, 2);
    }
}
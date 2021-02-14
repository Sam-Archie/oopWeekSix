<?php


namespace App\Shopping;

use Illuminate\Support\Collection;

class Basket
{
    private float $total = 0;
    private Collection $items;

    public function __construct() 
    {
        $this->items = collect();
    }
    
    public function add($item) : Basket
    {
        $this->items->push($item);
        return $this;
    }

    public function total() : string
    {

        return  "£" . number_format($this->items->map(fn($item) => $item->price())->sum(), 2,);
    }

    public function items() : array
    {
        return $this->items->map(fn($item) => $item->type())->all();
    }
}
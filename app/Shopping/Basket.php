<?php


namespace App\Shopping;

class Basket
{
    private $total = 0;
    private $items = [];
    


    public function __construct()
    {
        $this->items = collect();
    }
    
    public function add($item)
    {
        $this->items->push($item);
        return $this;
    }
    // public function output()
    // {

    //     // dump($this->items);
    // }


    public function total()
    {
        //Make array a collection, map a new array that takes the price out of current collection. Total that number and return it. 
        return  "£" . number_format($this->items->map(fn($item) => $item->price())->sum(), 2,);
    }

    public function items()
    {
        return $this->items->map(fn($item) => $item->type())->all();
    }
        


        // $this->items->map(fn($item) => $item->type);


}
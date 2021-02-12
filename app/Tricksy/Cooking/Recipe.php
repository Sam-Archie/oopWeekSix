<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $name;
    private $ingredientList = [];
    private $instructions;
    private $listOfDietries =[];

    public function __construct($name)
    {
        $this->name = $name;
        $this->ingredientList = collect();

    }

    public function addIngredient($ingredient, $quantity)
    {
        //Take ingredient name form the object and quantinty from parameter and store this in ingredients list collection
        $this->ingredientList->push([
            "quantity" => $quantity,
            "ingredient" => $ingredient
            ]);
        // $this->ingredientList->push($ingredient->name());

    }

    public function addMethod($instructions)
    {
        $this->instructions = $instructions;
        return $this;
    }

    public function output()
    {
       
    }

    public function display()
    {
        $ingredients = $this->ingredientList->reduce(fn($acc, $current) => $acc .= "\n-" . "{$current["quantity"]} {$current["ingredient"]->name()}","");

        return "{$this->name} \n\n Ingredients \n\n {$ingredients} \n\n Method \n\n {$this->instructions}";
        
    
    }

    public function dietary()
    {
        
        // return $this->ingredientList[0]["ingredient"]->dietry();
    }

    public function vegan()
    {
        return $this->ingredientList[0]["ingredient"]->vegan();
    }
    
}
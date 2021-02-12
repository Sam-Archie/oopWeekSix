<?php

namespace App\Tricksy\Cooking;

class Ingredient
{
    private $dietryInfo;
    private $name;

    public function __construct($name, $dietryInfo)
    {
        $this->dietryInfo = collect($dietryInfo);
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function vegan()
    {
        return !$this->dietryInfo->contains("animal produce");
    }

    public function dietary()
    {
        return $this->dietryInfo;
    }

}
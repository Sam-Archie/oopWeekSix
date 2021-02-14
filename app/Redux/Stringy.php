<?php

namespace App\Redux;

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($string)
    {
        $this->string = "{$this->string}{$string}";
        return $this;
    }

    public function repeat($value)
    {
        $this->string = str_repeat($this->string, $value);
        return $this;
    }
    
    public function get()
    {
        return $this->string;
    }
}



// public function repeat($value)
// {
//     for($i = 0; $i < $value; $i += 1)
//     {
//        $this->repeated .= $this->string;
//     }
//     $this->string = $this->repeated;
//     return $this;
// }











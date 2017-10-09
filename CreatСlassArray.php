<?php

namespace CreateArr;

class Arr
{
    public $array = [];
    public function __construct($a, $b)
    {

        for ($i=$a; $i<$b; $i++) {
            $this -> array[$i] = rand(0, 100);
        }
        return $this -> array;
    }
}

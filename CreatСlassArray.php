<?php

namespace CreateArr;

class Arr
{
    public $a;
    public $array = [];
    public function __construct($a = 0, $b = 10)
    {
        if ($a<0 or $b<1 or $a >$b) {
            throw new \Exception("Некоректные входные данные!");
        }
        for ($i=$a; $i<$b; $i++) {
            $this -> array[$i] = rand(0, 100);
        }
        return $this -> array;
    }
}

<?php

namespace CreateArr;

class Arr
{
    public $array = [];
    public function __construct($a, $b)
    {
        if ($a<0 OR $b<1 OR $a >$b){
			throw new \Exception("Некоректные входные данные!");
		}
        for ($i=$a; $i<$b; $i++) {
            $this -> array[$i] = rand(0, 100);
        }
		
        return $this -> array;
    }
}

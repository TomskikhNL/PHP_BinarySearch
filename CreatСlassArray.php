<?php

namespace CreateArr;

class Arr
{
    public $array = [];
    public function __construct($a = 0, $b = 100)
    {
        if ($a<0 or $b<1 or $a >$b) {
            throw new \Exception("Некоректные входные данные!");
        }
        for ($i=$a; $i<$b; $i++) {
            $this -> array[$i] = rand(0, 50);
        }
        return $this -> array;
    }
    public function search($num)
    {
        $array2 = $this -> array;
        sort($array2);
        $low = 0;
        $high = count($array2) -1;
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            var_dump($mid);
            $guess = $array2[$mid];
            if ($num == $guess) {
                return $mid;
                break;
            }
            if ($num > $guess) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
    }
}

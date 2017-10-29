<?php

namespace CreateArr;

class Arr
{
    public $a;
    public $b;
    public $array = [];
    public function __construct($a = 0, $b = 15)
    {
        $this -> a = $a;
        $this -> b = $b;
        if ($a<0 or $b<1 or $a >$b) {
            throw new \Exception("Некоректные входные данные!");
        }
        for ($i=$a; $i<$b; $i++) {
            $this -> array[$i] = rand(0, 10);
        }
        return $this -> array;
    }
    public function search($num)
    {
        $low = 0;
        $high = count($this -> array) -1;
        //var_dump($high);
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            var_dump($mid);
            $guess = $this -> array[$mid];
            //var_dump($mid);
            if ($num == $guess) {
                return $mid;
                break;
            }
            if ($num > $guess) {
                $low = $mid +1;
            } else {
                $high = $mid -1;
            }
        }
        //echo "Запрошенное число:" . $num . "не найдено в массиве";
        //if ($c = 0) {
        //    echo "Запрошенное число:" . $num . "не найдено в массиве";
        //}
    }
}
$obj = new Arr();
print_r($obj);
echo $obj -> search(8) . "===========================";

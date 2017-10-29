<?php

namespace BinarySearch;

require 'CreatСlassArray.php';

try {
    $massiv = new \CreateArr\Arr();
} catch (\Exception $e) {
    echo 'Ошибка входных данных:  ',  $e->getMessage(), "\n";
}

print_r($massiv);
$massiv -> search(5);

<?php

function getMax(float $a, float $b, float $c): float{


    if ($a == $b || $a == $c || $b == $c) {
        return 0;
    }

    $max = max($a, $b, $c);

    return round($max, 3);
}

echo getMax(1.1234, 2.5678, 3.9999) . PHP_EOL; // 3.999
echo getMax(5.5555, 5.5555, 3.14) . PHP_EOL;   // 0
echo getMax(1.23456, 1.234, 1.2339) . PHP_EOL; // 1.235
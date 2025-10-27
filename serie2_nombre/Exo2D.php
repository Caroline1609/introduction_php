<?php

function getDiv($a, $b){

    if($b == 0){
        return 0;
    }
    else {
        return round($a / $b, 2);
    }


    
}

echo getDiv(20,3).PHP_EOL;
echo getDiv(20,0);
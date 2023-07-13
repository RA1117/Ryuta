<?php

function sum_numbers($min_num, $max_num){
    $result = 0;
    for ($i = $min_num; $i <= $max_num; $i++){
        $result = $result + $i;
    }
    echo $result.PHP_EOL;
}

sum_numbers(1,9);
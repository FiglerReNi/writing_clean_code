<?php

function sumUp() {
    $numbers = func_get_args();
    $sum = 0;
  foreach ($numbers as $number) {
        $sum += $number;
    }
  return $sum;
}

$total = sumUp(10, 19, -3, 22, 5, 100);
var_dump($total);
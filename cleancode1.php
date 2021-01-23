<?php
//hibás  kód
function create($m, $n){
    if($m == 'Max'){
        return function ($v) use ($n) {
           return $v < $n;
        };
    }elseif ($m == 'Min'){
        return function ($v) use ($n) {
            return $v > $n;
        };
    }else{
        return 'hiba';
    }
}

$max = create('Max', 31);
var_dump($max(15));
var_dump($max(32));

//helyes kód
function createValidator($mode, $number){
    if($mode == 'Max'){
        return function ($value) use ($number) {
            return $value < $number;
        };
    }elseif ($mode == 'Min'){
        return function ($value) use ($number) {
            return $value > $number;
        };
    }else{
        return 'hiba';
    }
}

$isBelowMax = createValidator('Max', 31);
var_dump($isBelowMax(15));
var_dump($isBelowMax(32));
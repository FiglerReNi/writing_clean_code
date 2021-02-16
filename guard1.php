<?php
//A változat
//$a = 'teszt';
//
//if($a){
//    echo $a;
//}
//
//echo 'egyéb kódok';

//B változat
//$a = '';
//
//if(!$a){
//    return;
//}
//echo $a;
//echo 'egyéb kódok';

//C változat
$tomb = [1,2,3,4,5,6];
foreach ($tomb as $item){
    if($item === 3){
        continue;
    }
    echo $item . '</br>';
}


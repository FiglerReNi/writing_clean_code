<?php

//function factoryFunctionExample($name, $age){
//    return [
//        "name" => $name,
//        "age" => $age,
//    ];
//}

$transaction = 'CREDIT_CARD';
$payment = 'refund';
$processors = exampleProcessor($transaction);
if($payment === 'payment'){
    $processors['payment']();
}else{
    $processors['refund']();
}

function exampleProcessor($transaction){
    $processors = [
        'payment' => null,
        'refund' => null
    ];

    if($transaction === "CREDIT_CARD"){
        $processors['payment'] = "pcard";
        $processors['refund'] = "rcard";
    }elseif($transaction === "PAYPAL"){
        $processors['payment'] = "ppaypal";
        $processors['refund'] = "rpaypal";
    }

    return $processors;
}

function pcard(){
    echo 'pcard';
}
function rcard(){
    echo 'rcard';
}
function ppaypal(){
    echo 'ppaypal';
}
function rpaypal(){
    echo 'rpaypal';
}


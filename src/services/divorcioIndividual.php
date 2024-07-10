<?php

function divorcioIndividual ($valor) {
    $emolumento = $frj = $issqn = $total = 'undefined';
  
    if ($valor <= 88700.99) {
        $emolumento = 549.19;
        $frj = 124.83;
        $issqn = 16.48;
    } else if ($valor < 188725.50) {
        $emolumento = 1114.50;
        $frj = 253.32;
        $issqn = 33.44;
    } else  {
        $emolumento = 2196.76;
        $frj = 499.32;
        $issqn = 65.90;
    }


    $total = $emolumento + $frj + $issqn;

    $result = [
        'emolumento' => $emolumento,
        'frj' => $frj,
        'issqn' => $issqn,
        'total' => $total
    ];

    return $result;    
}

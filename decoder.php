<?php
function solution ($roman) {
    $number = 0;

    $romanSymbols = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );


    for ($i = 0; $i < strlen($roman); $i++) {
        $currentSymbol = $roman[$i];
        $nextSymbol = ($i < strlen($roman) - 1) ? $roman[$i + 1] : '';
      
      echo $currentSymbol . "====" . $nextSymbol;
        if (isset($romanSymbols[$currentSymbol]) && isset($romanSymbols[$nextSymbol]) && $romanSymbols[$currentSymbol] < $romanSymbols[$nextSymbol]) {
            $number -= $romanSymbols[$currentSymbol];
        } else {
            $number += $romanSymbols[$currentSymbol];
        }
    }

    return $number;
}
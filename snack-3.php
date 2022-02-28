<?php

/* 
Snack 3 //! 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

//| Max numbers in array
$max_numbers = 15;


//| definiamo un array vuoto
$array = [];
var_dump($array);

/* for ($i = 0; $i < $max_numbers; $i++) {
    //| Random Number
    $randoms = rand(1, 100);
    if (in_array($randoms, $array)) {
        $array[] .= $randoms;
    }
} */


//! Altra possibilità
while (count($array) !== $max_numbers) {
    //| Random Number
    $randoms = rand(1, 100);
    if (in_array($randoms, $array)) {
        $array[] .= $randoms;
    }
}

var_dump($array);

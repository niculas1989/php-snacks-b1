<?php

/* 
Snack 3 //! 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

//| Max numbers in arra
$max_numbers = 15;


//| definiamo un array vuoto
$array = [];
var_dump($array);

for ($i = 0; $i < $max_numbers; $i++) {
    //| Random Number
    $randoms = rand(1, 100);
    $array[] .= $randoms;
}

var_dump($array);

<?php

/*

Snack 1 //! 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

/* //# prendiamo, attraverso il parametro GET, i seguenti valori: name, mail e age
$name = $_GET['name'] ?? '';

$mail = $_GET['mail'] ?? '';

$age = $_GET['age'] ?? '';

 */

$name = 'nicolas';

$mail = 'nicolasmaranzanoliberoit';

$age = 32;

if (empty($mail) || empty($name) || empty($age)) {
    echo 'Accesso negato';
} else {
    if ((strpos($mail, '@') !== false && strpos($mail, '.') !== false) && strlen($name) > 3 && is_numeric($age)) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
}

var_dump($name);

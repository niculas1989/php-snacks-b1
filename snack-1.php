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

$name = 'ni';

$mail = 'nicolas.maranzano@libero.it';

$age = '';

if (empty($mail) || empty($name) || empty($age)) {
    echo 'Accesso negato';
} else {
    if (strpos($mail, '@') === true && strpos($mail, '.') === true or strlen($name) > 3 or is_numeric($age)) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
}

var_dump($name);

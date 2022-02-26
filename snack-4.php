<?php

/* Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo. */

$paragraph = 'Gli sfortunati sono soltanto un metro di riferimento. per i fortunati, tu sei sfortunato,. così io so di non esserlo, sfortunatamente. i fortunati riconoscono la fortuna solo quando la perdono. Prendi te stesso per esempio;. ieri stavi meglio di oggi, eppure ti ci voleva oggi per capirlo. Ma oggi è arrivato e ora è tardi. Hai visto?';

$exploded = explode('.', $paragraph);

var_dump($exploded);

for ($i = 0; $i < count($exploded); $i++) {
    echo $exploded[$i] . '<br/>';
}

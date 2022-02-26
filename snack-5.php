<?php

/*
Snack 5 <br />//! 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.<br />
*/

//| Array preso dal link qui sopra:

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>

<body>
    <div>
        <h2>All'interno della classe abbiamo questa suddivisione:</h2>
        <?php for ($i = 0; $i < count($db); $i++) : ?>
            <h3><?= key($db) ?></h3>
            <ul>
                <?php for ($j = 0; $j < count($db[key($db)]); $j++) : ?>
                    <li><?= $db[key($db)][$j]['name'] . ' ' . $db[key($db)][$j]['lastname'] ?></li>
                <?php endfor; ?>
            </ul>
            <?php next($db) ?>
        <?php endfor; ?>
    </div>
</body>

</html>
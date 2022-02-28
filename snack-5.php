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


//! soluzione con FOR
/*
 <div>
        <h2>All'interno della classe abbiamo questa suddivisione:</h2>
        <?php for ($i = 0; $i < count($db); $i++) :

            $class = key($db) == 'teachers' ? 'teachers' : 'pm';
        ?>
            <h2><?= key($db) ?></h2>
            <div class=<?= $class ?>>
                <ul>
                    <?php for ($j = 0; $j < count($db[key($db)]); $j++) : ?>
                        <li><?= $db[key($db)][$j]['name'] . ' ' . $db[key($db)][$j]['lastname'] ?></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <?php next($db) ?>
        <?php endfor; ?>
    </div>
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<style>
    div {
        height: 200px;
        width: 300px;
        text-align: center;
        vertical-align: 200px;
        color: black;
    }

    .teachers {
        background-color: gray;
    }

    .pm {
        background-color: green;
    }
</style>

<body>
    <div>
        <h2>All'interno della classe abbiamo questa suddivisione:</h2>
        <?php foreach ($db as $key => $item) :

            $class = $key == 'teachers' ? 'teachers' : 'pm';
        ?>
            <h2><?= $key ?></h2>
            <div class=<?= $class ?>>
                <ul>
                    <?php foreach ($item as $i) : ?>
                        <li><?= $i['name'] . ' ' . $i['lastname'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
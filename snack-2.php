<?php

$posts = [
    '10/01/2019' =>
    [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],

    '10/02/2019' =>
    [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],

    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ]



];






/*
Snack 2 //! 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z<br />
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < count($posts); $i++) : ?>
            <li>
                <h2><?= key($posts) ?></h2>
                <?php for ($k = 0; $k < count($posts[key($posts)]); $k++) : ?>
                    <h2><?= $posts[key($posts)][$k]['title'] ?></h2>
                    <h5><?= $posts[key($posts)][$k]['author'] ?></h5>
                    <p><?= $posts[key($posts)][$k]['text'] ?></p>
                <?php endfor; ?>
            </li>
        <?php endfor; ?>
    </ul>

</body>

</html>
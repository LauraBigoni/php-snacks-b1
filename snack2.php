<!-- 
    Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
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
    '10/02/2019' => [
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
    ],
];
// var_dump($posts);
$keys = array_keys($posts);

for ($i = 0; $i < count($posts); $i++) {
    $currentPosts = $posts[$keys[$i]];

    for ($j = 0; $j < count($currentPosts); $j++) {
        $title = $currentPosts[$j]['title'];
        $author = $currentPosts[$j]['author'];
        $text = $currentPosts[$j]['text'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Snack 2</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <ul>
        <?php for ($i = 0; $i < count($posts); $i++) { ?>
            <li>
                <h3><?= $keys[$i] ?></h3>

                <?php for ($j = 0; $j < count($currentPosts); $j++) { ?>
                    <p> Titolo: <?= $title ?> </p>
                    <p> Autore: <?= $author ?> </p>
                    <p> Testo: <?= $text ?> </p>
                    <hr />
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>
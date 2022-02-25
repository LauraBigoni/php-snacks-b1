<!-- 
    Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

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

$keys = array_keys($db);
// var_dump($keys);

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
    <title>Document</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .box {
        width: max-content;
        height: 200px;
        margin: 0 auto;
    }

    .pm,
    .teachers {
        padding: 10px 20px;
        margin: 10px;
    }

    .pm {
        background-color: lightgreen;
    }

    .teachers {
        background-color: lightgrey;
    }
</style>

<body>
    <div class="box">
        <?php for ($i = 0; $i < count($db); $i++) {
            $currentItem = $db[$keys[$i]]; ?>
            <div class="<?php echo $keys[$i] ?>">
                <?= $keys[$i] ?>:

                <?php for ($j = 0; $j < count($currentItem); $j++) { ?>
                    <li> <?php echo $currentItem[$j]['name'] . ' ' . $currentItem[$j]['lastname']; ?></li>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>
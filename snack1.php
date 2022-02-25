<!-- 
Snack 1
Passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET["name"] ?? '';
$mail = $_GET["mail"] ?? '';
$age = $_GET["age"] ?? '';

// var_dump($name , $mail , $age);

((strlen($name) <= 3) || (!is_numeric($age)) || (!str_contains($mail, '.') || (!str_contains($mail, '@')))) ? $message = 'Accesso negato' : $message = 'Accesso riuscito';

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
    <title>Snack 1</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <h1>Effettua l'accesso:</h1>
    <form method="GET">
        <input type="text" placeholder="Inserisci il nome" name="name">
        <input type="text" placeholder="Inserisci l'email" name="mail">
        <input type="number" min="1" max="100" placeholder="Inserisci l'età" name="age">
        <button type="submit">Invia</button>
    </form>
    <p><?= $message ?></p>
    <br />
</body>

</html>
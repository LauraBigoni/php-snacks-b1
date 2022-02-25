<!-- 
    Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo. -->

<?php 
$paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aspernatur officia voluptatum rerum. Quibusdam laudantium quis quo corrupti cumque saepe, soluta ipsum dolores dicta omnis aperiam, temporibus incidunt et nulla. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi perferendis ducimus quis veniam necessitatibus ut voluptatibus, quas culpa, enim harum omnis sit explicabo, sequi distinctio voluptas porro! Explicabo, mollitia animi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit amet, accusantium, laboriosam non et soluta earum aut similique illum, esse quos delectus assumenda temporibus deleniti eveniet consequatur quod eum nam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum doloremque voluptates soluta vero exercitationem sit. Ut harum nemo similique, vitae facere quisquam dolorum dolor ad quaerat neque necessitatibus, nisi pariatur!';

$new_paragraph = str_replace('.' , '.<br />' , $paragraph);


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
    <title>Snack 4</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body>
    <h3>Paragrafo formattato:</h3>
    <p><?php echo $new_paragraph ?></p>
</body>
</html>
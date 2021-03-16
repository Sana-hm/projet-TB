<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> affiche tous les nombres impairs entre 0 et 150 : </h3>
    <?php

    for ($i = 1; $i <= 150; $i += 2) {
        echo  $i . " , ";
    }
    ?>

</body>

</html>
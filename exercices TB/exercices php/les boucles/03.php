<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h3>C'est un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} .</h3>
    <table>
        <tr>
            <th></th>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>

            <?php

            for ($i = 0; $i <= 12; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($s = 0; $s <= 12; $s++) {
                    echo "<td>" . $i * $s . "</td>";
                }

                echo "</tr>";
            }
            ?>

    </table>
</body>

</html>
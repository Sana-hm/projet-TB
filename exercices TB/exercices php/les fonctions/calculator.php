<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>C'est une calculatrice d'addition, de soustraction, de multiplication et de division.</h3>

    <form action="#" name="" method="get">
        <input type="number" name="num1" placeholder="number1" required>
        <input type="number" name="num2" placeholder="number2" required>
        <select name="operator" required>
            <option>choisissez une opérations</option>
            <option value="+">addition</option>
            <option value="-">soustraction</option>
            <option value="*">multiplication</option>
            <option value="/">division</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">calculate</button>
    </form>

    <?php

    function calculator()
    {
        if (isset($_GET['submit'])) {
            $fisrtNumber = $_GET['num1'];
            $secondNumber = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case '+':
                    $result = $fisrtNumber + $secondNumber;
                    break;
                case '-':
                    $result = $fisrtNumber - $secondNumber;
                    break;
                case '*':
                    $result = $fisrtNumber * $secondNumber;
                    break;
                case '/':
                    $result = $fisrtNumber / $secondNumber;
                    break;
            }
            echo '<h2 style="color:red;" > Le resultat est : ' .  $result . '</h2>';
        }
    }


    calculator();
    ?>

</body>

</html>
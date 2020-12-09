<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Simple calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        First operand :
        <input type="number" name="a" placeholder="enter the first number"></br>
        Operator :
        <select name="operator">
            <option value="+">plus</option>
            <option value="-">minus</option>
            <option value="*">nultiply</option>
            <option value="/">share</option>
        </select></br>
        Second operand :
        <input type="number" name="b" placeholder="enter the second number">
        <button type="submit">calculate</button>
    </fieldset>
</form>
</body>
</html>
<?php

function calc($num1, $operator, $num2)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;

    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num1 = $_POST['a'];
    $operator = $_POST['operator'];
    $num2 = $_POST['b'];

    $result = calc($num1, $operator, $num2);

    try {
        $result = calc($num1,$operator,$num2);
    }
    catch (Exception $exception){
        $exception ->getMessage();
        $result = $exception;
    }
    echo $result;
}





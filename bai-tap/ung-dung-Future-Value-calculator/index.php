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
    <input type="text" name="inventment-amount" placeholder="luong tien dau tu ban dau">
    <input type="text" name="yearly-interest-rate" placeholder="lai xuat nam">
    <input type="text" name="number-of-years" placeholder="so nam dau tu">
    <button type="submit">Calculate</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']){
    $inventment_amount = $_POST['inventment-amount'];
    $yearly_interest_rate = $_POST['yearly-interest-rate'];
    $number_of_years = $_POST['number-of-years'];
    $future_value = 0;

    for ($i = 0; $i < $number_of_years; $i++){
        $future_value = $inventment_amount + ($inventment_amount * ($yearly_interest_rate/100));
        $inventment_amount = $future_value;
    }
    echo $future_value;
}



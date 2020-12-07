<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>chuyển đổi số thành chữ tiếng </h2>
<form method="get">
    <input type="number" name="number" placeholder="Nhập một số"/>
    <input type = "submit" id = "submit" value = "Chuyển"/>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "G") {
    $username = $_GET["number"];
    $password = $_GET["submit"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}

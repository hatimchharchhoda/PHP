<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
    <center><h1>SWAPPING</h1><br>
    <h3>input value 1 <input type="number" name="num1"></h3>
    <h3>input value 2 <input type="number" name="num2"></h3>
    <input type="submit">
</center>
</form>
</body>
<?php
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    echo "<h3>before swap   value1: $n1 value2: $n2";
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
    echo "<br>after swap    value1: $n1 value2: $n2";
?>
</html>
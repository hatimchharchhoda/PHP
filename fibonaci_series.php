<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <center><h1>FIBONACCI  SERIES</h1><br>
    <h3>input value <input type="number" name="value"></h3></center>
</form>
</body>

<?php
 $n=$_POST["value"];
 $a=0;
 $b=1;
 $c=0;
 echo "<center><h3>the Fibonacci series : $a $b ";
 for($i=0;$i<$n-2;$i++)
 {
    $c=$a+$b;
    echo "$c ";
    $a=$b;
    $b=$c;
 }
?>
</html>
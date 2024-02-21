<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="mysql_connection.php" method="POST">
        <table>
           
                <h1>REGISTRATION FORM</h1>
            <tr>
                <td>name</td>
                <td>:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>student id</td>
                <td>:</td>
                <td><input type="text" name="sid" required></td>
            </tr>
            <tr>
                <td>number</td>
                <td>:</td>
                <td><input type="number" name="no" pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <td>enrollement number</td>
                <td>:</td>
                <td><input type="number" name="eno" required></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>:</td>
                <td><input type="radio" name="gender" value="male">male <input type="radio" name="gender" value="female">female</td>
            </tr>
            <tr>
                <td>hobby</td>
                <td>:</td>
                <td><input type="checkbox" name="hobby[]" value="reading">reading<input type="checkbox" name="hobby[]" value="writting">writting<input type="checkbox" name="hobb[]" value="walking">walking<input type="checkbox" name="hobby[]" value="talking">taking</td>
            </tr>
            <TR>
                <td><input type="submit" name="submit"></td>
            </TR>
        </table>
    </form>
</center>
</body>
</html>
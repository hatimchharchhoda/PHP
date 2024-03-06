<?php
include_once("connect.php");
$result="SELECT * FROM info3";
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$sql="UPDATE info3 SET name='$name', age='$age', email='$email' WHERE id=$id";
if(mysqli_query($conn,$sql)){
    echo "<p>information updated successfully<p>";
    echo "<a href='table.php'>Data</a>";
}
else{
    echo "HAVING AN ERROR ENTER AGAIN";
    echo "<a href='edit.php'>Form</a>";
}
?>

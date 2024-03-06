<?php
include_once("connect.php");
$result="SELECT * FROM info3";
$querry=mysqli_query($conn,$result);
$id=$_GET['y'];
$sql="DELETE FROM info3 where id=$id";
if(mysqli_query($conn,$sql)){
    echo "<p>information deleted successfully<p>";
    echo "<a href='table.php'>Data</a>";
}
?>
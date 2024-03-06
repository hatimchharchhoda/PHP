<?php
$con=mysqli_connect("localhost","root","","info3");

if(!$con)
{
    echo "Error to caonnect database".mysqli_connect();
}
else{
    echo "Database is connected";
}
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];



$query="INSERT INTO info3 (name,age,email) VALUES  ('$name','$age','$email')";

if(mysqli_query($con,$query))
{
    echo "<br>DATA RECORDED";
}
else{
    echo "DATA NOT RECORDED";
}

echo "<a href ='table.php'><br>VIEW DETAILS</a>";
 

?>
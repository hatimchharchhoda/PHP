<?php

    $con = mysqli_connect("localhost","root","","information_63");

    if(mysqli_connect_error())
    {
        echo "failed to connect with database".mysqli_connect_error();
    }
    else{
        echo "connection is establish";
    }

    $name=$_POST['name'];
    $sid=$_POST['sid'];
    $eno=$_POST['eno'];
    $no=$_POST['no'];
    $hobby=$_POST['hobby'];
    $gender=$_POST['gender'];
    $g="";
    foreach($hobby as $x){
        $g.=$x.",";
    }

    $sql="INSERT into information_63(name,sid,no,eno,gender,hobby) values('$name','$sid','$no','$eno','$gender','$g')";
    mysqli_query($con,$sql);
?>
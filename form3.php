<!DOCTYPE html>
<html lang="en">
<head>

<?php
    $nameErr=$emailErr=$noErr=$pincodeErr=$passErr="";
    $name=$email=$no=$pass=$pincode="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name']))
    {
        $nameErr= "please enter your name";
    }
    else{
        if(!preg_match("/^[a-zA-Z]*$/",$_POST['name'])){
            $nameErr ="only letters and white space allowed";
        }
        else{
            $name=$_POST['name'];
        }
    }

    if(empty($_POST['email']))
    {
        $emailErr= "please enter your email";
    }
    else{
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $emailErr = "the email address is incorrect";
        }
        else{
            $email=$_POST['email'];
        }
    }

    if(empty($_POST['pass']))
    {
        $passErr= "please enter your password";
    }
    else{
        if(strlen($_POST['pass']<8))
        {
            $passErr= "the minimum length 8 is required";
        }
        else{
            $pass=$_POST['pass'];
        }
    }

    if(empty($_POST['no']))
    {
        $noErr= "please enter your number";
    }
    else{
        if(strlen($_POST ['no'])!=10)
        {
            $noErr = "please enter the number properly";
        }
        else{
            $no=$_POST['no'];
        }
    }

    if(empty($_POST['pincode']))
    {
        $pincodeErr= "please enter your pincode";
    }
    else{
        if(strlen($_POST['pincode'])!=6){
            $pincodErr ="please enter proper pincode";
        }
        else{
            $pincode=$_POST['pincode'];
        }
    }
}
?>
<style>
    span{
        color : red;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <center>
            <h1><strong>REGISTRATION FORM</strong></h1>
            <span>*required field</span>
            <table>
                <tr>
                    <td>Enter your name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>"><span><?php  echo "*".$nameErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter your email </td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>"><span><?php  echo "*".$emailErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter your password </td>
                    <td>:</td>
                    <td><input type="text" name="pass" value="<?php echo $pass; ?>"><span><?php  echo "*".$passErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter your number </td>
                    <td>:</td>
                    <td><input type="number" name="no" value="<?php echo $no; ?>"><span><?php  echo "*".$noErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter your pincode </td>
                    <td>:</td>
                    <td><input type="number" name="pincode" value="<?php echo $pincode; ?>"><span><?php  echo "*".$pincodeErr; ?></span></td>
                </tr>
            </table>
                <input type="submit" name="submit">
        </center>
    </form>
</body>

</html>
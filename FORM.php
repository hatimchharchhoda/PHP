<html>
    <head>
        <title>REGESTRATION</title>
    </head>
    <style>
    body{
       background-color: rgb(189 189 189);
    }
    form{
        animation: ;
    }
    h1{
        color: white;
        font-size: 50;
    }
    table {
    color: #f9fb89;
    background-color: #003143;
    font-size: 20px;
    padding: 70px 10px 10px 10px;
    
    }
    button{
    border-radius: 7px;
    background-color: #ffffcd;
    border-color: black;
    font-size: 18px;
    }
    </style>
    
    <body>
       
        <center><h1>REGESTRATION FORM</h1></center>
        <form name="my_form" action = "redirect.php" onsubmit="return validateform()" method="post"><center>
            <table>
                <tr>
                <td><b>USER NAME</b></td>
                <td>:<input type="text" id="name" name="name" required>*</td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td>:<input type="password" id="pw" name="pw" required>*</td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b></td>
                    <td>:<input type="password" id="cpw" name="C_password" required>*</td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td>:<input type=radio id="male" name="gender" value="male" checked>Male  <input type=radio id="female" name="gender" value="female">Female </td>
                </tr>
                <tr>
                    <td><b>Select country</b></td>
                    <td>:<select id="country" name="country"><option value="india">INDIA</option>
                        <option value="canada">Canada</option>
                       <option value="USA">USA</option>
                       <option value="Germoney">Germoney</option>
                       <option value="south korea">South korea</option>
                       <option value="Uk">Uk</option></select>*</td>
                </tr>
                <tr>
                    <td><b>Email-id</b></td>
                    <td>:<input type="email" name="email" id="mail" required>*</td>
                </tr>
                
                <tr>
                    <td><b>Address</b></td>
                    <td>:<textarea name="add" id="add" required rows="3" cols="20"></textarea>*</td>
                </tr>
                <tr>
                    <td><b>Student id</b></td>
                    <td>:<input type="number" name="s_id" id="s_id" required>*</td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="button" name="button" id="button">Submit</button></td>
                </tr>

            </table></center>
        </form>
    </body>
</html>
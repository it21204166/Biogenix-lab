<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

<?php



$server = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "demo";

    mysqli_connect($server, $dbuser,$dbpass);
    

    if(isset($_POST['fname'])){

       $uname=$_POST['fname'];
       $dbpass=$_POST['password'];

       $sql="select * from loginform where user='".$uname."'AND password='".$password."' limit 1 ";

       $result=mysql_query($sql);

       if(mysql_num_rows($result)==1){
           echo " You Have Successfully Login";
           exit();
       }
       else{
           echo "You Have Enterd Incorrect Password";
           exit();
       }
    }

?>



</head>
<body>

<div class="men">
                <ul>
                    <li><a href="registr.php">REGISTER</a></li>
                    <li><a href="editprofile.php">EDIT PROFILE</a></li>
                    
                </ul>
            </div>
    
    <header id="showcase">
        <h1>Welcome to BIOGENIX MEDI LAB</h1>
        <p>This is to our login page. enter the username and password and access your laboratory services</p>
        <br>
        <br>
        <div id="nam">
        <form action="upload.php" method="POST">
            
            <label for="fname">Username or email:</label><br>
            <input type="text" id="fname" name="fname" placeholder="username or email"><br><br>
            <label for="password">Enter Password:</label><br>
            <input type="text" id="Password" name="password" placeholder="enter password">
        </form><br>
        <div class="submit">
            <a href="patient.php" class="button">Log In</a><br><br>
            <a href="fogget_password.php">Forgot your password?</a>
        </div>
        </div>

    </header>
</body>
</html>
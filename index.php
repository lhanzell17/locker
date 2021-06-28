<?php
session_start();
include("php/command.php");

$error=" ";

if(isset($_POST['submit'])){
   
 $user= $_POST['user'];
 $pass= $_POST['pass'];
 if(!empty($user) && !empty($pass))
 {
            $query= mysqli_query($conn,"SELECT * FROM user_acc WHERE username = '$user' AND password = '$pass'");
            $rows = mysqli_num_rows($query);  
            if($rows == 1)
            {
            header("Location:main.php");
            }
            else
            {
             $error = "Invalid Password or Username.";
            }

}
else{
    $error = "Please Input Username and Password.";
    }




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stash Logs by Lhanz</title>

    <section>
    <img class="logo" src="css/image/asadal-logo.png">

    <form method="post"> 
    <p class="label">Username</p>
    <input type="text" name="user"class="usertext"placeholder="Username" required><br>
    <p class="label">Password</p>
    <input type="password" name="pass"class="passtext" placeholder="Password" required><br>
    <br><span class = "Error"><?php echo $error?> </span><br>
    <button type="submit"class="submit" name="submit">Login</button>
    <p class="forgot">Forgot password? Contact <a href="">Lhanz</a></p>
    </form>
    </section>


</head>
<body>
    
</body>
</html>
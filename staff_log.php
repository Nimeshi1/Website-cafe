<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="customer_log.css">
    <title>Customer sLogin</title>
    <script src ="l.js"></script>
</head>
<body>
    <div class="center">
        <h1>Login</h1>

        <form action="#" method="POST" autocomplete="off" id="loginForm">

        <div class="form">
            <input type="text" id="username" name="username" class="textfield" placeholder="Username" required>
            <input type="password" id="password" name="password" class="textfield" placeholder="Password" required>

            <div class="forgetpass"><a href="#" class="link" onclick="message()">Forget Passsword ?</a></div>

            <input type="submit" name="login" value="Login" class="btn">

            <div class="signup">New Member?<a href="customer_reg.php" class="link">&nbsp;SignUp Here</a></div>

        </div>
    </div>
    </form>
    
    <script>
        function message()
        {
            alert("toh Password yad karo");
        }
    </script>
</body>
</html>

<?php
include "includes/dbh.inc.php";

if(isset($_POST['login'])){
   $username = $_POST['username'];
   $pwd = $_POST['password'];

//    $query ="SELECT * FROM `customer` WHERE email =  `$username` && password = `$pwd` ";
   $query="SELECT * FROM `staff` WHERE email ='$username' && password ='$pwd' limit 1";  

   $data = mysqli_query($conn, $query);

   $total = mysqli_num_rows($data);

   if($total == 1){
    // echo "<script>alert('Login Successful')</script>";
    header('location:staff_dashboard.html');
   }
   else{
    echo "<script>alert('Login Failed')</script>";
   }

}




?>
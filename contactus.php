<?php
include "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href ="contact.css">
    <title>PHP CRUD OPERATIONS</title>
</head>
<br><br><br><br><br><br>

<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data" >
        <div class="title">
            Contact Form
        </div>

        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="f_name" required>
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="l_name"required >
            </div>

            
            <div class="input_field">
                <label>Email Address</label>
                <input type="text" class="input" name="email" required>
            </div>
            
            <div class="input_field">
                <label>Contact Number</label>
                <input type="text" class="input" name="c_no" required >
            </div>
            
               
            <div class="input_field">
                <label>Text your message</label>
                <textarea class="textarea" name="message" required></textarea>

            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>

                    <span class="checkmark"></span>
                </label>
                <p>Agree to all informations correct</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>

        </div>
        </form>
    </div>
</body>
</html>

<?php
include "includes/dbh.inc.php";
    if(isset($_POST['submit'])) {

       
   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $email = $_POST['email'];
   $c_no = $_POST['c_no'];
   $message = $_POST['message'];


// $query="INSERT INTO `contact`(`id`, `f_name`, `l_name`, `email`, `c_no`, `issue`, `yn`, `message`) VALUES (' $fname','$lname','$email','$c_no',' $issue ','$yn ','$message ')";
$query="INSERT INTO `contact`(`id`, `f_name`, `l_name`, `email`, `c_no`, `message`) VALUES ('[value-1]','$f_name','$l_name','$email','$c_no','$message')";
$data=mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Thank You!!!')</script>";
}
else{
    echo "<script>alert('Failed')</script>";


}
}

?>
<?php
include "includes/dbh.inc.php";
$id = $_GET['id'];


if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $c_no = $_POST['c_no'];
    $issue = $_POST['issue'];
    $yn = $_POST['yn'];
    $message = $_POST['message'];
    // $sql="UPDATE `member` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`emp_id`='$emp_id',`designation`='$designation',`gender`='$gender' WHERE id=$id";
    $sql ="UPDATE `contact` SET `id`='[value-1]',`f_name`='$f_name',`l_name`='$l_name',`email`='$email',`c_no`='$c_no',`issue`='$issue',`yn`='$yn',`message`='$message' WHERE 1";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: contact_display.php?msg=Data updated successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href ="contact.css">

    


    <title>Crud Aplication</title>
</head>

<body>
   
<br><br><br><br><br><br><br>



        <?php
        $sql = "SELECT `id`, `f_name`, `l_name`, `email`, `c_no`, `issue`, `yn`, `message` FROM `contact` WHERE 1
";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
        <form action="#" method="POST" enctype="multipart/form-data" >
        <div class="title">
           Edit Contact Form
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
                <label>Issue Type</label>
                <div class="custom_select">
                <select name="issue" required>
                    <option value="">Select</option>
                    <option value="Reservation Issues">Reservation Issues</option>
                    <option value="Order Issues">Order Issues</option>
                    <option value="Payment Issues">Payment Issues</option>
                    <option value="Technical Issues">Technical Issues</option>
                    <option value="Other Issues">Other Issues</option>
                </select>
            </div>
            
            </div>
            
            <div class="input_field"> 
                <label style="margin-right: 100px;"> Are you a previous customer?</label>
                <input type="radio" name="yn" value="Yes"required>Yes</label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                <input type="radio" name="yn" value="No"required>No</label>
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
    </div>





    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>






</body>

</html>
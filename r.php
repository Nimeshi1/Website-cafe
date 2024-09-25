<?php
include "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href ="customer_reg.css">
    <title>PHP CRUD OPERATIONS</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data" >
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label> Name</label>
                <!-- <input type="text" class="input" name="fname" > -->
                <input type="text" class="input" name="name" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="number"required >
            </div>
            
            <div class="input_field">
                <label>No of Guests</label>
                <input type="number" class="input" name="guests" required>
            </div>
            
            
            
            <div class="input_field">
                <label>Select Day</label>
                <div class="custom_select">
                <!-- <select name="gender"> -->
                <select name="day" required>
                    <option value="">Select</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>
            </div>

            <div class="input_field">
                <label>Select Time</label>
                <div class="custom_select">
                <!-- <select name="gender"> -->
                <select name="time" required>
                    <option value="">Select</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Brunch">Brunch</option>
                    <option value="Linner">Linner</option>
                </select>
            </div>
            </div>
        

            <div class="input_field terms">
                <label class="check">
                    <!-- <input type="checkbox" > -->
                    <input type="checkbox" required>

                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
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
// if($_POST['submit']){
    if(isset($_POST['submit'])) {
    $name = $_POST['name'];
   $number = $_POST['number'];
   $guests = $_POST['guests'];
   $day = $_POST['day'];
   $time = $_POST['time'];




$query ="INSERT INTO `reservations`(`id`, `name`, `number`, `guests`, `day`, `time`) VALUES (NULL,'$name ','$number',' $guests',' $day','$time')";

$data=mysqli_query($conn,$query);

if($data){
    echo "<script>alert('reservation added successfully')</script>";
}
else{
    echo "<script>alert('Failed')</script>";


}
}

    


?>
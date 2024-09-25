<?php
include "includes/dbh.inc.php";
$id = $_GET['id'];

$query = "SELECT * FROM `reservations` WHERE id = '$id'";
$data = mysqli_query($conn, $query);

// $total =mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href ="customer_reg.css">
    <title>RESERVATIONS</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Update Reservations Details
        </div>

        <div class="form">
            <div class="input_field">
                <label> Name</label>
                <!-- <input type="text" class="input" name="fname" > -->
                <input type="text" value="<?php echo $result['name'] ?>" class="input" name="name" required>

            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text"  value="<?php echo $result['number'] ?>"  class="input" name="number"required >
            </div>
            
            <div class="input_field">
                <label>No of Guests</label>
                <input type="text" value="<?php echo $result['guests'] ?>" class="input" name="guests" required>
            </div>
            
            
            
            <div class="input_field">
                <label>Select Day</label>
                <div class="custom_select">

                <!-- <select name="gender"> -->
                <select name="day" required>
                    <option value="">Select</option>

                    <option value="Monday"
                    <?php
                    if($result['day'] == 'Monday'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Monday</option>

                    <option value="Tuesday"
                    <?php
                    if($result['day'] == 'Tuesday'){
                        echo "selected";
                    }
                    ?> 
                    >          
                    Tuesday</option>

                    
                    <option value="Wednesday"
                    <?php
                    if($result['day'] == 'Wednesday'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Wednesday</option>

                    <option value="Thursday"
                    <?php
                    if($result['day'] == 'Thursday'){
                        echo "selected";
                    }
                    ?> 
                    >          
                    Thursday</option>

                    
                    <option value="Friday"
                    <?php
                    if($result['day'] == 'Friday'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Friday</option>

                    <option value="Saturday"
                    <?php
                    if($result['day'] == 'Saturday'){
                        echo "selected";
                    }
                    ?> 
                    >          
                    Saturday</option>

                    
                    <option value="Sunday"
                    <?php
                    if($result['day'] == 'Sunday'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Sunday</option>
                    
                </select>

            </div>
            </div>
            
            
       <div class="input_field">
                <label>Select Time</label>
                <div class="custom_select">

                <!-- <select name="gender"> -->
                <select name="time" required>
                    <option value="">Select</option>

                    <option value="Breakfast"
                    <?php
                    if($result['time'] == 'Breakfast'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Breakfast</option>

                    <option value="Lunch"
                    <?php
                    if($result['time'] == 'Lunch'){
                        echo "selected";
                    }
                    ?> 
                    >          
                    Lunch</option>

                    
                    <option value="Dinner"
                    <?php
                    if($result['time'] == 'Dinner'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Dinner</option>

                    <option value="Brunch"
                    <?php
                    if($result['time'] == 'Brunch'){
                        echo "selected";
                    }
                    ?> 
                    >          
                    Brunch</option>

                    
                    <option value="Linner"
                    <?php
                    if($result['time'] == 'Linner'){
                        echo "selected";
                    }
                    ?> 
                    >            
                    Linner</option>                    
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
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>

        </div>
        </form>
    </div>
</body>
</html>

<?php
include "includes/dbh.inc.php";
// if($_POST['submit']){
    if(isset($_POST['update'])) {

        $name = $_POST['name'];
        $number = $_POST['number'];
        $guests = $_POST['guests'];
        $day = $_POST['day'];
        $time = $_POST['time'];

// $query = "UPDATE `reservations` SET `id`='$id',`fname`='$fname',`lname`='$lname',`password`='$pwd',`conpassword`='$cpwd',`gender`='$gender',`email`='$email',`phone`='$phone',`method`='$method',`address`='$address' WHERE id=$id";
$query ="UPDATE `reservations` SET `id`='$id',`name`='$name',`number`='$number ',`guests`='$guests',`day`='$day',`time`='$time' WHERE id=$id";
$data=mysqli_query($conn,$query);

if($data){
    echo "<script>alert('reservation Updated Successfully')</script>";
   
}
else{
    echo "<script>alert('Failed to Update')</script>";


}
}

// else{
//     echo "<script>alert('Fill the form first');</script>";
    
// }


?>
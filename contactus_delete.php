<?php
include "includes/dbh.inc.php";
$id = $_GET['id'];
$sql = "DELETE FROM `contact` WHERE id= $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: contact_display.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}


?>

<!-- //successfully dele contactus message -->
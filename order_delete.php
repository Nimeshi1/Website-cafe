<?php
include "includes/dbh.inc.php";
$id = $_GET['id'];
$sql = "DELETE FROM `order` WHERE id= $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: order_details.php?msg=Record Cancelled Successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}


?>

<!-- //successfully delete orders details -->
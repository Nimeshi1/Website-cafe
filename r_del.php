<?php
include "includes/dbh.inc.php";
$id = $_GET['id'];
$sql = "DELETE FROM `reservations` WHERE id= $id";
$result = mysqli_query($conn, $sql);
if($result){
    // header("Location: r_dis.php?msg=Record deleted successfully");
    echo "<script>alert('reservation Deleted Successfully')</script>";

}
else {
    echo "Failed: " . mysqli_error($conn);
}


?>

<!-- //successfully delete a reservation -->
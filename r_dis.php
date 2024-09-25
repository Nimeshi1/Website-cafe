<?php
echo "Welcome" ;

?>
<html>
    <head>
        <title>Customer Display</title>
        <style>
            body{
                background: #d071f9;
            }
            table{
                background-color: white;
            }
            .update,.delete, .confirm
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 85px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete
            {
                background-color: red; 
            }
        </style>
    </head>
</html>


<?php
include "includes/dbh.inc.php";
error_reporting(0); //remove errors

$query = "SELECT * FROM `reservations`";
$data = mysqli_query($conn, $query);

$total =mysqli_num_rows($data);









// $total =mysqli_num_rows($data);
// echo $total;



if($total != 0){
    // echo "Table has records";
    ?>
    <h2 align = "center"><mark>Displaying All Records</mark></h2>
   
    <a href="r.php"><input type="submit" name="" value="Add New Reservations" style="background: blue; color:white; height:40px; width:200px; margin-top: 20px; font-size:18px; border=0; border-radius:10px; cursor:pointer;"></a>
    <a href="admin_dash.html"><input type="submit" name="" value="Go Back" style="background: blue; color:white; height:40px; width:200px; margin-top: 20px; font-size:18px; border=0; border-radius:10px; cursor:pointer;"></a>


  
  
    <br><br>
    <center><table border="3" cellspacing ="7" width="100%">
        <tr>
        <th width ="5%">ID</th>
        <th width ="20%"> Name</th>
        <th width ="15%">Phone Number </th>
        <th width ="15%">No of Guests</th>
        <th width ="11%">Select Day </th>
        <th width ="11%">Select Time </th>
        <th width ="22%">Operations </th>


        </tr>
    <?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo "<tr>
             <td>".$result['id']."</td>
             <td>".$result['name']."</td>
             <td>".$result['number']."</td>
             <td>".$result['guests']."</td>
             <td>".$result['day']."</td>
             <td>".$result['time']."</td>

             <td><a href='r_up.php?id=$result[id]'><input type='submit'value='Update' class='update' onclick = 'return checkupdate()'></a>

             <a href='r_del.php?id=$result[id]'><input type='submit'value='Delete' class='delete' onclick = 'return checkdelete()'></a>

             <a href='r_con.php?id=$result[id]'><input type='submit'value='Confirm' class='confirm' onclick = 'return checkconfirm()'></a></td>

             </tr>";

    }
}
else{
    echo "No records found";
}

?>
</table></center>

<a href="home.php"><input type="submit" name="" value="LogOut" style="background: blue; color:white; height:40px; width:100px; margin-top: 20px; font-size:18px; border=0; border-radius:10px; cursor:pointer;"></a>
<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this reservation ?');
    }
    function checkupdate() {
        return confirm('Are you sure you want to update this reservation ?');
    }
    function checkconfirm() {
        return confirm('Are you sure you want to confirm this reservation ?');
    }
</script>
<!-- echo $result['fname']. " ".$result['lname']." ".$result['gender']." ". $result['email']." ".$result['phone']." ".$result['address']." <br>"; -->




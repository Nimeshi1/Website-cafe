<?php
echo "Welcome" ;


?>


<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: #d071f9;
            }
            table{
                background-color: white;
            }
            .update,.delete
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 80px;
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
error_reporting(0); 

$query = "SELECT * FROM `table`";
$data = mysqli_query($conn, $query);

$total =mysqli_num_rows($data);













if($total != 0){
    // echo "Table has records";
    ?>
    <h2 align = "center"><mark>Displaying All Records</mark></h2>
    <a href="customer_reg.php"><input type="submit" name="" value="ADD NEW" style="background: blue; color:white; height:45px; width:150px; margin-top: 20px; font-size:18px; border=0; border-radius:5px; cursor:pointer;"></a>
    <a href="admin_dash.html"><input type="submit" name="" value="Go Back" style="background: blue; color:white; height:45px; width:150px; margin-top: 20px; font-size:18px; border=0; border-radius:5px; cursor:pointer;"></a>

<br><br>
    <center><table border="3" cellspacing ="7" width="100%">
        <tr>
        <th width ="5%">ID</th>
        <th width ="8%">First Name</th>
        <th width ="8%">Last Name</th>
        <th width ="10%">Gender</th>
        <th width ="20%">Email </th>
        <th width ="10%">Phone Number </th>
        <th width ="24%">Address</th>
        <th width ="20%">Operations</th>

        </tr>
    <?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo "<tr>
             <td>".$result['id']."</td>
             <td>".$result['fname']."</td>
             <td>".$result['lname']."</td>
             <td>".$result['gender']."</td>
             <td>".$result['email']."</td>
             <td>".$result['phone']."</td>
             <td>".$result['address']."</td>

             <td><a href='update_design.php?id=$result[id]'><input type='submit'value='Update' class='update'></a>

             <a href='delete_design.php?id=$result[id]'><input type='submit'value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
             </tr>";

    }
}
else{
    echo "No records found";
}

?>
</table></center>

<a href="admin_dash.html"><input type="submit" name="" value="LogOut" style="background: blue; color:white; height:45px; width:150px; margin-top: 20px; font-size:18px; border=0; border-radius:5px; cursor:pointer;"></a>
<script>
    function checkdelete() {
        return confirm('Are you sure you want to delet this record ?');
    }
</script>




<?php
    echo "<script>alert('Record Confirmed Successfully')</script>";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    <title>ORDER DETAILS</title>

</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color: #00ff5573;">
        ORDER DETAILS
    </nav>

    <div class="container">
      <?php
      if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      
}
      
  ?>
         
  <a href="order_details.php"class="btn btn-danger mb-3">Go Back</a>
  <!-- <a href="admin_dash.html"class="btn btn-dark mb-3">Go Back</a> -->




  <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th width ="20%">Id</th>
      <th width ="20%">Name</th>
      <th width ="20%">Contact Number</th>
      <th width ="20%">Email</th>
      <th width ="20%">Payment Method</th>
      <th width ="20%">Flat</th>
      <th width ="20%">Street</th>
      <th width ="20%">City</th>
      <th width ="20%">State</th>
      <th width ="20%">Country</th>
      <th width ="20%">Pin Code</th>
      <th width ="40%">Total Products</th>
      <th width ="20%">Total Price</th>
    </tr>
   </thead>
   <tbody>
    <?php
    include "includes/dbh.inc.php";
    $sql = "SELECT * FROM `order` WHERE 1 ";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
     <td><?php echo $row['id'] ?></td>
     <td><?php echo $row['name'] ?></td>
     <td><?php echo $row['number'] ?></td>
     <td><?php echo $row['email'] ?></td>
     <td><?php echo $row['method'] ?></td>
     <td><?php echo $row['flat'] ?></td>
     <td><?php echo $row['street'] ?></td>
     <td><?php echo $row['city'] ?></td>
     <td><?php echo $row['state'] ?></td>
     <td><?php echo $row['country'] ?></td>
     <td><?php echo $row['pin_code'] ?></td>
     <td><?php echo $row['total_products'] ?></td>
     <td><?php echo $row['total_price'] ?></td>
    </tr>
        <?php
    }
        ?>


    
   
  </tbody>
</table>


    </div>

    


        




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    <title>Crud Aplication</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color: #00ff5573;">
        Display contact information
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
         
  <a href ="contactus.php"class="btn btn-danger mb-3">Add New</a>
  <a href="admin_dash.html"class="btn btn-dark mb-3">Go Back</a>





  <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
   </thead>
   <tbody>
    <?php
    include "includes/dbh.inc.php";
    $sql = "SELECT * FROM `contact` WHERE 1";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
     <td><?php echo $row['id'] ?></td>
     <td><?php echo $row['f_name'] ?></td>
     <td><?php echo $row['l_name'] ?></td>
     <td><?php echo $row['email'] ?></td>
     <td><?php echo $row['c_no'] ?></td>
     <td><?php echo $row['message'] ?></td>


      
      <td> 
        <a href="contact_edit.php?id=<?php echo $row['id']?>" 
        class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        
        <a href="contactus_delete.php?id=<?php echo $row['id']?>" 
        class="link-dark"><i class="fa-solid fa-trash fs-5"></i></>

      </td>
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
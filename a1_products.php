<?php

include "includes/dbh.inc.php";

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
      //  $message[] = 'product already added to cart';
      echo "<script>alert('product already added to cart')</script>";


    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      //  $message[] = 'product added to cart succesfully';
      echo "<script>alert('product added to cart successfully)</script>";
      echo "<script>alert('')</script>";

    }
 
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS PAGE</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="admin1_style.css">


</head>
<body>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'a1_header.php'; ?>

<div class="container">
    <section class="products">
        <h1 class="heading">latest products</h1>
        <div class="box-container">
            <?php

            // $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE 1");
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_products)){
             ?>

             <form action="" method="post">
                <div class="box">
                    <img src="uploaded_images/<?php echo $fetch_product['image']; ?>"alt="">
                    <h3><?php echo $fetch_product['name']; ?></h3>
                    <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>" >
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>" >
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>" >
                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">

  
                </div>
             </form>

             <?php
             
            };
        };


             ?>

        </div>


    </section>

</div>


<!-- custom js file link  -->
<script src="script.js"></script>
    
</body>
</html>
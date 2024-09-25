<?php
include "includes/dbh.inc.php";


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $guests = $_POST['guests'];
    $day = $_POST['day'];
    $time = $_POST['time'];



        $sql ="INSERT INTO `reservations`(`id`, `name`, `number`, `guests`, `day`, `time`) VALUES (NULL,'$name ','$number',' $guests',' $day','$time')";
    
        $result = mysqli_query($conn, $sql);
    
        if($result) {
            echo "<script>alert('Reservation Added Successfully')</script>";
        }
        else {
            echo "Failed: ". mysqli_error($conn);
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe website</title>
    <link rel="stylesheet" href="web_style.css">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<style>
    .container .header .nav .user img{
    width: 100px;
    height: 100px;
    align-items: center;
}
</style>



<!--Navbar-->
<header>
    <a href="#" class="logo">
        <img src="img/pic21.jpg" alt="">
    </a>
<!--Links-->
<ul class="navbar">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About us</a></li>
    <li><a href="#menu">Our Menu</a></li>
    <li><a href="#reservation">Reservation</a></li>
    <li><a href="#contact">Contact Us</a></li>

</ul>
<!--icons-->
<div class="header-icon">
    <a href="customer_log.php"><i class='bx bxs-user' id="admin-icon"></i></a>
    <a href="search/indexxxx.html"><i class='bx bx-search-alt-2' id="search-icon"></i></a>
    
</div>




</header>
<!--home-->
<section class="home" id="home">
    <div class="home-text">
        <h1>The Gallery<br> Cafe</h1>
        <p>Come and enjoy our special and delicious food and beverages</p>
        <a href="#menu" class="btn">Our Menu</a>

    </div>
    <div class="home-img">
        <img src="img/pic27.jfif" alt="">
    </div>
</section>
<!--About-->
<section class="about" id="about">
    <div class="about-img">
    <img src="img/pic28.jpg" alt="">
    </div>
    <div class="about-text">
        <h2>About Us</h2>
        <p>We are a bunch of hardworking, experienced and dynamic professionals who provide quality 
           business solutions to our clients. Our commitment to promote close relationships between
           job creators and job seekers is what makes us one of the best to deal with in this industry.
           We look forward to providing you with the best of service in days to come.</p>
        <p>To deliver world class professional requirement solutions to employers & job seekers in
           every range of discipline.</p>
        <p>Our mission statement reflects our commitment to offering the highest quality service to our 
           clients.Candidates and all the other stakeholders we work with, as well as the delivery of 
           our corporate social responsibility program to help the wider community .It demonstrate how
           we continually strive to go above and beyond to provide exceptional service.</p><br>          
    <a href="#reservation" class="btn">Book a Table</a>    
    </div>    
</section>

<!--Menu-->
<section class="menu" id="menu">
    <div class="heading">
        <h2>Our Menu</h2>
    </div>
    <!--container-->
    <div class="product-container">
        <div class="box">
         <img src="img/pic14.jpg" alt="">
            <h3>Rice & Curry</h3>
            <div class="content">
                <span>Rs.350/=</span>
            </div>
        </div>
        <div class="box">
            <img src="img/pic15.jpg" alt="">
               <h3>Kottu</h3>
               <div class="content">
                   <span>Rs.700/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic16.jpg" alt="">
               <h3>Hoppers</h3>
               <div class="content">
                   <span>Rs.200/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic17.jpeg" alt="">
               <h3>String Hoppers</h3>
               <div class="content">
                   <span>Rs.300/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic18.jfif" alt="">
               <h3>Curd & Honey</h3>
               <div class="content">
                   <span>Rs.400/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic20.jfif" alt="">
               <h3>Fruit Salad</h3>
               <div class="content">
                   <span>Rs.250/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic3.jpg" alt="">
               <h3>Pizza</h3>
               <div class="content">
                   <span>Rs.1550/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic2.jpg" alt="">
               <h3>Lasagna</h3>
               <div class="content">
                   <span>Rs.950/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic4.jpg" alt="">
               <h3>Spaghetti</h3>
               <div class="content">
                   <span>Rs.1150/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic5.jpg" alt="">
               <h3>Risotto</h3>
               <div class="content">
                   <span>Rs.2250/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic6.jfif" alt="">
               <h3>Gelato</h3>
               <div class="content">
                   <span>Rs.250/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic7.jpeg" alt="">
               <h3>Tiramisu</h3>
               <div class="content">
                   <span>Rs.350/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic10.jpg" alt="">
               <h3>Dumplins</h3>
               <div class="content">
                   <span>Rs.450/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic11.jpg" alt="">
               <h3>Honey sesame Chicken</h3>
               <div class="content">
                   <span>Rs.650/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic12.jpg" alt="">
               <h3>Fried Rice</h3>
               <div class="content">
                   <span>Rs.800/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic13.jpg" alt="">
               <h3>Wontons Noodles</h3>
               <div class="content">
                   <span>Rs.750/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic8.jpg" alt="">
               <h3>Almond Cookies</h3>
               <div class="content">
                   <span>Rs.350/=</span>
               </div>
           </div>
           <div class="box">
            <img src="img/pic9.png" alt="">
               <h3>Yellow Pea Cake</h3>
               <div class="content">
                   <span>Rs.300/=</span>
               </div>
           </div>
    </div>
</section>
<!--customers-->
<section class="custormers" id="customers">
    <div class="heading">
        <h2>Our Customer's</h2>
    </div>
    <!--container-->
    <div class="customers-container">
        <div class="box">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>Food was amazing and really enjoyed the cozy ambiance. The staff was very friendly and 
                hospitable. The experience was worth the price!</p>
            <h2>Chanaka Madushan</h2>
            <img src="img/pic30.jfif">
        </div>
        <div class="box">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>Fantastic service, glasses were never empty. Food was hot and came out quickly. Quality was
                 also very high. Would recommend.</p>
            <h2>Kishu Perera</h2>
            <img src="img/pic31.jpg">
        </div>
        <div class="box">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>I am vegan and Chef Jayson prepared an absolutely spectacular hot and sour soup followed by
               a Italian styled vegetable dish with an egg~free fried rice. My friend had the Szechuan pork 
               which I am told was also really good. Wonderful ambiance and a great view of downtown and 
               the water. </p>
            <h2>Sheri De silva</h2>
            <img src="img/pic32.jpg">
        </div>
    </div>
</section>
<!--reservation-->
<section class="reservation" id="reservation">
 <div class="book-img">
        <img src="img/pic34.jfif" alt="">
    </div>
    <div class="book-content">
        <h2>Reservation</h2>
        <form action="" method="POST">
                <input type="text" method="POST" name="name" required class="box" maxlength="20" 
                placeholder="enter your name">

                <input type="number" method="POST" name="number" required class="box" maxlength="20"
                placeholder="enter your number" onkeypress="if(this.value.length == 20) return false">

                <input type="number" method="POST" name="guests" required class="box" maxlength="20"
                placeholder="how many guests ?" min="0" max="99" onkeypress="if(this.value.length == 2) return false">

                <select name="day">
                    <option value="day-select">Select Day</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
                <select name="time">
                    <option value="select-time">Select Time</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Brunch">Brunch</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Linner">Linner</option>
                    <option value="Dinner">Dinner</option>
                </select>
                <!-- <a href="#" class="btn">Book a Table</a> -->
                <input type="submit" value="Book a Table" class="btn" name="submit">

        </form>
    </div>
</section>
<!--facility-->
<section class="facility" id="facility">
    <div class="heading">
        <h2>Our Facilities</h2>
    </div>
    <!--container1-->
    <div class="facility-container">
        <div class="box1">
            <img src="img/pic35.jpg">
            <h2>Table Capacity</h2>
            <p>We have a capacity of 45 tables.</p>   
        </div>
        <div class="box1">
            <img src="img/pic36.jfif">
            <h2>Parking Availability</h2>
            <p>We have facility to park 30 vehicals at a time.</p>   
        </div>
        <div class="box1">
            <img src="img/pic37.jpg">
            <h2>Pre-Orders</h2>
            <p>There is a facility for the customer to pre-order before the cousins come to the restaurant.</p>   
        </div>
        <div class="box1">
            <img src="img/pic38.jfif">
            <h2>Special Events</h2>
            <p>Our restaurant can be booked for special occasions such as birthday parties and anniversary.</p>   
        </div>
        <div class="box1">
            <img src="img/pic39.png">
            <h2>Special Food and Beverages</h2>
            <p>Special foods and beverages are prepared for special occasions and special events.</p>   
        </div>
        <div class="box1">
            <img src="img/pic40.jpg">
            <h2>Special Promotions</h2>
            <p>Our restaurant offers special promotions for all special occasions.</p>   
        </div>

    </div>    
</section>
<!--contact-->
<section class="contact" id="contact">
    <div class="heading1">
        <h2>Contact Us</h2><br>
    </div>

        <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                </div>
                <div class="user">
                <center><img src="dashbd/contactus.gif"alt =""><a href="login.php"></a></center><br><br>
                    <div class="img-case">
                    <center><h1><a href="contactus.php" class="btn">send us a message</a></h1></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Footer-->
<section class="footer">
<div class="footer-box">
    <h3>The Gallery Cafe</h3>
    <p>Special Events,Promotions,Pre-order,Types of Meals,
        Menus,Reservations,Special food and beverages.</p>
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-tiktok'></i></a>
    </div>
</div>
<div class="footer-box">
    <h3>Support</h3>
    <li><a href="#">Products</a></li>
    <li><a href="#">Help & Support</a></li>
    <li><a href="#">Return Policy</a></li>
    <li><a href="#">Terms of use</a></li>
</div>
<div class="footer-box">
    <h3>View Guides</h3>
    <li><a href="#">Features</a></li>
    <li><a href="#">Blog Post</a></li>
    <li><a href="#">Careers</a></li>
</div>
<div class="footer-box">
    <h3>Contacts</h3>
    <div class="contact">
        <span><i class='bx bx-map'></i>No.25 Kensington Gardens,Colombo,Western Province.</span>
        <span><i class='bx bx-phone-call'></i>+94 76-345-2334</span><br>
        <span><i class='bx bx-envelope'></i>thegallerycafe@gmail.com</span>
    </div>
</div>
</section>



    <script src="scripts.js"></script>
</body>

</html>


<?php
include_once 'header.php';
?>
<h1>Hello <?php 
if(isset($_SESSION["username"])) {
    echo $_SESSION["username"] . '!';

} else{
    echo 'user !';
}

 ?></h1><br>
<h2>WELCOME TO OUR GALLERY</h2><BR><BR><BR>



<br><br>
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
           we continually strive to go above and beyond to provide exceptional service.</p><br>  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><button class="button"><a href ="admin_dash.html"class="btn"><h2>Click Here</h2></a></button></center>




<?php
include_once 'footer.php';
?>
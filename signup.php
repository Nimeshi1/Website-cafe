<?php
include_once 'header.php';
?>
<div class="form">
      <h1>The GALLERY CAFE</h1>

      <form action="includes/signup.inc.php" method="post">
            <input type="text" id="fname" name="name" placeholder="Name">

            <input type="text" id="fname" name="email" placeholder="Email">

            <input type="text" id="fname" name="uid" placeholder="Username">

            <input type="password" id="lname" name="pwd" placeholder="Password">

            <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">
            <button name="submit" type="submit">Register</button>
      </form>
<?php
if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput") {
            echo '<div class="error">Fill in the all fields</div>';

      } else if($_GET["error"] == "invaliduid"){
            echo '<div class="error">Invalid Username!</div>';
      } else if($_GET["error"] == "invalidemail"){
            echo '<div class="error">Invalid Email!</div>';
      } else if($_GET["error"] == "passwordsdontmatch"){
            echo '<div class="error">Passwords not matching!!!</div>';
      } else if($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong!, Please contact developers</div>';
      } else if($_GET["error"] == "none"){
            echo '<div class="error">Account Created</div>';
      } else if($_GET["error"] == "usernametaken"){
            echo '<div class="error">Username / Email already in use</div>';
}
}
?>   


<p>Already have an account?<a href="login.php">Please Login</a></p>
</div>
<?php
include_once 'footer.php';
?>
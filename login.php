<?php
include_once 'header.php';
?>
<div class="form">
      <h1>THE GALLERY CAFE</h1>

      <form action="includes/login.inc.php" method="post">
            <input type="text" id="fname" name="uid" placeholder="Username">
            <input type="password" id="lname" name="pwd" placeholder="Password">
            <button name="submit" type="submit">Login</button>
</form>
<?php
if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput") {
            echo '<div class="error">Fill in the all fields</div>';

      } else if($_GET["error"] == "wronglogin"){
            echo '<div class="error">Invalid Details!</div>';
     
      } else if($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong!, Please contact developers</div>';
      } else if($_GET["error"] == "none"){
            echo '<div class="error">Account Created</div>';
}
}
?>   

<p>Already don't have an account?<a href ="signup.php">Please Register</a></p>
</div>
<?php
include_once 'footer.php';
?>
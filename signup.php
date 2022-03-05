<?php
    include "functions.php";
    include "db_connect.php";
    if(isset($_REQUEST['register'])){
      if(($_REQUEST['username'] == "") || ($_REQUEST['mobile'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['password'] == "")){
        $message1 = "Please fill all fields";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }elseif($_REQUEST['password'] != $_REQUEST['cpassword']){
        $message2 = "Password should not matched";
        echo "<script type='text/javascript'>alert('$message2');</script>";
      }else{
        $username = $_REQUEST['username'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $cpassword = $_REQUEST["cpassword"];
        $sql = "INSERT INTO user_registration ( username, mobile, email, password ) VALUES ( '$username', '$mobile', '$email', '$password' )";
        if($conn->query($sql) === TRUE){
          $message = "Registration Successfull";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }else{
          echo "<div class='alert alert-danger' role='alert'>
          Database Connection Successful <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 5 CDN link to add icones -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Sign Up</title>
    <!-- Linking .css file with HTML page -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
  <a class="logo" href="home.php">Easy<span class="special">Property</span> </a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
</div>
    <div class="container-signup">
        <!-- Left section of signup form -->
        <div >
            <h1>Sign Up</h1>
            <h5>Please fill ur Details.</h5>
            <form action="signup.php" method="POST">
             <div>
                <p><label for="username"><b>User Name</b></label></p>
                <input type="text" id="username" name="username" required autocomplete="off" >
             </div>
             <div>
                <p><label for="email"><b>Email Address</b></label></p>
                <input type="email" id="email" name="email" required autocomplete="off">
             </div>
             <div>
                <p><label for="mobile"><b>Mobile Number</b></label></p>
                <input type="text" id="mobile" name="mobile" required autocomplete="off">
             </div>
             <div>
                <p><label for="password"><b>Password</b></label></p>
                <input type="password" id="password" name="password" required >
             </div>
             <div>
                <p><label for="cpassword"><b>Confirm Password</b></label></p>
                <input type="password" id="cpassword" name="cpassword" required >
             </div>
             <button type="submit" class="btn" id="btn" name="register_btn">Sign Up Now</button>
             <p><b>Already a member?</b><a href="login.php">Log in</a></p>
              </form>     
             </div>
    
             
</body>

</html>
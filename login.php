<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icones CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Login</title>
    <!-- Linking css code file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
  <a class="logo" href="home.php">Easy<span class="special">Property</span></a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a class="active" href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
</div>
    <div class="container">
        <div>
            <h1>Sign in</h1>
            <h5>Welcome to our Website</h5>
            <form action="index.php" method="POST">
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>

                <?php } ?>
             <div>
                <p><label for="email"><b>Email</b></label></p>
                <input type="email" id="email" name="email" required >
             </div>
             <div>
                <p><label for="password"><b>Password</b></label></p>
                <input type="password" id="password" name="password" required >
             </div>
             
             <button type="submit" id="btn">Sign in Now</button>
             <p><b>Not a register user?</b><a href="signUp.php">Sign Up</a></p>
            </form>
            <div></div>  
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icones CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Contact</title>
    <!-- Linking css code file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
  <a class="logo" href="home.php">Easy<span class="special">Property</span></a>
  <a class="active" href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a  href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
</div>

<div class="container-contact">
  <form action="" method="POST">
    <h2>Contact Us</h2>
    <label for="fname"><b>First Name</b></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="email"><b>Email</b></label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="country"><b>Country</b></label>
    <select id="country" name="country">
      <option value="select">Select</option>
      <option value="india">India</option>
      <option value="america">America</option>
      <option value="russia">Russia</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject"><b>Subject</b></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

            <!-- Social media icones -->    
    </div>
</body>
</html>
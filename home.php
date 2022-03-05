<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 5 CDN link to add icones -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Home</title>
    <!-- Linking .css file with HTML page -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="navbar">
  <a class="logo" href="home.php">Easy<span class="special">Property</span></a>
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="Login.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
</div>

<div class="container-imgage">
  <div class="mySlides">
    <img src="img/img1.jpg" style="width: 1350px; height: 300px;">
  </div>

  <div class="mySlides">
    <img src="img/img2.jpg" style="width: 1350px; height: 300px;">
  </div>

  <div class="mySlides">
    <img src="img/img3.jpg" style="width: 1350px; height: 300px;">
  </div>
    
  <div class="mySlides">
    <img src="img/img4.jpg" style="width: 1350px; height: 300px;">
  </div>

  <div class="mySlides">
    <img src="img/img5.jpg" style="width: 1350px; height: 300px;">
  </div>
    
  <div class="mySlides">
    <img src="img/img6.jpg" style="width: 1350px; height: 300px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
        
    </div>
             <footer class="main-footer" >
                <p class="footer-p">Property Website &copy; 2019, All Rights Reserved </p>
             </footer>
</body>
</html>
 
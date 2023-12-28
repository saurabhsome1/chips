<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chipas design</title>
    <link rel="stylesheet" href="css/style.css">



  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
rel="stylesheet">


</head>
<body>

<header>
<a class="navbar-brand" href="">
      <img src="images/pic6.jpg" alt="Logo" style="width:100px;" class="rounded-pill">
    </a>
    <a href="#" class="logo">CHILL TIME</a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="http://localhost/chips/home.php">HOME</a></li>
        <li><a href="http://localhost/chips/home.php">PORTFOLIO</a></li>
        <li><a href="http://localhost/chips/home.php">PRESS</a></li>
        <li><a href="http://localhost/chips/home.php">SERVICES</a></li>
        <li><a href="http://localhost/chips/home.php">HOW THIS WORK</a></li>


    </ul>
</header>

<!-- home start -->
<section class="home" id="home">
    <div class="home-text">
        <h1>full webside</h1>
        <h2>THE TIME <br> most precious things</h2>
        <a href="#" class="btn">Today's menu</a>
    </div>
    
<!-- new tey -->

<style>
.mySlides {display:none;}
</style>
</head>

<body>

<!--<h2 class="w3-center">Automatic Slideshow</h2>-->

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/try it.jpg" style="width:100%">
  <img class="mySlides" src="images/pic4.jpg" style="width:100%">
  <img class="mySlides" src="images/pic6.jpg" style="width:100%">
  <img class="mySlides" src="images/pic1.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>

</section>

<!-- about start -->
<section class="about" id="about">
<div class="about image">
<img src="images/chill with friend.jpg" alt="#" style="width:200%">
</div>
<div class="about-text">
    <span>About Us</span>
    <h2>We speek the good <br> Food language </h2>
    <p>
    When you present your speech, do not sound too proud or too self belittling. 
    Keep everything as professional as possible. Share your experience: Share some of your experiences 
    in achieving this promotion to your audience.
    Let them feel and understand that with all you have done, you were able to be where you are now.</p>
    <a href="#" class="btn">Learn morn</a>
</div>
</section>

<!-- menu start -->
<section class="menu" id="menu">
    <div class="heading">
        <span>Food Menu</span>
        <h2>Positive vibe and good time</h2>
    </div>
    <div class="menu-container">
    <div class="box">
    <div class="box-img" >
    <img src="images/menu start.jpg" alt="#" style="width:100%">
    </div>
    <h2>chips and coke</h2>
    <h3>testy food</h3>
    <span>$5.00</span>
    <i class='bx bxs-cart-add'></i>
    </div>

    <div class="box">
    <div class="box-img" >
    <img src="images/biryani.jpg" alt="#" style="width:100%">
    </div>
    <h2>Biryani</h2>
    <h3>testy food</h3>
    <span>$13.00</span>
    <i class='bx bxs-cart-add'></i>
    </div>

    <div class="box">
    <div class="box-img" >
    <img src="images/shushi.jpg" alt="#" style="width:100%">
    </div>
    <h2>special shushi</h2>
    <h3>testy food</h3>
    <span>$20.00</span>
    <i class='bx bxs-cart-add'></i>
    </div>

    <div class="box">
    <div class="box-img" >
    <img src="images/biryani2.jpg" alt="#" style="width:100%">
    </div>
    <h2>spicy food</h2>
    <h3>testy food</h3>
    <span>$22.00</span>
    <i class='bx bxs-cart-add'></i>
    </div>

    </div>
</section>

<!-- service start -->
<section class="services" id="services">
  <div class="heading">
    <span>services</span>
    <h2>We provide best quality food</h2>
  </div>
  <div class="service-container">
    <div class="s-box">
    <img src="images/ready for deliver.jpg" alt="#">
    <h3>orderd</h3>
    <p>Food delivery slogans are like tasty appetizers for your taste buds.
       They’re short and catchy phrases that make you want to order food.
        Think of classics like “Deliciously Delivered” or “Food, Fast & Fresh.”
These slogans promise quick, tasty meals right at your doorstep.
 They’re like the secret ingredient that makes a food delivery brand stand out and be memorable.
So, when you’re hungry and thinking about what to order,
 these slogans are the yummy smell that draws you in for a delicious meal without any fuss.</p>
    </div>

    <div class="s-box">
    <img src="images/order on the way.jpg" alt="#">
    <h3>orderd</h3>
    <p>Food delivery slogans are like tasty appetizers for your taste buds.
       They’re short and catchy phrases that make you want to order food.
        Think of classics like “Deliciously Delivered” or “Food, Fast & Fresh.”
These slogans promise quick, tasty meals right at your doorstep.
 They’re like the secret ingredient that makes a food delivery brand stand out and be memorable.
So, when you’re hungry and thinking about what to order,
 these slogans are the yummy smell that draws you in for a delicious meal without any fuss.</p>
    </div>

    <div class="s-box">
    <img src="images/take out.jpg" alt="#">
    <h3>orderd</h3>
    <p>Food delivery slogans are like tasty appetizers for your taste buds.
       They’re short and catchy phrases that make you want to order food.
        Think of classics like “Deliciously Delivered” or “Food, Fast & Fresh.”
These slogans promise quick, tasty meals right at your doorstep.
 They’re like the secret ingredient that makes a food delivery brand stand out and be memorable.
So, when you’re hungry and thinking about what to order,
 these slogans are the yummy smell that draws you in for a delicious meal without any fuss.</p>
    </div>

  </div>
</section>

<!-- call to action -->
<section class="cat">
<h2>we make quality food <br>Everyday</h2>
<a href="#" class="btn">Let's take</a>
</section>
<!-- footer start -->
<section id="contact">
<div class="footer">
<div class="main">
<div class="col">
<h4>menu link</h4>
<ul>
  <li><a href="#">HOME</a></li>
  <li><a href="#">PORTFOLIO</a></li>
  <li><a href="#">PRESS</a></li>
  <li><a href="#">SERVICES</a></li>
  <li><a href="#">HOW THIS WORK</a></li>
</ul>
</div>

<div class="col">
<h4>Our service</h4>
<ul>
  <li><a href="#">web design</a></li>
  <li><a href="#">web development</a></li>
  <li><a href="#">marketing</a></li>
  <li><a href="#">product management</a></li>
  <li><a href="#">graphic design</a></li>
</ul>
</div>


<div class="col">
<h4>Inoformation</h4>
<ul>
  <li><a href="#">About us</a></li>
  <li><a href="#">deliver Inoformation</a></li>
  <li><a href="#">provecy policy</a></li>
  <li><a href="#">T&C</a></li>
</ul>
</div>

<div class="col">
<h4>Contact Us</h4>
<div class="social">
     <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
     <a href="#"><i class='bx bxl-instagram' ></i></a>
     <a href="#"><i class='bx bxl-twitter' ></i></a>
     <a href="#"><i class='bx bxl-youtube' ></i></a>
</div>
</div>



</div>
</div>
</section>

<!-- javascript -->
<script type="text/javascript" src="js/script.js"></script>

    
</body>
</html>
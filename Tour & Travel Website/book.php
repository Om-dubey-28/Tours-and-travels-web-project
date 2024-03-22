<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>


    <!-- Swiper Css -->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<section class="home-about">
  <div class="image">
    <img src="images/about-img1.jpg" alt="">
  </div>
  <div class="content right">
    <h3>about us</h3>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur a pariatur quidem rerum dolor ab
      exercitationem similique aliquid! Quae quas quos id placeat dolorum illum sapiente veniam voluptas nam
      ex.
    </p>
    <a href="about.php" class="btn"> read more</a>
  </div>
</section>

<div class="heading" style="background:url(images/header-bg3.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section starts -->

<section class="booking">

  <h1 class="heading-tittle">book your trip!</h1>

  <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
      <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter  your name" name="name" >
      </div>
      <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter  your email" name="email" >
      </div>
      <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter  your number" name="phone" >
      </div>
      <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter  your address" name="address" >
      </div>
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location" >
      </div>
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests" >
      </div>
      <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals" >
      </div>
      <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving" >
      </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send"/>

  </form>

</section>















<!-- footer section -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>        
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>        
            <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>        
            <a href="#"> <i class="fas fa-phone"></i> +91-9898989898</a>
            <a href="#"> <i class="fas fa-phone"></i> +91-8521852541</a>
            <a href="#"> <i class="fas fa-envelope"></i>dubeytravelagency@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Vadodara, India - 390023</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        </div>
    </div>

    <div class="credit"> Created by <span>Mr. Om S Dubey(Red Devil)</span> | All Rights reserved!</div>

</section>


<!-- Swiper Js Link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 

<!-- JS File link -->
<script src="js/script.js"></script>
</body>
</html>
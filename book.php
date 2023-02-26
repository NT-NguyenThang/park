<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Location and Price</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/cs.css">
</head>
<body>
<section class="header">
   <a href="home.php" class="logo">PCar</a>
   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="package.php">Location and Price</a>
      <a href="book.php">Register</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Book now!</h1>
</div>
<section class="booking">
   <h1 class="heading-title">Register your destination</h1>
   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Name: </span>
            <input type="text" placeholder="Enter your name." name="name">
         </div>
         <div class="inputBox">
            <span>Email: </span>
            <input type="email" placeholder="Enter your email." name="email">
         </div>
         <div class="inputBox">
            <span>Number phone: </span>
            <input type="number" placeholder="Enter your number phone." name="phone">
         </div>
         <div class="inputBox">
            <span>Location: </span>
            <input type="text" placeholder="Enter your location." name="address">
         </div>
         <div class="inputBox">
            <span>Where do you want to go? </span>
            <input type="text" placeholder="Enter where you want to go." name="location">
         </div>
         <div class="inputBox">
            <span>What is the name of your resort?</span>
            <input type="text" placeholder="Enter your resort." name="location">
         </div>
         <div class="inputBox">
            <span>Departure day: </span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Return day: </span>
            <input type="date" name="leaving">
         </div>
      </div>
      <input type="submit" value="Gửi" class="btn" name="send">
   </form>
   </form>
</section>
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>Fast Access</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i>About Us</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>Location and Price</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>Register</a>
      </div>
      <div class="box">
         <h3>Contact Information</h3>
         <a href="#"> <i class="fas fa-phone"></i>0773130352</a>
         <a href="#"> <i class="fas fa-envelope"></i>ntnguyenthangtn@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i>Ho Chi Minh, Viet Nam</a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>
   </div>
   <div class="credit"> created by <span>Nguyễn Thắng</span></div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
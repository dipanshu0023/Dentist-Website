<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Dentist Website Design Tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style3.css">
   <link rel="stylesheet" href="login system/css/style5.css">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>
<body>

    <!-- header section starts  -->

<header class="header fixed-top">

<div class="container">

   <div class="row align-items-center justify-content-between">

      <a href="#home" class="logo">dental<span>Clinic</span></a>

      <nav class="nav">
         <a href="index.php">home</a>
         <a href="index.php">about</a>
         <a href="services.html">services</a>
         <a href="index.php">Doctors</a>
         <a href="index.php">contact</a>
         <a href="staffpanell.php">staff panel</a>
      </nav>

      <!-- <a href="#contact" class="link-btn">make appointment</a> -->
      <a href="#contact" class="logo1" ><span>Ph. </span>9999999999</a>

      <div id="menu-btn" class="fas fa-bars"></div>
      <!-- <marquee direction="left" scrollamount="4"><b>Morning Time : 09:00am to 12:30pm & Evening Time : 03:00pm to 06:30pm</b></marquee> -->

   </div>

</div>

</header>

<?php
    include "login system/login_form.php";
?>




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+91 9999999999</p>
         <p>01824-240901</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Gurdaspur, Punjab - 143521</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p><span>Morning Time : </span>09:00am to 12:30pm</p>
         <p><span>Evening Time : </span>03:00pm to 06:30pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>dipanshu@gmail.com</p>
         <p>supportdentist20@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr. Dipanshu</span>  </div>

</section>
<!-- footer section ends -->






<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>
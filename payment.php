<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip_code = $_POST['zip_code'];
   $card_name = $_POST['card_name'];
   $card_number = $_POST['card_number'];
   $exp_month = $_POST['exp_month'];
   $exp_year = $_POST['exp_year'];
   $cvv = $_POST['cvv'];

   $insert = mysqli_query($conn, "INSERT INTO `payment`(full_name, email, number, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv) VALUES('$full_name','$email','$number', '$address','$city', '$state', '$zip_code', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

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
   <link rel="stylesheet" href="css1/style5.css">
   <link rel="stylesheet" href="css1/style4.css">
   <link rel="stylesheet" href="css1/style2.css">

</head>
<body>
   
<!-- header section starts  -->

<!-- <header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
            <a href="login system/login_form.php">staff panel</a>
         </nav> -->

         <!-- <a href="#contact" class="link-btn">make appointment</a> -->
         <!-- <a href="#contact" class="logo1" ><span>Ph. </span>9999999999</a>

         <div id="menu-btn" class="fas fa-bars"></div> -->
         <!-- <marquee direction="left" scrollamount="4"><b>Morning Time : 09:00am to 12:30pm & Evening Time : 03:00pm to 06:30pm</b></marquee> -->

      <!-- </div>

   </div>

</header> -->

<!-- header section ends -->

<!-- home section starts  -->

<!-- <section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>We provide oral care solutions for all dental problems, including Root Canal Treatment, teeth whitening, teeth cleansing and polishing, complete or partial dentures, orthodontic treatment and more.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section> -->

<!-- home section ends -->

<!-- about section starts  -->

<!-- <section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Experience Advanced Dentistry At DC</h3>
            <p>Dental Care delivers quality dentistry with a personalized touch. Each patient is treated with the utmost care, compassion, empathy and state-of-the-art dentistry that promises nothing but the best. We provide oral care solutions for all dental problems, including Root Canal Treatment, teeth whitening, teeth cleansing and polishing, complete or partial dentures, orthodontic treatment and more. With our team of expert dentists, we take care of all your dental needs and ensure complete sterilization in all our procedures.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section> -->

<!-- about section ends -->

<!-- services section starts  -->

<!-- <section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <a href="services.html"><div class="box">
         <img src="pics/s1.jpg" alt="">
         <h3>Dental Filling</h3>
         <p>Get dental fillings and restorations for cavities, broken...</p>
      </div></a>

      <a href="services.html"><div class="box">
         <img src="pics/s2.png" alt="">
         <h3>Dental Crown</h3>
         <p>DC is your best resort if you wish to have crowns that fit your aesthetic...</p>
      </div></a>

      <a href="services.html"><div class="box">
         <img src="pics/s3.png" alt="">
         <h3>Dental Bridges</h3>
         <p>Replace that missing tooth with an affordable and long-lasting...</p>
      </div></a>

      <a href="services.html"><div class="box">
         <img src="pics/s4.png" alt="">
         <h3>RCT</h3>
         <p>Save your teeth from further damage with Root Canal Treatment...</p>
      </div></a>

      <a href="services.html"><div class="box">
         <img src="pics/s5.png" alt="">
         <h3>Dental Braces</h3>
         <p>Align your teeth and flaunt that flawless smile with the...</p>
      </div></a>

      <a href="services.html"><div class="box">
         <img src="pics/s6.png" alt="">
         <h3>See Other Services</h3>
         <p>Such as Aligners, Smile Makeover, Dental Implant, Kids Dentistry, etc. </p>
      </div></a>
      

   </div>

</section> -->

<!-- services section ends -->

<!-- process section starts  -->

<!-- <section class="proces"> -->

   <!-- <h1 class="heading">work process</h1> -->

   <!-- counter section starts  -->

<!-- <section class="counter">

<div class="container box-container">

   <div class="box">
      <h3>340+</h3>
      <p>Clinics</p>
   </div>

   <div class="box">
      <h3>2.8L+</h3>
      <p>Dental Filling</p>
   </div> -->

   <!-- <div class="box">
      <h3>1.2L+</h3>
      <p>Tooth Extraction</p>
   </div> -->

   <!-- <div class="box">
      <h3>800+</h3>
      <p>Dentist</p>
   </div>
   <div class="box">
      <h3>50,000+</h3>
      <p>Implant Placed</p>
   </div>
   <div class="box">
      <h3>35,000+</h3>
      <p>Ortho Cases</p>
   </div>

</div>

</section> -->

<!-- counter section ends -->




   <!-- <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

   </div> -->

<!-- </section> -->

<!-- process section ends -->

<!-- reviews section starts  -->

<!-- <section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I just got my braces removed today and I am delighted with the results. Dr Ashima is quite informative and assisted me well throughout the process. She is very understanding and explained me about all the procedures very well and was quite proactive in reverting to all my queries during the treatment</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maneesh Bhat</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I visited the clove dental Clinic in rohini sector 11 by making an online appointment for getting the filling in one teeth and alsocleaning. Doctors are very generous and emphatic. They try to give you always the best and worthy advice. There were two female doctors I believe and both were really helpful.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shunhi kaushik</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Was One of my best dental Clinic to go for,has quality doctors with great skills. Keep their patients at ease.lil adjustments to seating area for visitors would be wonderful ...Good luck.  There were two female doctors I believe and both were really helpful.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Deepak Jain</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section> -->

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>
   <div class="container2">

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
  
          <div class="row">
  
              <div class="col">
  
                  <h3 class="title">Fill Your Details</h3>
  
                  <div class="inputBox">
                      <span>full name :</span>
                      <input type="text" name="full_name" placeholder="enter your full name">
                  </div>
                  <div class="inputBox">
                      <span>email :</span>
                      <input type="email" name="email" placeholder="enter your email">
                  </div>
                  <div class="inputBox">
                      <span>Mobile Number :</span>
                      <input type="number" name="number" placeholder="enter your mobile number">
                  </div>
                  <div class="inputBox">
                      <span>address :</span>
                      <input type="text" name="address" placeholder="room - street - locality">
                  </div>
                  <div class="inputBox">
                      <span>city :</span>
                      <input type="text" name="city" placeholder="enter your city">
                  </div>
  
                  <div class="flex">
                      <div class="inputBox">
                          <span>state :</span>
                          <input type="text" name="state" placeholder="enter your state">
                      </div>
                      <div class="inputBox">
                          <span>zip code :</span>
                          <input type="text" name="zip_code" placeholder="enter your zipcode">
                      </div>
                  </div>
  
              </div>
  
              <div class="col">
  
                  <h3 class="title">payment</h3>
                  <marquee direction="left" scrollamount="4"><b>Pay - &#x20B9;100 to Book Appointment</b></marquee>
                  <div class="inputBox">
                      <span>cards accepted :</span>
                      <a href="#"><img src="images/card_img1.png" alt=""></a>
                      <a href="#"><img src="images/card_img2.png" alt=""></a>
                      <a href="#"><img src="images/card_img.png" alt=""></a>
                      <a href="paytm.html"><img src="images/Paytm_Logo.png" alt=""></a>
                      <a href="googlepay.html"><img src="images/googlepay.jpg" alt=""></a>
                  </div>
                  <div class="inputBox">
                      <span>name on card :</span>
                      <input type="text" name="card_name" placeholder="enter your name as per card name">
                  </div>
                  <div class="inputBox">
                      <span>credit card number :</span>
                      <input type="number" name="card_number" placeholder="enter your card number">
                  </div>
                  <div class="inputBox">
                      <span>exp month :</span>
                      <!-- <input type="text" name="exp_month" placeholder="exp. month"> -->
                      <select name="exp_month" placeholder="exp month">
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="october">october</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                     </select>
                  </div>
  
                  <div class="flex">
                      <div class="inputBox">
                          <span>exp year :</span>
                          <!-- <input type="number" name="exp_year" placeholder="exp. year"> -->
                          <select name="exp_year" placeholder="exp year">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                     </select>
                      </div>
                      <div class="inputBox">
                          <span>CVV :</span>
                          <input type="text" name="cvv" placeholder="cvv">
                      </div>
                  </div>
  
              </div>
      
          </div>
  
          <input type="submit" value="proceed to checkout" name="submit" class="submit-btn">
  
      </form>
      <!-- <div class="col">
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your mobile number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="date" name="date" class="box" required>
     
      <span>shift :</span><br>&nbsp;
      <input type="radio" name="shift" id="Morning" value="Morning">
         <span id="male">Morning</span> &nbsp;
         <input type="radio" name="shift" id="Evening" value="Evening">
         <span id="male">Evening</span><br><br>
         <span>your name :</span>
         </div>
         <div class="col">
         <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your mobile number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
         </div>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>   -->

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<!-- <section class="footer">

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
         <p>dipanshu.1901229@gmail.com</p>
         <p>supportdentist20@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr. Dipanshu</span>  </div>

</section> -->

<!-- footer section ends -->










<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->

</body>
</html>
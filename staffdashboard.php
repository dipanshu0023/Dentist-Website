

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!--<title>Admin Dashboard Panel</title>--> 

    <!-- <link rel="stylesheet" href="css/style.css"> -->
   <link rel="stylesheet" href="css/style3.css">
   <link rel="stylesheet" href="css/style7.css">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


</head>
<body>




    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Dental <span class="care">Clinic</span></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#patient">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Patient Details</span>
                </a></li>
                <li><a href="#">
                <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Doctor Details</span>
                </a></li>
                <li><a href="#">
                <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Staff Details</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Contact Us</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <!-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a> -->

                <!-- <div class="mode-toggle">
                  <span class="switch"></span>
                </div> -->
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <!-- <i class="uil uil-thumbs-up"></i> -->
                        <span class="material-symbols-outlined">
                            personal_injury
                            </span>
                        <span class="text">Patients</span>
                        <span class="number">15</span>
                    </div>
                    <div class="box box2">
                        <!-- <i class="uil uil-comments"></i> -->
                        <span class="material-symbols-outlined">
                            medication
                            </span>
                        <span class="text">Doctors</span>
                        <span class="number">3</span>
                    </div>
                    <div class="box box3">
                        <!-- <i class="uil uil-share"></i> -->
                        <span class="material-symbols-outlined">
                            medical_services
                            </span>
                        <span class="text">Total Services</span>
                        <span class="number">20</span>
                    </div>
                    <div class="box box4">
                        <!-- <i class="uil uil-share"></i> -->
                        <span class="material-symbols-outlined">
                            badge
                            </span>
                        <span class="text">Staff</span>
                        <span class="number">3</span>
                    </div>
                    <div class="box box5">
                        <!-- <i class="uil uil-share"></i> -->
                        <span class="material-symbols-outlined">
                            diversity_1
                            </span>
                        <span class="text">Experience</span>
                        <span class="number">10Yr+</span>
                    </div>
                   
                </div>
            </div>

            <div class="title" id= "patient">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Patient Details</span>
                </div>
<!-- service details start -->
<table class="content-table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Mobile No.</th>
            <th>Date</th>
            <th>shift</th>

            <!-- <th>Download</th> -->
          </tr>



<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
// error_reporting(0);
// include("connection.php");
$query = "select * from contact_form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


// echo $result['id']."  ".$result['name']."  ".$result['email']."  ".$result['date']."  ".$result['shift'];

// echo "$total";

if($total!=0)
{
    $result = mysqli_fetch_assoc($data); 
    while ($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['number']."</td>
            <td>".$result['date']."</td>
            <td>".$result['shift']."</td>
            
            ";
    }
}
else
{
    echo "no records found";
}

?>

</table>





            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script1.js"></script>
</body>
</html>

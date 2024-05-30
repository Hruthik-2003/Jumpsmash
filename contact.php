

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sports Team &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
   
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
      label{
        color: white;
      }
    </style>
    
  </head>



<?php
$showAlert = false;
$showError = false;




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = mysqli_connect("localhost", "root", "", "jumpsmash");
    

    $name = $_POST["uname"];
    $email = $_POST["email"];
    $sub = $_POST["sub"];
    $msg = $_POST["msg"];
    $exists=false;

    $sql = "INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$sub', '$msg')";
    $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    
    else{
        $showError = true;
    }

    if($showAlert){
    echo "<script>alert('MESSAGE SENT.')</script>";
    }
    if($showError){
    echo "<script>alert('MESSAGE NOT SENT')</script>";
    }
}
 
?>
   


  <body>
  
    
  
  <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="container">

      <div class="row no-gutters site-navbar align-items-center py-3">

        <div class="col-6 col-lg-2 site-logo">
          <a href="index.html">JUMP SMASH ACADEMY</a>
        </div>
        <div class="col-6 col-lg-10 text-right menu">
          <nav class="site-navigation text-right text-md-right">

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active ">
                  <div class="nav-items-li">
                  <a href="index.html">Home</a>
                  </div>
                </li>
                <li>
                  <div class="nav-items-li"><a href="gallery.html">Gallery</a></div></li>
                <li>
                  <div class="nav-items-li"><a href="events.html">Events</a></div></li>
                <li>
                  <div class="nav-items-li"><a href="about.html">About</a></div></li>
                <li>
                  <div class="nav-items-li"><a href="contact.html">Contact</a></li></div></li>
              </ul>

              <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a>
            </nav>
        </div>
      </div>

    </div>
    
    
    <div class="container">
      <!-- <div class="row">
        <div class="col-lg-12 align-items-center"> -->
          <!-- <div class="hero-wrap text-center" style="background-image: url('images/img_2.jpg');" data-stellar-background-ratio="0.5"> -->
            <!-- <div class="col-lg-6"></div>
            <div class="hero-contents col-lg-6 align-items-center"> -->
              <h2 style="display: flex;align-items: center;justify-content: center;">Get In Touch</h2>
              <p style="display: flex;align-items: center;justify-content: center;"><a href="index.html" style="color: rgb(166, 211, 227);">Home</a> <span class="mx-2">/</span> <strong>Contact</strong></p>
            <!-- </div>
          </div>
        </div> -->
      <!-- </div> -->
    </div>

    <div class="site-section">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12 col-lg-7 mb-5">
  
  
  
          <form action="contact.php" method="post" class="contact-form">
  
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" id="fullname" name="uname" class="form-control" placeholder="Full Name" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Subject</label>
                <input type="text" id="subject" name="sub" class="form-control" placeholder="Enter Subject">
              </div>
            </div>
  
  
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label>
                <textarea  id="message" name="msg" cols="30" rows="5" class="form-control"
                  placeholder="Say hello to us"></textarea>
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4">
              </div>
            </div>
  
  
          </form>
        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold text-black">Address</p>
            <p class="mb-4 text-black">Market Road, behind Gayathri Kalyana Mantapa<br>
               Kushalnagar, Coorg District</p>
  
            <p class="mb-0 font-weight-bold text-black">Phone</p>
            <p class="mb-4"><a href="tel:+91 1234567890"> 9036346663 </a></p>
  
            <p class="mb-0 font-weight-bold text-black">FOR BOOKING VISIT</p>
            
            <p><a href="https://playo.co/amp/venues/kushalnagar-madikeri/jump-smash-badminton-academy-kushalnagar-madikeri/">PlayO</a></p>

            <ul class="list-unstyled social" style="color: #000;">
              <li ><a href="https://www.facebook.com/share/t6RFe5FhgoQqe9G2/?mibextid=qi2Omg" style="color: #000;"><span class="mr-2 icon-facebook"></span> Facebook</a></li>
              
              <li><a href="https://www.instagram.com/sharath.sharath.71?igsh=MWNyY21uaWx5dXBxeA==" style="color: #000;"><span class="mr-2 icon-instagram"></span> Instagram</a></li>
              
              <li><a href="https://playo.co/amp/venues/kushalnagar-madikeri/jump-smash-badminton-academy-kushalnagar-madikeri/" style="color: #000;"><span class=""></span> PlayO</a></li>
            </ul>
          </div>
  
          
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row footer-inner">
        <div class="col-lg-3">
          <div class="widget mb-4" style="font-size: 18px;">
            <h3>About Us</h3>
            <p>Come here to for the best badminton playing, coaching experience</p>
            <p>Join us and JUMP to HEIGHTS</p>
          </div>
        </div>
        <div class="col-lg-2 pl-4">
          <div class="widget mb-4">
            <h3>Navigation</h3>
            <ul class="list-unstyled links">
              <li><a href="index.html">Home</a></li>
              <li><a href="gallery.html">Gallery</a></li> 
                <li><a href="events.html">Events</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-4">
            <h3>Upcoming Matches</h3>
            <ul class="list-unstyled links">
              <li>
                <a href="#">
                  <span class="d-block">May 19, 2024</span>
                  Qualifying Matches
                </a>
              </li>
              
              <li>
                <a href="#">
                  <span class="d-block">May 20, 2024</span>
                  Finals
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="d-block">Sept 10, 2024</span>
                   Badminton Tournament,2024
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget mb-4">
            <h3>Social</h3>
            <ul class="list-unstyled social">
              <li><a href="https://www.facebook.com/share/t6RFe5FhgoQqe9G2/?mibextid=qi2Omg"><span class="mr-2 icon-facebook"></span> Facebook</a></li>
              
              <li><a href="https://www.instagram.com/sharath.sharath.71?igsh=MWNyY21uaWx5dXBxeA=="><span class="mr-2 icon-instagram"></span> Instagram</a></li>
              
              <li><a href="https://playo.co/amp/venues/kushalnagar-madikeri/jump-smash-badminton-academy-kushalnagar-madikeri/"><span class=""></span> PlayO</a></li>
            </ul>
          </div>
        </div>

   

       
  <div class="whatsapp">
    <a href="https://wa.me/916361367986" target="_blank">
      <img src="images\whatsapp.jpeg" width="50px" class="whatsapp_btn">
    </a>
  </div>

  <div class="app">
    <a href="https://playo.co/amp/venues/kushalnagar-madikeri/jump-smash-badminton-academy-kushalnagar-madikeri/" target="_blank">
      <img src="images\playo.jpeg" width="50px" class="app_btn">
    </a>
  </div>

  <div class="label">
    <B>FOR BOOKING</B>
  </div> 
  </body>
</html>

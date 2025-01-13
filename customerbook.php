<!DOCTYPE html>
<html>
<style>
table, th, td {
border:solid black;}
</style>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SEAWAVES CONSTRUCTION & ENGINEERING</title>
	<link rel="shortcut icon" href="images/logo.png" />

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
	<?php 
		session_start ();
		if(!isset($_SESSION["username11"]))
			
			header("location:index.php"); 
			
		?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              SEAWAVES
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="customerhomepage.php">Home </a>
                </li>
				  <li class="nav-item">
                  <a class="nav-link" href="customerservice.php">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customerbook.php">Booking</a>
                </li>
				  <li class="nav-item">
                  <a class="nav-link" href="customeraboutus.php">About Us</a>
                </li>
				  </li>
				  <li class="nav-item">
                  <a class="nav-link" href="logout.php">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
       <section class="contact_section layout_padding">
      <div class="custom_heading-container">
        <h3 class=" ">
          Booking Slot
        </h3>
      </div>
      <div class="container layout_padding2-top">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form method="post" action="process.php">
              <div>
                <input type="text" required="required" name="Name"  placeholder="NAME">
              </div>
              <div>
                <input type="email" required="required" name="Email"  placeholder="EMAIL">
              </div>
              <div>
                <input type="text" required="required" name="PhoneNumber"  placeholder="PHONE NUMBER">
              </div>
			  <select required="required" name="Time">
                  <option required="required" name="Time" disabled selected>Time</option>
                  <option required="required" value="10.00AM">10:00 AM </option>
				  <option required="required" value="12:00PM">12:00 PM </option>
				  <option required="required" value="3:00AM">3:00 PM </option>

              </select>
              <div>
                <select required="required" name="TypeOfService">
                  <option required="required" value="Tos" disabled selected>Type Of Service</option>
                  <option value="Aircond">Aircond </option>
                  <option value="Gate">Gate</option>
                  <option value="Cctv">Cctv</option>
				  <option value="Wiring">Wiring</option>
				  <option value="Others">Others</option>
                </select>
              </div>
				<div>

              </div>
              <div>
                <input type="text" required="required" class="message-box" name="MessegeBox" placeholder="Service Details (Ex:Chemical Service 1.0hp 2 unit)">
              </div>
			  <div>
                <input type="text" required="required" name="Address"  placeholder="Address">
              </div>
  			  <input type="date" required="required" id="calender" name="Calender">
				
              <div class="d-flex justify-content-center ">
			<button type="submit" name="save" value="submit"onclick="alert('Sucessfully Booking Slot')">Send</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->

    <!-- about section -->

    <!-- end about section -->

    <!-- service section -->

    
    <!-- end service section -->

    <!-- work section -->


    <!-- end work section -->

    <!-- contact section -->

    <!-- end contact section -->

    
    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <h2>
                <img src="images/logo%202.png" alt="some_text" width="240"  height="100">  
              </h2>
              <p>
                A company that speacializes in all type or air - conditioning system, construction and engineering. We are a company that deliver high quality service for you.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-nav">
              <h4>
                Navigation
              </h4>
              <ul>
                <li>
                  <a href="customerhomepage.php">
                    Home
                  </a>
                </li>
                <li>
                  <a href="customerservice.php">
                    Service
                  </a>
                </li>
                <li>
                  <a href="customerbook.php">
                    Booking
                  </a>
                </li>
                <li>
                  <a href="customeraboutus.php">
                    About Us
                  </a>
					
                </li>
				  <br>
				  <a href="https://www.facebook.com/SeawavesConstructionEngineering"><i  class='fab fa-facebook-square' style='font-size:24px'></i></a>
				  <a href="https://www.tiktok.com/@seawaveschannel"><i class='fab fa-tumblr-square' style='font-size:24px'></i></a>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-contact">
              <h4>
                Contact Info
              </h4>
              <div class="location">
                <h6>
                  Corporate Office Address:
                </h6>
               
                  <img src="images/location.png" alt="">
                  <span>
                    No11A , Jalan Seri Sarawak 20B, Taman Sri Andalas, 41200 Klang, Selangor.
                  </span>
              </div>
              <div class="call">
                <h6>
                  Customer Service:
                </h6>
                
                  	<i class="fas fa-phone-square-alt" style="font-size:18px"></i>
				     <span> <a href="https://wa.link/unrcst"> (019-6185502)</span></a>
				    <br>
				    <i class="fas fa-phone-square-alt" style="font-size:18px"></i>
				    <span> (03-33234814)</span>
				    <br>
				     <i class="fas fa-envelope" style="font-size:18px"><span>&nbsp;<a href = "mailto:seawaves.const.engineering@gmail.com?subject = Feedback&body = Message">seawaves.const.engineering@gmail.com</a></span></i>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section> 	 	



    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
         &copy; 2022 by Seawaves Construction & Engineering
        
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>
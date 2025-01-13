<!DOCTYPE html>
<html>

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
                <li class="nav-item">
                  <a class="nav-link" href="customerhomepage.php">Home</a>
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
    
    <!-- end slider section -->
  </div>
  <div class="bg">

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            ABOUT OUR COMPANY
          </h3>
        </div>
        <p class="layout_padding2-top">
      Officially established on 21 August 2020. It is a local company that is active in civil engineering and electrical work for small and medium industries. There are several groups of employees under it who drive the company's operations. Led by Haji Mazlan Bin Musa and assisted by several executives to launch the company's operation. 
	  
	  Not just Service and Maintainence, we also help our customers with free consultations through our hotline. And we will provide the best solution path to our customers, which we gurantee is the best in town.
			
	  A high lifestyle with a cool Home and having high comfort is our business and we provide services with effort and diligence. With that, we gurantee the full satisfaction of our customers.
		
        </p>
		  
      </div>

    </section>
 	  <div class="map" align="center">
	  <p>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.291218027301!2d101.43939155054262!3d3.0161988547854013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdab608cfc9923%3A0x3cf8f95653fc6497!2sSeawaves%20Quality%20Consultancy%20Training%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1661143412481!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br></p>
		  <br>
		  <br>
		  
	</div>

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
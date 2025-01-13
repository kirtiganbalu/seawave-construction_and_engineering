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
          Warranty (DAIKIN)
        </h3>
      </div>
      <div class="container layout_padding2-top">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form method="post" action="processwarrantydaikin.php">
              <div>
                <input type="text" name="Hp" placeholder="HP">
              </div>
			   <div>
              <input type="text" name="Upah" placeholder="UPAH">
              </div>
			  <div>
              <input type="text" name="Warranty" placeholder="WARRANTY">
              </div>
              <div>
                <input type="text" name="Markup" placeholder="MARKUP">
              </div>
			  <div>
              <input type="text" name="Total" placeholder="TOTAL">
              </div>
              <div class="d-flex justify-content-center ">
				  
               <button type="submit" name="save" value="submit"onclick="alert('Sucessfully Add Warranty Slot')">Send</button>
              </div>
				
			  <div class="d-flex justify-content-center ">
  				<button ><a style="color: white;" href="staffhomepage.php">
                  BACK
                </a></button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>
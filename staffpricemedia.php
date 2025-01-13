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
	
<style>
table {
  font-family: 'Roboto', sans-serif;
  border-collapse: collapse;
  width: 95%;
}

td, th {
  border: 1px solid #000000;
  text-align: center;
  padding: 12px;
}

tr:nth-child(2) {
  background-color: #F98486;
}

	
</style>

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
                  <a class="nav-link" href="staffhomepage.php">Price </a>
                </li>
				  <li class="nav-item">
                  <a class="nav-link" href="staffbooklist.php">Book List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="staffcustomerlist.php">Customer List</a>
                </li>
				  <li class="nav-item">
                  <a class="nav-link" href="staffstafflist.php">Staff List</a>
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
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="images/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          SEAWAVES  <br>
                          CONSTRUCTION & ENGINEERING <br>
                          <span>
                            Services
                          </span>
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          

      </div>
    </section>
    <!-- end slider section -->
  </div>
  <div class="bg">

    <!-- about section -->
	<div>
	<p  style="font-size: 200%" align="center"> <br><br> ----- PRICE LIST  -----</p>
	<br>
	<br>
    </div>
	  
	  <div>
	<a href="staffhomepage.php"><button style="margin-left: 25%; padding: 5px 20px; width: 10%;background-color: none;">Daikin</button></a>
	<a href="staffpricemedia.php"><button style="margin-left: 3%;padding: 5px 20px;  width: 10%;">Media</button></a>
	<a href="staffpricepanasonic.php"><button style="margin-left: 3%; padding: 5px 20px;width: 10%;">Panasonic</button></a>
	<a href="staffpriceacson.php"><button style="margin-left: 3%; padding: 5px 20px;width: 10%;">Acson</button></a>
	<br>
	<br>
	<br>
	
	</div>
	  
	<section>
	  <table align="center">
	<tr>
	<th colspan="12" bgcolor="#C0C0C0">AIRCOND (MEDIA)</th> 
	</tr>
		  
  <tr>
    <th>No</th>
	<th>Type</th>
    <th>HP</th>
	<th>Non- <br>Inverter</th>
	<th>Inverter</th>
	<th>Install</th>
    <th>Normal <br> Service</th>
	<th>Chemical <br> Service</th>
	<th>Hacking</th>
	<th>Cooper/ <br>Ft</th>
	<th>Delete</th>
	<th>Update</th>
  </tr>
  <?php
include('dbconnect.php');
$i =0;
$sql="SELECT * FROM pricemedia";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows = $result->fetch_assoc()) {
$i++;
?>
    <tr class="text">
      <td align="center"><?php echo $i; ?></td>
<td align="center"><?php echo $rows['type_media']; ?></td>
<td align="center"><?php echo $rows['hp_media']; ?></td>
<td align="center"><?php echo $rows['noninverter_media']; ?></td>
<td align="center"><?php echo $rows['inverter_media']; ?></td>
<td align="center"><?php echo $rows['install_media']; ?></td>
<td align="center"><?php echo $rows['normalservice_media']; ?></td>
<td align="center"><?php echo $rows['chemicalservice_media']; ?></td>
<td align="center"><?php echo $rows['hacking_media']; ?></td>
<td align="center"><?php echo $rows['cooper_media']; ?></td>
<td align="center"><a href="deletepricemedia.php?hp_media=<?php echo $rows['hp_media'];?>">Delete</a></td>
<td align="center"><a href="staffpricemediaupdate.php?hp_media=<?php echo $rows['hp_media'];?>">Update</a></td>
    </tr>

      <?php
        }
}
$conn->close();?>
</table>

		 <br>
	<div  style="text-align:center" >
	<a href="staffaddnewmedia.php"><button style="padding: 5px 20px; width: 10%;background-color: none;">Add New</button></a>
</div>
		 <br>
		 <br>
		 </section>
	  
		  
</table>
		 <br>
		 <br>
		 </section>
	  
<section>
	  <table align="center">
		  
	<tr>
	<th colspan="8" bgcolor="#C0C0C0">UPPAH , WARRANTY , MARKUP</th> 
	</tr>
		  
  <tr>
    <th>No</th>
    <th>HP</th>
	<th>Upah</th>
	<th>Warranty</th>
	<th>Markup</th>
	<th>Total</th>
	<th>Delete</th>
	<th>Update</th>
  </tr>
<?php
include('dbconnect.php');
$i =0;
$sql="SELECT * FROM warrantymedia";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows = $result->fetch_assoc()) {
$i++;
?>
    <tr class="text">
      <td align="center"><?php echo $i; ?></td>
<td align="center"><?php echo $rows['hp_media']; ?></td>
<td align="center"><?php echo $rows['wages_media']; ?></td>
<td align="center"><?php echo $rows['warranty_media']; ?></td>
<td align="center"><?php echo $rows['markup_media']; ?></td>
<td align="center"><?php echo $rows['total_media']; ?></td>
<td align="center"><a href="deletewarrantymedia.php?hp_media=<?php echo $rows['hp_media'];?>">Delete</a></td>
<td align="center"><a href="staffpricemediawarrantyupdate.php?hp_media=<?php echo $rows['hp_media'];?>">Update</a></td>
     </tr>
<?php
}
}
$conn->close();?>
		
</table>

		 <br>
	<div  style="text-align:center" >
	<a href="staffwarrantymedia.php"><button style="padding: 5px 20px; width: 10%;background-color: none;">Add New</button></a>
</div>
		 <br>
		 <br>
		 </section>
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
                  <a href="staffhomepage.php">
                    Price
                  </a>
                </li>
                <li>
                  <a href="staffbooklist.php">
                    Book List
                  </a>
                </li>
                <li>
                  <a href="staffcustomerlist.php">
                    Customer List
                  </a>
                </li>
                <li>
                  <a href="staffstafflist.php">
                    Staff List
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
				    <i class="fas fa-envelope" style="font-size:18px"><span>&nbsp;seawaves.const.engineering@gmail.com</span></i>
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
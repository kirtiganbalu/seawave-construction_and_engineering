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
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
          <a class="navbar-brand" href="#">
            <span>
              SEAWAVES
            </span>
          </a>

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
  
    <!-- end slider section -->
  </div>
	
	<br><br><br><br>
	<h1 style="text-align: center"><p> Update Booking Slot</p></h1>
	
	<div>
	
	<form name="form1" method="post" action="">
	<table border="1" align="center" >
  	<tbody>
 	<?php 
      include('dbconnect.php');

      //get value of ic that sent from address bar

      $Date_Time=$_GET['Date_Time'];

      //retrive data from database

      $sql="SELECT *FROM bookinglist WHERE Date_Time='$Date_Time' ";
      $result = $conn ->query($sql);
          if ($result->num_rows>0){
            //output data of each row
            while($rows = $result->fetch_assoc()){

        ?>
    <tr>
      <th width="">Name</th>
      <td width=""><input type="text" name="name_book" id="textfield" value="<?php echo $rows['name_book']; ?>"></td>
    </tr>
    <tr>
      <th>Registration Date</th>
      <td><input type="text" name="Date_Time" id="textfield2" readonly value="<?php echo $rows['Date_Time']; ?>"></td>
    </tr>
    <tr>
      <th>Email</th>
     <td><input type="text" name="email_book" id="textfield2" value="<?php echo $rows['email_book']; ?>"></td>
    </tr>
    <tr>
      <th>Phone Number</th>
      <td><input type="number" name="phone_book" id="textfield3" value="<?php echo $rows['phone_book']; ?>"></td>
    </tr>
	<tr>
      <th>Service</th>
      <td><input type="text" name="service_book" id="textfield3" value="<?php echo $rows['service_book']; ?>"></td>
    </tr>
	<tr>
      <th>Request</th>
      <td><input type="text" name="request_book" id="textfield3" value="<?php echo $rows['request_book']; ?>"></td>
    </tr>
	<tr>
      <th>Address</th>
      <td><input type="text" name="address_book" id="textfield3" value="<?php echo $rows['address_book']; ?>"></td>
    </tr>
	<tr>
      <th>Time</th>
      <td><input type="text" name="time_book" id="textfield3" value="<?php echo $rows['time_book']; ?>"></td>
    </tr>
	<tr>
      <th>Date</th>
      <td><input type="text" name="date_book" id="textfield3" value="<?php echo $rows['date_book']; ?>"></td>
    </tr>
    <tr><center>
      <td colspan="2" style="text-align: center" ><input type="submit" name="btnSubmit" id="submit" value="Submit">
        <input  type="reset" name="btnReset" id="reset" value="Reset"></td>
     </center> </tr>
  </tbody>
		
<?php 
        }
        }
      ?>

</table>
<?php
if (isset($_POST['btnSubmit']))
{
// Get values from form
$name_book=$_POST['name_book'];
$email_book=$_POST['email_book'];
$phone_book=$_POST['phone_book'];
$service_book=$_POST['service_book'];
$request_book=$_POST['request_book'];
$address_book=$_POST['address_book'];
$time_book=$_POST['time_book'];
$date_book=$_POST['date_book'];
$Date_Time=$_POST['Date_Time'];
 
// Update data into mysql
$sql_update="UPDATE bookinglist SET name_book='$name_book',email_book='$email_book',phone_book='$phone_book',service_book='$service_book',
request_book='$request_book',address_book='$address_book',time_book='$time_book',date_book='$date_book' ,Date_Time='$Date_Time' WHERE Date_Time='$Date_Time'";
if ($conn->query($sql_update) === TRUE) {
echo '<script type="text/javascript">
alert("Booking List Information Updated.");
window.location = "staffbooklist.php";
</script>';

}
else {
echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>
	</div>
  <div class="bg">

    <!-- about section -->




    <!-- end about section -->

    <!-- service section -->

    
	  

    <!-- work section -->


    <!-- end work section -->

    <!-- contact section -->

    <!-- end contact section -->

    
    <!-- info section -->





    <!-- end info_section -->

    <!-- footer section -->
    <!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>
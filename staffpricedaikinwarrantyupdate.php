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
	<h1 style="text-align: center"><p> Update Warranty Daikin</p></h1>
	
	<div>
	
	<form name="form1" method="post" action="">
	<table border="1" align="center" >
  	<tbody>
 	<?php 
      include('dbconnect.php');

      //get value of ic that sent from address bar

      $hp_daikin=$_GET['hp_daikin'];

      //retrive data from database

      $sql="SELECT *FROM warrantydaikin WHERE hp_daikin='$hp_daikin' ";
      $result = $conn ->query($sql);
          if ($result->num_rows>0){
            //output data of each row
            while($rows = $result->fetch_assoc()){

        ?>
    <tr>
      <th width="">HP</th>
      <td width=""><input type="text" name="hp_daikin" id="textfield" readonly value="<?php echo $rows['hp_daikin']; ?>"></td>
    </tr>
    <tr>
      <th>Wages</th>
      <td><input type="text" name="wages_daikin" id="textfield2" value="<?php echo $rows['wages_daikin']; ?>"></td>
    </tr>
    <tr>
      <th>Warranty</th>
     <td><input type="text" name="warranty_daikin" id="textfield2" value="<?php echo $rows['warranty_daikin']; ?>"></td>
    </tr>
    <tr>
      <th>Markup</th>
      <td><input type="text" name="markup_daikin" id="textfield3" value="<?php echo $rows['markup_daikin']; ?>"></td>
    </tr>
	<tr>
      <th>Total</th>
      <td><input type="text" name="total_daikin" id="textfield3" value="<?php echo $rows['total_daikin']; ?>"></td>
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
$hp_daikin=$_POST['hp_daikin'];
$wages_daikin=$_POST['wages_daikin'];
$warranty_daikin=$_POST['warranty_daikin'];
$markup_daikin=$_POST['markup_daikin'];
$total_daikin=$_POST['total_daikin'];
 
// Update data into mysql
$sql_update="UPDATE warrantydaikin SET hp_daikin='$hp_daikin',wages_daikin='$wages_daikin',warranty_daikin='$warranty_daikin',
markup_daikin='$markup_daikin', total_daikin='$total_daikin' WHERE hp_daikin='$hp_daikin'";
if ($conn->query($sql_update) === TRUE) {
echo '<script type="text/javascript">
alert("Staff information updated.");
window.location = "staffhomepage.php";
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
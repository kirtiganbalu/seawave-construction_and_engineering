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
	<h1 style="text-align: center"><p> Update Staff List</p></h1>
	
	<div>
	
	<form name="form1" method="post" action="">
	<table border="1" align="center" >
  	<tbody>
 	<?php 
      include('dbconnect.php');

      //get value of ic that sent from address bar

      $id_staff=$_GET['id_staff'];

      //retrive data from database

      $sql="SELECT *FROM stafflist WHERE id_staff='$id_staff' ";
      $result = $conn ->query($sql);
          if ($result->num_rows>0){
            //output data of each row
            while($rows = $result->fetch_assoc()){

        ?>
    <tr>
      <th width="">Id</th>
      <td width=""><input type="text" name="id_staff" id="textfield" readonly value="<?php echo $rows['id_staff']; ?>"></td>
    </tr>
    <tr>
      <th>Name</th>
      <td><input type="name" name="name_staff" id="textfield2" value="<?php echo $rows['name_staff']; ?>"></td>
    </tr>
    <tr>
      <th>Position</th>
     <td><input type="text" name="position_staff" id="textfield2" value="<?php echo $rows['position_staff']; ?>"></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><input type="text" name="email_staff" id="textfield3" value="<?php echo $rows['email_staff']; ?>"></td>
    </tr>
	<tr>
      <th>Password</th>
      <td><input type="text" name="password_staff" id="textfield3" value="<?php echo $rows['password_staff']; ?>"></td>
    </tr>
	<tr>
      <th>Phone Number</th>
      <td><input type="number" name="phone_staff" id="textfield3" value="<?php echo $rows['phone_staff']; ?>"></td>
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
$id_staff=$_POST['id_staff'];
$name_staff=$_POST['name_staff'];
$position_staff=$_POST['position_staff'];
$email_staff=$_POST['email_staff'];
$password_staff=$_POST['password_staff'];
$phone_staff=$_POST['phone_staff'];


// Update data into mysql
$sql_update="UPDATE stafflist SET id_staff='$id_staff',name_staff='$name_staff',position_staff='$position_staff',
email_staff='$email_staff',password_staff='$password_staff',phone_staff='$phone_staff' WHERE id_staff='$id_staff'";
if ($conn->query($sql_update) === TRUE) {
echo '<script type="text/javascript">
alert("Staff List Information Updated.");
window.location = "staffstafflist.php";
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
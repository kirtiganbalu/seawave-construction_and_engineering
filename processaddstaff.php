<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $id_staff = $_POST['Id'];
	$name_staff = $_POST['Name'];
	$position_staff = $_POST['Position'];
	$email_staff = $_POST['Email'];
	$password_staff = $_POST['Password'];
	$phone_staff = $_POST['PhoneNumber'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO stafflist(id_staff,name_staff,position_staff,email_staff,password_staff,phone_staff)
    VALUES ('$id_staff','$name_staff','$position_staff','$email_staff','$password_staff','$phone_staff')";
    $conn->exec($sql);
    
	header("location:staffstafflist.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $name_book = $_POST['Name'];
	$email_book = $_POST['Email'];
	$phone_book = $_POST['PhoneNumber'];
	$service_book = $_POST['TypeOfService'];
	$request_book = $_POST['Request'];
	$time_book = $_POST['Time'];
	$address_book = $_POST['Address'];
	$date_book = $_POST['Calendar'];
	
	
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO bookinglist (name_book,email_book,phone_book,service_book,request_book,time_book,address_book,date_book,Date_Time)
    VALUES ('$name_book','$email_book','$phone_book','$service_book','$request_book','$time_book','$address_book','$date_book','$Date_Time')";
    $conn->exec($sql);
    
	header("location:staffbooklist.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $name_customer = $_POST['Name'];
	$email_customer = $_POST['Email'];
	$password_customer = $_POST['Password'];
	$phone_customer = $_POST['PhoneNumber'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO customerlist(name_customer,email_customer,password_customer,phone_customer)
    VALUES ('$name_customer','$email_customer','$password_customer','$phone_customer')";
    $conn->exec($sql);
    
	header("location:staffcustomerlist.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
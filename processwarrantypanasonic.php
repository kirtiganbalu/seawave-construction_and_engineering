<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $hp_panasonic = $_POST['Hp'];
	$wages_panasonic = $_POST['Upah'];
	$warranty_panasonic = $_POST['Warranty'];
	$markup_panasonic = $_POST['Markup'];
	$total_panasonic = $_POST['Total'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO warrantypanasonic(hp_panasonic,wages_panasonic,warranty_panasonic,markup_panasonic,total_panasonic)
    VALUES ('$hp_panasonic','$wages_panasonic','$warranty_panasonic','$markup_panasonic','$total_panasonic')";
    $conn->exec($sql);
    
	header("location:staffpricepanasonic.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
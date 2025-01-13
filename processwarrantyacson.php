<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $hp_acson = $_POST['Hp'];
	$wages_acson = $_POST['Upah'];
	$warranty_acson = $_POST['Warranty'];
	$markup_acson = $_POST['Markup'];
	$total_acson = $_POST['Total'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO warrantyacson(hp_acson,wages_acson,warranty_acson,markup_acson,total_acson)
    VALUES ('$hp_acson','$wages_acson','$warranty_acson','$markup_acson','$total_acson')";
    $conn->exec($sql);
    
	header("location:staffpriceacson.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
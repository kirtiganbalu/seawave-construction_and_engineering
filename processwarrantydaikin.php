<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $hp_daikin = $_POST['Hp'];
	$wages_daikin = $_POST['Upah'];
	$warranty_daikin = $_POST['Warranty'];
	$markup_daikin = $_POST['Markup'];
	$total_daikin = $_POST['Total'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO warrantydaikin (hp_daikin,wages_daikin,warranty_daikin,markup_daikin,total_daikin)
    VALUES ('$hp_daikin','$wages_daikin','$warranty_daikin','$markup_daikin','$total_daikin')";
    $conn->exec($sql);
    
	header("location:staffhomepage.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
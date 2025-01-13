<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $hp_media = $_POST['Hp'];
	$wages_media = $_POST['Upah'];
	$warranty_media = $_POST['Warranty'];
	$markup_media = $_POST['Markup'];
	$total_media = $_POST['Total'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO warrantymedia (hp_media,wages_media,warranty_media,markup_media,total_media)
    VALUES ('$hp_media','$wages_media','$warranty_media','$markup_media','$total_media')";
    $conn->exec($sql);
    
	header("location:staffpricemedia.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
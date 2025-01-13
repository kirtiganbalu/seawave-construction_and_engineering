<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $type_media = $_POST['Type'];
	$hp_media = $_POST['Hp'];
	$noninverter_media = $_POST['Non-Inverter'];
	$inverter_media = $_POST['Inverter'];
	$install_media = $_POST['Install'];
	$normalservice_media = $_POST['NormalService'];
	$chemicalservice_media = $_POST['ChemicalService'];
	$hacking_media = $_POST['Hacking'];
	$cooper_media = $_POST['Cooper'];
	
	
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO pricemedia(type_media,hp_media,noninverter_media,inverter_media,install_media,normalservice_media,chemicalservice_media,hacking_media,cooper_media)
    VALUES ('$type_media','$hp_media','$noninverter_media','$inverter_media','$install_media','$normalservice_media','$chemicalservice_media','$hacking_media','$cooper_media')";
    $conn->exec($sql);
    
	header("location:staffpricemedia.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
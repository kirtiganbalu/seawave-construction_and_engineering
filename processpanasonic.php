<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $type_panasonic = $_POST['Type'];
	$hp_panasonic = $_POST['Hp'];
	$noninverter_panasonic = $_POST['Non-Inverter'];
	$inverter_panasonic = $_POST['Inverter'];
	$install_panasonic = $_POST['Install'];
	$normalservice_panasonic = $_POST['NormalService'];
	$chemicalservice_panasonic = $_POST['ChemicalService'];
	$hacking_panasonic = $_POST['Hacking'];
	$cooper_panasonic = $_POST['Cooper'];
	
	
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO pricepanasonic(type_panasonic,hp_panasonic,noninverter_panasonic,inverter_panasonic,install_panasonic,normalservice_panasonic,chemicalservice_panasonic,hacking_panasonic,cooper_panasonic)
    VALUES ('$type_panasonic','$hp_panasonic','$noninverter_panasonic','$inverter_panasonic','$install_panasonic','$normalservice_panasonic','$chemicalservice_panasonic','$hacking_panasonic','$cooper_panasonic')";
    $conn->exec($sql);
    
	header("location:staffpricepanasonic.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
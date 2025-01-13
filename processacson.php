<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $type_acson = $_POST['Type'];
	$hp_acson = $_POST['Hp'];
	$noninverter_acson = $_POST['Non-Inverter'];
	$inverter_acson = $_POST['Inverter'];
	$install_acson = $_POST['Install'];
	$normalservice_acson = $_POST['NormalService'];
	$chemicalservice_acson = $_POST['ChemicalService'];
	$hacking_acson = $_POST['Hacking'];
	$cooper_acson = $_POST['Cooper'];
	
	
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO priceacson(type_acson,hp_acson,noninverter_acson,inverter_acson,install_acson,normalservice_acson,chemicalservice_acson,hacking_acson,cooper_acson)
    VALUES ('$type_acson','$hp_acson','$noninverter_acson','$inverter_acson','$install_acson','$normalservice_acson','$chemicalservice_acson','$hacking_acson','$cooper_acson')";
    $conn->exec($sql);
    
	header("location:staffpriceacson.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
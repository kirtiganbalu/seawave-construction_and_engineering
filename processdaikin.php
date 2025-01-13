<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "project";
	
try {
    $type_daikin = $_POST['Type'];
	$hp_daikin = $_POST['Hp'];
	$noninverter_daikin = $_POST['Non-Inverter'];
	$inverter_daikin = $_POST['Inverter'];
	$install_daikin = $_POST['Install'];
	$normalservice_daikin = $_POST['NormalService'];
	$chemicalservice_daikin = $_POST['ChemicalService'];
	$hacking_daikin = $_POST['Hacking'];
	$cooper_daikin = $_POST['Cooper'];
	
	
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $Date_Time = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO pricedaikin(type_daikin,hp_daikin,noninverter_daikin,inverter_daikin,install_daikin,normalservice_daikin,chemicalservice_daikin,hacking_daikin,cooper_daikin)
    VALUES ('$type_daikin','$hp_daikin','$noninverter_daikin','$inverter_daikin','$install_daikin','$normalservice_daikin','$chemicalservice_daikin','$hacking_daikin','$cooper_daikin')";
    $conn->exec($sql);
    
	header("location:staffhomepage.php");    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }



$conn = null;
?>
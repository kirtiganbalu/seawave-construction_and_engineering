<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM pricedaikin WHERE hp_daikin='" . $_GET["hp_daikin"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This price already been delete.");
window.location = "staffhomepage.php";
</script>';
} 
mysqli_close($conn);
?>
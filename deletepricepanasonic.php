<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM pricepanasonic WHERE hp_panasonic='" . $_GET["hp_panasonic"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This price already been delete.");
window.location = "staffpricepanasonic.php";
</script>';
} 
mysqli_close($conn);
?>
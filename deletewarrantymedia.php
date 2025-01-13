<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM warrantymedia WHERE hp_media='" . $_GET["hp_media"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This price already been delete.");
window.location = "staffpricemedia.php";
</script>';
} 
mysqli_close($conn);
?>
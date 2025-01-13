<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM priceacson WHERE hp_acson='" . $_GET["hp_acson"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This price already been delete.");
window.location = "staffpriceacson.php";
</script>';
} 
mysqli_close($conn);
?>
<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM bookinglist WHERE Date_Time='" . $_GET["Date_Time"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This booking slot already been delete.");
window.location = "staffbooklist.php";
</script>';
} 
mysqli_close($conn);
?>
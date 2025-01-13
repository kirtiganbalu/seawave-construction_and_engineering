<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM customerlist WHERE email_customer='" . $_GET["email_customer"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This slot already been delete.");
window.location = "staffcustomerlist.php";
</script>';
} 
mysqli_close($conn);
?>
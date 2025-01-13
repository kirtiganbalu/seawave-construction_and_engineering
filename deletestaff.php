<?php
include_once 'dbconnect.php';
$sql = "DELETE FROM stafflist WHERE id_staff='" . $_GET["id_staff"] . "'";
if (mysqli_query($conn, $sql)) {
echo '<script type="text/javascript">
alert("This slot already been delete.");
window.location = "staffstafflist.php";
</script>';
} 
mysqli_close($conn);
?>
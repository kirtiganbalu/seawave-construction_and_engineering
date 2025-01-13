<?php

session_start ();
include('dbconnect.php'); // Create connection
// username and password sent from form
if (isset($_REQUEST['submit']))
{
$myusername1=$_POST['username'];
$mypassword2=$_POST['pass'];
$sql="SELECT * FROM stafflist WHERE id_staff='$myusername1'
and password_staff='$mypassword2'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $_SESSION["username11"]=$myusername1;
    $loginid = "SELECT * FROM stafflist WHERE != '$myusername1'
            AND id_staff='id_staff' order by id_staff";
    $resultname = $conn ->query($loginid);


    header("location: staffhomepage.php");
}
    else {
echo "<h3>Wrong ID and Password</h3>";
        echo '<button><a href="stafflogin.php" >Back To Login Page</a></button>';
        echo "<BR>";
}
$conn->close();
    }
?>
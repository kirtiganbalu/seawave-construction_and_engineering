<?php

session_start ();
include('dbconnect.php'); // Create connection
// username and password sent from form
if (isset($_REQUEST['submit']))
{
$myusername1=$_POST['username'];
$mypassword2=$_POST['pass'];
$sql="SELECT * FROM customerlist WHERE email_customer='$myusername1'
and password_customer='$mypassword2'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $_SESSION["username11"]=$myusername1;
    $loginid = "SELECT * FROM customerlist WHERE != '$myusername1'
            AND email_customer='email_customer' order by email_customer";
    $resultname = $conn ->query($loginid);


    header("location: customerhomepage.php");
}
    else {
echo "<h3>Wrong Email and Password</h3>";
        echo '<button><a href="customerlogin.php" >Back To Login Page</a></button>';
        echo "<BR>";
}
$conn->close();
    }
?>
<?php
include_once 'dbconnect.php';
if(isset($_POST['save']))
{
     $name_customer = $_POST['Name'];
     $email_customer = $_POST['Email'];
     $password_customer = $_POST['Password'];
     $phone_customer = $_POST['PhoneNumber'];

     $sql = "INSERT INTO customerlist (name_customer,email_customer,password_customer,phone_customer)
     VALUES ('$name_customer','$email_customer','$password_customer','$phone_customer')";
     if (mysqli_query($conn, $sql)) {
       header("location:customerlogin.php");
     } else {
        echo '<script type="text/javascript">
alert("This email already exist, Please use another email.");
window.location = "customerlogin.php";
</script>';

 mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
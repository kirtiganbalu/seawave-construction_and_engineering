<?php
include_once 'dbconnect.php';
if(isset($_POST['save']))
{
     $id_staff = $_POST['Id'];
     $name_staff = $_POST['Name'];
     $position_staff = $_POST['Position'];
     $email_staff = $_POST['Email'];
     $password_staff = $_POST['Password'];
     $phone_staff = $_POST['PhoneNumber'];

     $sql = "INSERT INTO stafflist (id_staff,name_staff,position_staff,email_staff,password_staff,phone_staff)
     VALUES ('$id_staff','$name_staff','$position_staff','$email_staff','$password_staff','$phone_staff')";
     if (mysqli_query($conn, $sql)) {
       header("location:stafflogin.php");
     } else {
        echo '<script type="text/javascript">
alert("This id already exist, Please use another id.");
window.location = "stafflogin.php";
</script>';

 mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
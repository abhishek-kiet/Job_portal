<?php
session_start();
$email=$_POST['email'];
$password=$_POST['pass'];
include("connection.php");
$query="select * from tbl_admin where email='$email' AND password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $_SESSION['admin']=$email;
    header("location:admin/admindash.php");
}
else
{
    echo "<script>alert('INCORRECT EMAIL OR PASSWORD!');window.location.href='admin.php'</script>";
}
?>
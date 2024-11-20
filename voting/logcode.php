<?php
session_start();
$mobile=$_POST['mobile'];
$password=$_POST['pass'];
$role=$_POST['role'];
include("connection.php");
$query="select * from tbl_vote where mobile='$mobile' AND password='$password' AND role='$role'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $_SESSION['user']=$mobile;
    header("location:dashboard.php");
}
else
{
    header("location:login.php");
}
?>
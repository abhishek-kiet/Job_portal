<?php
$name=$_POST['name'];
$mob=$_POST['mobile'];
$password=$_POST['pass'];
$address=$_POST['address'];
$filename=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$tmp_name=$_FILES['photo']['tmp_name'];
$location="upload/";
$role=$_POST['role'];
include("connection.php");
$check="select * from tbl_vote where mobile='$mob'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    echo "<script>alert('User Already Exists');window.location.href='register.php'</script>";
}
else
{
    if($mob=="")
    {
        echo "<script>alert('FILL ALL THE DETAILS');window.location.href='register.php'</script>";
    }
    else{
$query="insert into tbl_vote (name,mobile,password,address,profile_pic,role,status) values('$name','$mob','$password','$address','$filename','$role','N')";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$filename);
echo "<script>alert('Registration Sucessfull!');window.location.href='register.php'</script>";
}
}
?>
<?php
session_start();
$mobile=$_SESSION['user'];
$id=$_REQUEST['id'];
// echo $id;
include("connection.php");
$query="select * from tbl_vote where mobile='$mobile'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $status=$row['status'];
    // $vid=$row['vid'];
    $name=$row['name'];
}
if($status=='N')
{
    $query2="update tbl_vote set status='V' where mobile='$mobile' ";
    mysqli_query($con,$query2);

    
    $query3="insert into tbl_vc (vid,votes,name) values('$id','Vote Submitted By','$name')";
    mysqli_query($con,$query3);
    
}
echo "<script>alert('VOTING DONE SUCESSFULLY!!');window.location.href='dashboard.php'</script>";
// header("location:dashboard.php");
?>
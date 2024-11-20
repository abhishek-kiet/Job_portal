<?php
session_start();
include("dashinc.php");
include("navinc.php");
// echo $_SESSION['admin'];
include("../connection.php");
$query="select count(vid) from tbl_vc where vid='4'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $BJP=$row['0'];
}
$query2="select count(vid) from tbl_vc where vid='5'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
{
    $AAP=$row2['0'];
}
$query3="select profile_pic from tbl_vote where vid='5'";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3))
{
    $AAP_PIC=$row3['profile_pic'];
}
$query4="select profile_pic from tbl_vote where vid='4'";
$res4=mysqli_query($con,$query4);
if($row4=mysqli_fetch_array($res4))
{
    $BJP_PIC=$row4['profile_pic'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #nav a{
            color: black;
        }
        #nav a:hover{
            color: #fff;
        }
        #nav{
            animation: bgrcolor 5s  linear infinite;
        }
        @keyframes bgrcolor {
        0%{
            background-color: #F9ECD9;
            
        }
        20%{
            background-color: #F7E3CC;
           
        }
        40%{
            background-color: #F7CEE2 ;
           
        }
        60%{
            background-color: #CCCAF0 ;
           
        }
        80%{
            background-color: #CFDFEF;
           
        }
        100%{
            background-color: #F9ECD9;
            
        }
    }
        #box{
            height: 742px;
            width: 100%;
            display: flex;
            flex-wrap:wrap;
            padding-left: 275px;
            padding-top: 20px;
        }
        .card{
            height: 250px;
            width: 400px;
            margin-top: 30px;
            margin-left: 150px;
            animation: bgrcolor 5s  linear infinite;
            border-radius: 15px;
            /* border: 1px solid black; */
            box-shadow: 0px 0px 20px black;
        }
    </style>
</head>
<body>
    <div id="box">
        <div class="card">
            <span style="margin-left:140px"><img src="../upload/<?php echo $BJP_PIC ?>" alt="" width="100px"></span>
            <br>
            <br>
            <span style="position:relative; top: 30px; left: 5px;">TOTAL VOTES: <p style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $BJP; ?></p> </span>
        </div>

        <div class="card">
        <span style="margin-left:140px; margin-top:20px;"><img src="../upload/<?php echo $AAP_PIC ?>" alt="" width="100px"></span>
            <br>
            <br>
            <span style="position:relative; top: 100px; left: 5px;">TOTAL VOTES: <p style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $AAP; ?></p> </span>
        </div>
    </div>
</body>
</html>
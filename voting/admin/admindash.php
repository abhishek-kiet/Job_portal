<?php
session_start();
include("dashinc.php");
include("navinc.php");
// echo $_SESSION['admin'];
include("../connection.php");

// Get vote counts for BJP, AAP, Samajwadi Party, and NOTA
$query = "SELECT COUNT(vid) FROM tbl_vc WHERE vid='4'";
$res = mysqli_query($con, $query);
if ($row = mysqli_fetch_array($res)) {
    $BJP = $row['0'];
}

$query2 = "SELECT COUNT(vid) FROM tbl_vc WHERE vid='5'";
$res2 = mysqli_query($con, $query2);
if ($row2 = mysqli_fetch_array($res2)) {
    $AAP = $row2['0'];
}

$query3 = "SELECT COUNT(vid) FROM tbl_vc WHERE vid='6'";
$res3 = mysqli_query($con, $query3);
if ($row3 = mysqli_fetch_array($res3)) {
    $Samajwadi = $row3['0'];
}

$query4 = "SELECT COUNT(vid) FROM tbl_vc WHERE vid='7'";
$res4 = mysqli_query($con, $query4);
if ($row4 = mysqli_fetch_array($res4)) {
    $NOTA = $row4['0'];
}

// Get profile pics for BJP, AAP, Samajwadi Party, and NOTA
$query5 = "SELECT profile_pic FROM tbl_vote WHERE vid='4'";
$res5 = mysqli_query($con, $query5);
if ($row5 = mysqli_fetch_array($res5)) {
    $BJP_PIC = $row5['profile_pic'];
}

$query6 = "SELECT profile_pic FROM tbl_vote WHERE vid='5'";
$res6 = mysqli_query($con, $query6);
if ($row6 = mysqli_fetch_array($res6)) {
    $AAP_PIC = $row6['profile_pic'];
}

$query7 = "SELECT profile_pic FROM tbl_vote WHERE vid='6'";
$res7 = mysqli_query($con, $query7);
if ($row7 = mysqli_fetch_array($res7)) {
    $Samajwadi_PIC = $row7['profile_pic'];
}

$query8 = "SELECT profile_pic FROM tbl_vote WHERE vid='7'";
$res8 = mysqli_query($con, $query8);
if ($row8 = mysqli_fetch_array($res8)) {
    $NOTA_PIC = $row8['profile_pic'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #nav a {
            color: black;
        }

        #nav a:hover {
            color: #fff;
        }

        #nav {
            animation: bgrcolor 5s linear infinite;
        }

        @keyframes bgrcolor {
            0% {
                background-color: #F9ECD9;
            }

            20% {
                background-color: #F7E3CC;
            }

            40% {
                background-color: #F7CEE2;
            }

            60% {
                background-color: #CCCAF0;
            }

            80% {
                background-color: #CFDFEF;
            }

            100% {
                background-color: #F9ECD9;
            }
        }

        #box {
            height: 742px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            padding-left: 275px;
            padding-top: 20px;
        }

        .card {
            height: 400px;
            padding-left: 20px;
            padding-top: 20px;
            /* Increased height by 70px */
            width: 400px;
            margin-top: 30px;
            margin-left: 150px;
            animation: bgrcolor 5s linear infinite;
            border-radius: 15px;
            box-shadow: 0px 0px 20px black;
        }
    </style>
</head>

<body>
    <div id="box">
        <div class="card">
            <span style="margin-left:140px"><img style="border-radius:50%; width:100px; height:100px;"
                    src="../upload/baspa.png" alt="" width="100px"></span>
            <br><span style="font-size: 32px; ">Bahujan Samaj Party</span>
            <br>
            <span style="position:relative; top: 30px; left: 5px;">TOTAL VOTES: <p
                    style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $BJP; ?></p> </span>
        </div>

        <div class="card">
            <span style="margin-left:140px; margin-top:20px;"><img style="border-radius:50%; width:100px; height:100px;"
                    src="../upload/bjp.png" alt="" width="100px"></span>
            <br><span style="font-size: 32px; ">Bhartiya Janta Party</span>
            <br>
            <span style="position:relative; top: 100px; left: 5px;">TOTAL VOTES: <p
                    style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $AAP; ?></p> </span>
        </div>

        <div class="card">
            <span style="margin-left:140px; margin-top:20px;"><img style="border-radius:50%; width:100px; height:100px;"
                    src="../upload/aap.png" alt="" width="100px"></span>
            <br><span style="font-size: 32px; ">Aam Admi Party</span>
            <br>
            <span style="position:relative; top: 100px; left: 5px;">TOTAL VOTES: <p
                    style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $Samajwadi; ?></p> </span>
        </div>

        <div class="card">
            <span style="margin-left:140px; margin-top:20px;"><img style="border-radius:50%; width:100px; height:100px;"
                    src="../upload/coi.png" alt="" width="100px"></span>
            <br><span style="font-size: 32px; ">C.O.I.</span>
            <br>
            <span style="position:relative; top: 100px; left: 5px;">TOTAL VOTES: <p
                    style="display: inline; font-size:75px; margin-left: 50px;"><?php echo $NOTA; ?></p> </span>
        </div>
    </div>
</body>

</html>
<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location:login.php");
}
$mobile = $_SESSION['user'];
include("connection.php");
$query = "select * from tbl_vote where role='2'";
$res = mysqli_query($con, $query);

$query2 = "select * from tbl_vote where mobile='$mobile'";
$res2 = mysqli_query($con, $query2);

while ($row2 = mysqli_fetch_array($res2)) {
    $name2 = $row2['name'];
    $pic2 = $row2['profile_pic'];
    $mob = $row2['mobile'];
    $status = $row2['status'];
    $address = $row2['address'];
    $role = $row2['role'];

    // Conditional check for user profile image
    $user_image = !empty($pic2) ? "upload/$pic2" : "upload/default.png";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                background-color: black;
                color: white;
                font-family: 'Poppins Black' !important;
            }

            #profile {
                float: left;
                width: 30%;
                height: 500px;
                border: 1px solid white;
                padding: 10px;
                position: absolute;
                margin-left: 5px;
                background-color: white;
                color: black;
                border-radius: 15px;
                box-shadow: 0px 0px 15px pink;
            }

            #group {
                background-color: white;
                color: black;
                float: right;
                width: 60%;
                border: 1px solid black;
                padding: 10px;
                margin-top: 5px;
                margin-right: 5px;
                border-radius: 10px;
            }

            #group img {
                filter: drop-shadow(5px 5px 5px black);
            }

            #nav button {
                position: relative;
                background-color: transparent;
                border: 0px;
                font-family: 'Poppins Black';
                font-size: 22px;
                text-decoration: overline;
                margin-left: 50px;
                color: white;
            }

            #nav button:hover {
                text-shadow: 0px 0px 20px cyan;
            }

            #nav button::after {
                content: "";
                position: absolute;
                height: 3px;
                width: 0;
                background-color: cyan;
                bottom: -5px;
                left: 0;
                transition: 0.5s;
            }

            #nav button:hover::after {
                width: 100%;
            }
        </style>
    </head>

    <body>

        <h1 align="center">ONLINE VOTING SYSTEM <i class="bi bi-hand-index"></i></h1>
        <div id="nav" align="center">
            <a href="logout.php"><button>LogOut</button></a>
            <a href="#"><button>Update Profile</button></a>
            <a href="#"><button>Update Photo</button></a>
            <a href="#"><button>Change Password</button></a>
        </div>
        <hr style="background-color:white; height:5px; box-shadow:0px 4px 5px whitesmoke;">
        <?php
        // Adding existing parties from database
        while ($row = mysqli_fetch_array($res)) {
            $name = $row['name'];
            $pic = $row['profile_pic'];
            $vid = $row['vid'];
            ?>

            <div id="group">
                <span style="font-weight: bold;">GROUP NAME: </span><span style="font-size: 35px;"><?php echo $name; ?></span>
                <img src="upload/<?php echo $pic; ?>" alt="" style="float: right; height:100px; width:100px;">
                <br /><br />
                <?php
                if ($status == 'N') {
                    ?>
                    <form action="vote.php" method="post">
                        <input type="hidden" name="id" id="" value="<?php echo $vid; ?>">
                        <input type="submit" value="Vote" />
                    </form>
                    <?php
                } else {
                    ?>
                    <button type="button" class="btn btn-dark" disabled>Voted</button>
                    <?php
                }
                ?>
            </div>
            <?php
        }


        $additional_parties = [
            ['name' => 'Samajwadi Party', 'pic' => 'baspa.png', 'vid' => '1001'],
            ['name' => 'Bhartiya Janta Party', 'pic' => 'bjp.png', 'vid' => '1002'],
            ['name' => 'Aam Admi Party', 'pic' => 'aap.png', 'vid' => '1003'],
            ['name' => 'C.O.I.', 'pic' => 'coi.png', 'vid' => '1004'],
            ['name' => 'N.P.P.', 'pic' => 'npp.jpg', 'vid' => '1005']
        ];

        foreach ($additional_parties as $party) {
            ?>
            <div id="group">
                <span style="font-weight: bold;">GROUP NAME: </span><span
                    style="font-size: 35px;"><?php echo $party['name']; ?></span>
                <img src="upload/<?php echo $party['pic']; ?>" alt="" style="float: right; height:100px; width:100px;">
                <br /><br />
                <?php
                if ($status == 'N') {
                    ?>
                    <form action="vote.php" method="post">
                        <input type="hidden" name="id" id="" value="<?php echo $party['vid']; ?>">
                        <input type="submit" value="Vote" />
                    </form>
                    <?php
                } else {
                    ?>
                    <button type="button" class="btn btn-dark" disabled>Voted</button>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>

        <div id="profile">
            <span style="font-weight: bold;">VOTER NAME:</span><span style="font-size: 35px;"><?php echo $name2; ?></span>
            <img src="<?php echo $user_image; ?>" alt="User Image" style="float: right; height:100px; width:100px;">
            <br>
            <span style="font-weight: bold; font-size: 25px;">Address: <?php echo $address; ?></span>
        </div>
        <?php
}
?>
</body>

</html>
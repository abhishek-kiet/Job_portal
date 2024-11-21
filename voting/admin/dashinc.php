<?php
if ($_SESSION['admin'] == "") {
  header("location:../logout.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/dstyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Boxicons CSS -->
  <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="../js/dscript.js" defer></script>
</head>

<body>
  <nav class="sidebar locked" id="nav">
    <div class="logo_items flex">
      <!-- <span class="nav_image">
          <img src="../images/logo.png" alt="logo_img" />
        </span> -->
      <span class="logo_name" style="font-weight: bold; font-size:21px">ONLINE VOTING SYSTEM</span>
      <!-- <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i> -->
      <i class="bx bx-x" id="sidebar-close"></i>
    </div>

    <div class="menu_container">
      <!-- <div class="menu_items"> -->
      <!-- <ul class="menu_item"> -->
      <!-- <div class="menu_title flex"> -->
      <!-- <span class="title"></span> -->
      <!-- <span class="line"></span> -->
      <!-- </div> -->
      <li class="item">
        <a href="admindash.php" class="link flex">
          <i class="bi bi-house-door"></i>
          <span>Dashboard</span>
        </a>
      </li>



      <!-- <div class="menu_item">
              <span class="title">----</span>
              <span class="line"></span>
            </div> -->
      <li class="item">
        <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=ovs&table=tbl_vote&pos=0" class="link flex">
          <i class="bi bi-person"></i>
          <span>User Management</span>
        </a>
      </li>
      <!-- <li class="item">
              <a href="#" class="link flex">
              <i class="bi bi-chat-dots"></i>
                <span>Disscussion Forum</span>
              </a>
            </li> -->
      <li class="item">
        <a href="change.php" class="link flex">
          <i class="bi bi-gear"></i>
          <span>Change Password</span>
        </a>
      </li>
      <li class="item">
        <a href="../logout.php" class="link flex">
          <i class="bi bi-door-open"></i>
          <span>Log Out</span>
        </a>
      </li>
      </ul>
    </div>


    </div>
  </nav>

  <!-- Navbar -->

</body>

</html>
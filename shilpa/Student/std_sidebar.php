<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <meta http-equiv="refresh" content="">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <a class="link_name" href="std_dashboard.php">
    <i class="fa fa-scribd" aria-hidden="true"></a></i>
      <!--div><img src="logo.png" width="78px" height="52px"></div-->
      <span class="logo_name">- SHILPA</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="std_profile.php">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="std_profile.php">Profile</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
          <a href="std_materials.php">
          <i class='bx bx-folder-open' ></i>
            <span class="link_name">Materials</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="std_materials.php">Materials</a></li>
          <li><a href="#">Combined Maths</a></li>
          <li><a href="#">Physics</a></li>
          <li><a href="#">Chemistry</a></li>
          <li><a href="#">Biology</a></li>
        </ul>
      </li>
      
      
      
      <li>
        <a href="std_finance.php">
        <i class='bx bx-credit-card'></i>
          <span class="link_name">Finance</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="std_finance.php">Finance</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="image/profile.jpg" alt="profileImg">
          </div>
          <div class="name-job">


            <i class='bx bx-log-out'> <a href="logout.php"> Logout</a></i>
          </div>
      </li>
    </ul>
  </div>
  
  
</body>
</html>
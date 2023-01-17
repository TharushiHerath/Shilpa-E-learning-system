
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/dashboard.css" type="text/css"/>
  <link rel="stylesheet" href="css/materials.css" type="text/css"/>
  <meta http-equiv="refresh" content="">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include_once "std_sidebar.php"; ?>
<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Shilpa Online Learning Platform</span>
    </div>
    

    <div class="search">
          <span class="text">Search pdf or video...</span>
          <input type="text" placeholder="Enter name to search...">
          <button><i class='bx bx-search-alt-2'></i></button>
        </div>
        
    <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>67<br /><span>PDF</span></p>


      </div></div>
      <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>67<br /><span>VIDEO</span></p>


      </div></div>
      <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>67<br /><span>EXTRA</span></p>


      </div>
      

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
</body>

</html>

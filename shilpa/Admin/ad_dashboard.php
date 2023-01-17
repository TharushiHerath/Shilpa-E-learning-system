<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <meta http-equiv="refresh" content="">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include_once "sidebar.php"; ?>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Shilpa Online Learning Platform</span>
    </div>



    <br />

    <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>67<br /><span>Students</span></p>


      </div>
    </div>
    <div class="col-div-3">
      <div class="box"><button class="B1">
          <p>12<br /><span>Teachers</span></p>

      </div></button>
    </div>
    <div class="col-div-3">
      <div class="box"><button class="B1">
          <p>99<br /><span>Materials</span></p>

      </div>
    </div>
    <div class="col-div-3">
      <div class="box"><button class="B1">
          <p>28<br /><span>Orders</span></p>

      </div>
    </div>
    <div class="clearfix"></div>
    <br /><br />
    <div class="col-div-8">
      <div class="box-8">
        <div class="content-box">
          <p>Top Selling Projects <span>Sell All</span></p>
          <br />

        </div>
      </div>
    </div>

    <div class="col-div-4">
      <div class="box-4">
        <div class="content-box">
          <p>Total Sale <span>Sell All</span></p>

          <div class="circle-wrap">
            <div class="circle">
              <div class="mask full">
                <div class="fill"></div>
              </div>
              <div class="mask half">
                <div class="fill"></div>
              </div>
              <div class="inside-circle"> 70% </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    </div>

   


  </section>




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
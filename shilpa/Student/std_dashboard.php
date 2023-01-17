
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/dashboard.css" type="text/css"/>
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

    
    <div class="container">
    <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>47<br /><span>Nnotes</span></p>


      </div>
    </div>
    <div class="col-div-3">
      <div class="box"><button class="B1">
          <p>3<br /><span>Innvite</span></p>

      </div></button>
      </div>
    
    <div class="col-div-3">
      <div class="box">
        <button class="B1">
          <p>47<br /><span>Notes</span></p>


      </div>
    </div>
    <div class="col-div-3">
      <div class="box"><button class="B1">
          <p>3<br /><span>Invite</span></p>

      </div></button>
    </div>
    
      <div id="w1" class="wrapper">
        <div class="top">
          <div class="perspective">
            <div class="card">

              <div class="chat-header">
                <div class="profile-pic"><img src="<?=$_SESSION['avatar']?>" class="photo" alt="photo"></div>
                <div class="profile-details">
                  <div class="name">
                    Chat
                  </div>
                  <div class="status">Members...</div>
                </div>
              </div>
              <div class="chat-area">
              </div>
              <div class="form">
                <form>
                  <div class="input">
                    <input type="text" name="private-input" autocomplete="off" placeholder="Type a message ...">
                    <button class="send" id="private">
                      Send
                    </button>
                  </div>

                </form>
              </div>
            </div>
          </div>

        </div>


      </div>
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

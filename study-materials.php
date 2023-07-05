<?php 
$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$server_name = $_SERVER['SERVER_NAME'];
$url = $protocol."://".$server_name."/loksewa/";
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Study Materials</title>
  <link rel="stylesheet" href="css/a_style.css" />
  </head>
<body>
  <div class="container">
    <?php include 'inc/navbar.php' ?>
    <section class="main">
      <div class="main-top">
        <h1>Study Materials</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">

      <section class="main-course">
        <div class="course-box">
          <ul>
            <li class="active">In progress</li>
            <li>explore</li>
            <li>incoming</li>
            <li>finished</li>
          </ul>
          <div class="course">
            <div class="box">
              <h3>HTML</h3>

              <button>continue</button>
              <i class="fab fa-html5 html"></i>
            </div>
            <div class="box">
              <h3>CSS</h3>

              <button>continue</button>
              <i class="fab fa-css3-alt css"></i>
            </div>
            <div class="box">
              <h3>JavaScript</h3>

              <button>continue</button>
              <i class="fab fa-js-square js"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>

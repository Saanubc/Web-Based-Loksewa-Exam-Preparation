<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/a_style.css" />
  </head>
<body>
  <div class="container">
    <nav>
    <div class="top_line">“याेग्यता, निष्पक्षता, स्वच्छता”</div>
      <ul>
        
        <li><a href="#" class="logo">
          <img src="image/Profile_pic.jpg" alt="">
          <span class="nav-item"><h3>Rahul BK</h3<br><h6>Singhsaanu_07</h6></span>
          </a></li>
        
        <li><a href="#">
          <span class="nav-item">Dashboard</span>
        </a></li>
        
        <li><a href="profile.php">
          <span class="nav-item">Profile</span>
        </a></li>
        
        <li><a href="">
          <span class="nav-item">Study Materials</span>
        </a></li>
        
        <li><a href="">
         <span class="nav-item">Take Exam</span>
        </a></li>
       
        <li><a href="">
          <span class="nav-item">Notices</span>
            </a>
              <ul>
              <li><a href="">
                  <span class="nav-item">Result</span>
                  </a></li>
                  <li><a href="">
                  <span class="nav-item">Job Vacancy</span>
                  </a></li>
                  <li><a href="">
                  <span class="nav-item">Other Notices</span>
                  </a></li>
              
              </ul>
            
        </li>
        
      </ul>

     <div class="footer">
        
        <ul>
            <li>
              <div class="logout"><a href="logout.php">Log out</a></div>
            </li>
        </ul>
       
        <hr class="footer_divider">
            <div class="footer_bottom">
                <span class="copyright">&copy; <?php echo date("Y"); ?> Loksewa Exam Preparation. All Rights Reserved.</span>
            </div>
     </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>EXAM HISTORY</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Web developemt</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
       

      <section class="main-course">
        <h1>NOTICE</h1>
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
              <p>80% - progress</p>
              <button>continue</button>
              <i class="fab fa-html5 html"></i>
            </div>
            <div class="box">
              <h3>CSS</h3>
              <p>50% - progress</p>
              <button>continue</button>
              <i class="fab fa-css3-alt css"></i>
            </div>
            <div class="box">
              <h3>JavaScript</h3>
              <p>30% - progress</p>
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

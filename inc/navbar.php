<?php 
$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$server_name = $_SERVER['SERVER_NAME'];
$url = $protocol."://".$server_name."/loksewa/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/a_style.css" />
  </head>
<body>
  <div class="container">
    <nav>
    <div class="top_line">“याेग्यता, निष्पक्षता, स्वच्छता”</div>
      <ul>
        
        <li><a href="#" class="logo">
          <img src="<?php echo $url.'/image/Profile_pic.jpg' ?>" alt="">
          <span class="nav-item"><h3>Rahul BK</h3<br><h6>Singhsaanu_07</h6></span>
          </a></li>
        
        <li><a href="<?php echo $url.'dashboard.php' ?>">
          <span class="nav-item">Dashboard</span>
        </a></li>
        
        <li><a href="<?php echo $url.'profile.php' ?>">
          <span class="nav-item">Profile</span>
        </a></li>
        
        <li><a href="<?php echo $url.'study-materials.php' ?>">
          <span class="nav-item">Study Materials</span>
        </a></li>
        
        <li><a href="<?php echo $url.'take-exam.php' ?>">
         <span class="nav-item">Take Exam</span>
        </a></li>
       
        <li><a href="<?php echo $url.'notices.php' ?>">
          <span class="nav-item">Notices</span>
            </a>
              <ul>
              <li><a href="<?php echo $url.'result.php' ?>">
                  <span class="nav-item">Result</span>
                  </a></li>
                  <li><a href="<?php echo $url.'job-vacancy.php' ?>">
                  <span class="nav-item">Job Vacancy</span>
                  </a></li>
                  <li><a href="<?php echo $url.'other-notices.php' ?>">
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
  </div>
</body>
</html>

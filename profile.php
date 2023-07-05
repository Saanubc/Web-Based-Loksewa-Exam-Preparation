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
  <link rel="stylesheet" href="css/a_style.css" />
  <link rel="stylesheet" href="../css/profile_css.css" />

  </head>
<body>
  <div class="container">
    <?php include 'inc/navbar.php' ?>
    
    
    <section class="main">


      <div class="main-top">
      <section class="cover-image-section">		
                    <header class="cover-hader-site">
                        
                        <img src="image/cover_pic.png">

                        <div class="cover-image-div">
                            <div class="cover-image-edite-btn">
                                <button>
                                    Edit Cover Photo
                                </button>
                            </div>
                        </div>

                    </header>
                </section>

                <section class="profile-section">
                    <div class="profile-section-in">
                        
                        <div class="profile-image-site">
                            <div class="profile-image-div">
                                <a href="#" id="profile-link">
                                    <img id="Profile_images" src="image/Profile_pic.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="profile-name-info">
                            <h1>
                                <span class="pro-txt" id="profile_name">Rahul BK</span>
                                <span id="nik-name"></span>
                            </h1>
                            <p>
                                <span class="fir-count-txt">
                                    <span id="friend_count">3.9K</span> Friends
                                </span>
                            </p>

                        </div>
                        <div class="profile-button-site">
                            <div class="btn-site-pro">
                                <span class="edit-profile-btn">
                                    <i class="fas fa-pen"></i>
                                    Edit Profile
                                </span>
                            </div>
                        </div>

                    </div>
                </section>
       
      </div>
      
      
      
      <div class="main-skills">
        Hello world
        
      </div>
     



    </section>
  </div>
</body>
</html>

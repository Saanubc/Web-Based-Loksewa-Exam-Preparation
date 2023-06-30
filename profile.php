<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/profile_css.css" />
  </head>
<body>
  <div class="container">
    <?php include 'inc/navbar.php' ?>

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


        <section class="cover-image-section">		
                    <header class="cover-hader-site">
                        
                        <img src="image/cover_pic.png">

                        <div class="cover-image-div">
                            <div class="cover-image-edite-btn">
                                <button>
                                    <i class="fas fa-camera"></i>
                                    Edit Covar Photo
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
                                <span class="fas fa-camera"></span>
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
       


      

    </section>
  </div>
</body>
</html>

<?php 
session_start();
if(isset ($_SESSION['email'])){
  header('location:home.php');
}

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $email = $_POST['email'];
  $password =  $_POST['password'];
  $sql = "SELECT * FROM user_form WHERE email='$email'";
  $result = $conn-> query($sql);
  $user = $result -> fetch_assoc();
 
  if ($result){

    $sql ="SELECT * FROM user_form WHERE email='$email' and password='$password'";
    $result =$conn-> query ($sql);

    if ($result->num_rows > 0){
      
      $_SESSION['email'] = $email;
      
      header('location:home.php');
        
    }else {
        echo "Invalid email or password.";
    }
    } else {
          echo "Email not Found.";
    }
}
function input ($data){
      $data = trim ($data);
      $data = stripslashes ($data);
      $data = htmlspecialchars ($data); //$name ="<h1> hello world</h1>"

      return $data;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin form</title>  
<link rel="stylesheet" href="css/style.css">
       
   
</head>

<body>
        <div class="form">
                <form action="dashboard.php" method="post">
                                    <h2>Sign in</h2>
                                    <label for="email">Email:</label>
                                    <input type="email" id= "email " name="email" required placeholder="Enter your email">
                                    <label for="password">password:</label>
                                    <input type="password" name="password" id="password" required placeholder="enter your password"><br>
                                    <button class="btnn"><a href="home.php">Login</a></button>

                                    <p class="link">Don't have an account<br>
                                    <a href="signup.php">Sign up </a> here</a></p>

                </form> 

        </div>
</body>
</html>
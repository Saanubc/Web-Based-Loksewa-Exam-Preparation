<?php
include 'connect.php'; // connect database


// define variables and set to empty values
$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = "";

//validation
if (empty($_POST["username"])) {
    $usernameErr = "username is required";
} else {
    $username = input($_POST["username"]);
}
if (empty($_POST['email'])) {
    $emailErr = "Email field required or invalid";
} else {
    $email = input($_POST["email"]);
}
if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
} else {
    $password = input($_POST["password"]);
}

//data insert into database
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if($usernameErr == "" && $emailErr == "" && $passwordErr == ""){

        if (preg_match ("/^[a-zA-z]*$/", $username) ) {  

            if(strlen($_POST["password"]) >= '8'){

            if(preg_match("#[0-9]+#",$password)) {

            if(preg_match("#[A-Z]+#",$password)){

            if(preg_match("#[a-z]+#",$password)){

        $sql = "INSERT INTO user_form (username, email, password)
        VALUES ('$username', '$email', '$password')";
        if($conn->query($sql) ===  TRUE){
        //echo "Data insert successsfully";
        header('location:login.php');
        }else{
            echo "Data insert Failed.";
        }
    
    
    }
    else{
           echo "Your Password Must Contain At Least 1 small Letter!";
    }
}

    else{
        echo "Your Password Must Contain At Least 1 Capital Letter!";
    }
}  
else{
    echo "Your Password Must Contain At Least 1 Number!";
}
        }
    else{
            echo "Your Password Must Contain At Least 8 Characters!";
    }     
} else{
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
    echo $ErrMsg;  
}
    }
    
}



function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
    <title>register form</title>
<link rel="stylesheet" href="Css/style.css"> 
   
</head>

<body>
        <div class="form">
                <form action="index.php" method="post">
                                    <h2>Registration Form</h2>
                                   
                                    <label for="full_name">Full Name:</label>
                                    <input type="full_name" id= "full_name " name="full_name" required placeholder="Enter your Name">
                                    
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="phone_number" name="phone_number" id="phone_number" required placeholder="Enter your Contact Number"><br>
                                   
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" required placeholder="Enter your Email"><br>

                                    <label for="password">password:</label>
                                    <input type="password" name="password" id="password" required placeholder="enter your password"><br>

                                    <button class="btnn"><a href="index.php">Login</a></button>

                                    <p class="link">Already have an account?<br>
                                    <a href="signin.php">Signin </a> here</a></p>

                </form> 

        </div>
</body>
</html>
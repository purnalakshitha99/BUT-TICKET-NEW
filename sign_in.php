<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="stylesigninup.css">
    <title>signin-signup</title>
</head>

<body>

<?php
if(isset($_GET["error"])){
    
    if($_GET["error"] == "stmtfailed"){
         echo '<script type="text/javascript">
              alert("stmtfailed");
              window.location="sign_in.php";
          </script>';
    }

    if($_GET["error"] == "wronglogin"){
        echo '<script type="text/javascript">
             alert("wrong login");
             window.location="sign_in.php";
         </script>';
   }
   if($_GET["error"] == "emptyinput"){
    echo '<script type="text/javascript">
         alert("Please fill all fields");
         window.location="sign_in.php";
     </script>';
}
if($_GET["error"] == "invaliduid"){
    echo '<script type="text/javascript">
         alert("Invalid Username");
         window.location="sign_in.php";
     </script>';
}
if($_GET["error"] == "invalidEmail"){
    echo '<script type="text/javascript">
         alert("Invalid Email");
         window.location="sign_in.php";
     </script>';
}
if($_GET["error"] == "passworddoesntmatch"){
    echo '<script type="text/javascript">
         alert("Password is not match");
         window.location="sign_in.php";
     </script>';
}
if($_GET["error"] == "usernameisalreadyexist"){
    echo '<script type="text/javascript">
         alert("Username is already exist");
         window.location="sign_in.php";
     </script>';
}
if($_GET["error"] == "none"){
    echo '<script type="text/javascript">
         alert("Successfully Registered");
         window.location="sign_in.php";
     </script>';
}

}
    ?>


    <div class="container">
        <div class="signin-signup">
            <form action="includes/login.inc.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="uid" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <input type="submit"  name= "submit" value="Login" class="btn">
                <p class="social-text">Or Sign in with google</p>
                <div class="social-media">


                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>

                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="includes/sign_in.inc.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                
                    
                        
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name"
                                    placeholder="First name">
                            </div>
                       
                        
                            
                                           
                
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="uid" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="pno" placeholder="Phone Number" required>
                </div>

                <div class="row g-3">
                    <div class="col">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="pwd" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="pwdrepeat" placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div>
                <input type="submit" name= "submit" value="Sign up" class="btn">
                <p class="social-text">Or Sign in with Google</p>
                <div class="social-media">

                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>

                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Already Sign up</h3>
                    <p>Log into your account</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Don't have any account?</h3>
                    <p>Welcome to bus tickets booking system</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>
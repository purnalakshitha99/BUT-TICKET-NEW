<!DOCTYPE html>
<html lang="en"ndir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="createacc.css">
</head>
<body>
    <div class="container">
      <div class="title">Sign Up Your Account </div>  
      <form action="#">
        <div class="user-details">
            <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" placeholder="Enter Your First Name" required>
            </div>
            
            <div class="input-box">
                <span class="details">Mobile</span>
                <input type="text" placeholder=" Your Phone Number" required>
            </div>
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter Name username" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter Your Email" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="text" placeholder="Enter Your Password" required>
            </div>
            <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="text" placeholder="Confirm Password" required>
            </div>
            
        </div>
        <div class="gender-details">
            
            <span class="gender-title">Gender</span>
            <div class="category">
                <input type="radio" id="male" name="gender">
                <label for="male">Male</label>
                    
                <input type="radio" id="male" name="gender">
                <label for="male">Female</label>
                
                <input type="radio" id="male"name="gender">
                <label for="male">Prefer not to say</label>
                
                
            </div>
        </div>
        <div class="policies">
            <input type="checkbox" id="checkbox1" name="checkbox1">
            <label for="checkbox1" id="checkbox1">Accepting all <span>ticket Policies,Terms and Conditions,Privacy Policy</span></label>
        </div>
        <div class="button">
            <input type="submit" value="Sign Up">
        </div>
        <div class="signin">
            <p class="freeze">Already have an account? <input type="submit" value=" Sign In "></p>
               
        </div>     
            
        
        
        
      </form>
    </div>
    
</body>
</html>



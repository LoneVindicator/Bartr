<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-page.css">

    <title>Log In</title>
    
</head>
<body>

    <div class="login-page">

        <div class="photo-box">

            <img src="images/login-photo.jpg" class="login-photo" alt=""/>

        </div>

        <div class="login-box">


            <div class="form-box">

                <h1 id="title">Log In</h1>
    
                <div class="socialMedia-icons">

                    <span class="dot"><img src="images/twitter-logo.png" class="brand-icon" alt=""></span>
                    <span class="dot"><img src="images/google-logo.png" class="brand-icon" alt=""></span>
                    <span class="dot"><img src="images/apple-logo.png" class="brand-icon" alt=""></span>
                    <span class="dot"><img src="images/facebook-logo.png" class="brand-icon" alt=""></span>
                </div>
    
                <form id="login-form" action="http://localhost/bartr/Bartr/my-app/src/login.php" method="post">
    
                    <input type="text" class="login-form" id="username" name="username" placeholder="Email or Username" autocomplete="off" required><br>
                    <input type="password" class="login-form" id="password" name="password" placeholder="Password" value="" autocomplete="off" required><br>

                    <button type="submit" class="login-btn">Log In</button>
                </form>
    
                

                <div class="registrationText">

                    <p class="firstText">New to Barter?</p>
                    <p class="secondText">Register Here</p>

                    
                </div>
    
    
    
    
            </div>




        </div>




    </div>


  
    <script src="login-page.js"></script>
</body>


</html>
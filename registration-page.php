<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration-page.css">
    <title>Register</title>


</head>


<body>


    <div class="login-page">

        <div class="photo-box">

            <img src="images/login-photo.jpg" class="login-photo" alt="" />

        </div>

        <div class="login-box">


            <div class="form-box">

                <h1 id="title">Create an Account</h1>

                <form id="registrationForm" action="http://localhost/bartr/Bartr/my-app/src/connect.php" method="post">

                    <input type="text" class="login-form" id="username" name="username" placeholder="Username" value="" required><br>
                    <input type="email" class="login-form" id="email" name="email" placeholder="Email" value="" required><br>
                    <input type="password" class="login-form" id="password" name="password" placeholder="Password" value="" required><br>
                    <input type="password" class="login-form" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" value="" required><br>
                    <button type="submit" class="createAccount-btn">Create Account</button>
                </form>






            </div>




        </div>




    </div>

    <script src="registration-page.js"></script>


</body>

</html>
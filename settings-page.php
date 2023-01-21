<?php

include "check.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings-page.css">
    <title>Settings</title>
</head>
<body>

    <nav class="navbar-box">

        <img src="images/bartr-logo.png" alt="" class="bartr-logo">

        <div class="search-bar">

            <input type="text" class="search-box" id="username" name="username" value=""><br>
            
            <div class="search-icon-container"><img src="images/search-icon.png" class="search-icon" alt=""></div>

        </div>

        <div class="navbar-icons"> 

            <div class="signin-icon-container">
            <img src="<?php echo $navProfilePicture; ?>" class="signin-icon" alt="Not Found" onerror=this.src="images/profile-icon.png">
                <p>Sign In</p>
            </div>

            <div class="notification-icon-container">
                <img src="images/notification-icon.png" class="notification-icon" alt="">
                <p>Notifications</p>
            </div>


        </div>
    
    </nav>

    <main>

        <div class="left-margin-box"></div>
        
        <div class="main-content">


            <h1 class="page-title">Settings</h1>

          

            <div class="main-content-content">

            <form  action="http://localhost/bartr/Bartr/my-app/src/setSettings.php" method="post" enctype="multipart/form-data">


                <div class="settings-container">   

                    <div class="photo-settings-container">

                        <img id="mainPhoto" class="settings-profile-photo" src="images/pierce-img.jpg" alt="">

                        <div class="photo-text-container">

                            <p class="image-requirement-text">
                                Upload an image that is 10 MB
                                 and atleast 400px by 400px 
                            </p>

                            <p class="image-advice-text">

                                It is highly encouraged that you
                                 use an image of yourself. A great
                                  profile picture fosters user trust
                                   and will lead more successful barters
                            </p>

                            <div class="photo-btn-container">

                                <input id="item-main-photo-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="profilePicture" required/>

                                <button class="upload-photo-btn" type="button" onclick="document.getElementById('item-main-photo-input').click();">Upload Photo</button>
                                <button id="delete-photo-btn" type="button" class="delete-photo-btn">Delete Photo</button>
                            </div>


                        </div>


                    </div>


                    <div class="personal-details-settings-container">


                        <div><p class="personal-details-title">Personal Details</p></div>

                        <div class="form-container">

                            <div  class="form">

                            

                                <div class="form-lable-and-input">

                                    <label for="fname">First name</label>
                                    <input class="form-input" type="text" id="fname" name="fname" required><br><br>
                                </div>
                                
                                <div class="form-lable-and-input">

                                    <label for="mname">Middle Name</label>
                                    <input class="form-input" type="text" id="mname" name="mname"><br><br>
                                </div>

                                <div class="form-lable-and-input">

                                    <label for="lname">Last Name</label>
                                    <input class="form-input" type="text" id="lname" name="lname" required><br><br>
                                </div>


                            </div>

                              <div  class="form">

                                <div class="form-lable-and-input">

                                    <label for="date">Date of Birth</label>
                                    <input class="form-input" type="date" id="dob" name="dob"><br><br>
                                </div>
                                
                                <div class="form-lable-and-input">

                                    <label for="gender">Gender</label>

                                    <select id="gender "class="form-input" name="gender" required>

                                        <option value="" selected disabled hidden></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>

                                    </select>

                                    
                                </div>

</div>

                              <div class="form">

                                <div class="form-lable-and-input">

                                    <label for="phoneNumber">Phone Number</label>
                                    <input class="form-input" type="text" id="phoneNumber" name="phoneNumber"><br><br>
                                </div>
                                
                                <div class="form-lable-and-input">

                                    <label for="altPhoneNumber">Alternate Phone Number</label>
                                    <input class="form-input" type="text" id="nname" name="altPhoneNumber"><br><br>
                                </div>

                                <div class="form-lable-and-input">

                                    <label for="email">Email</label>
                                    <input class="form-input" type="email" id="email" name="email"><br><br>
                                </div>

</div>


                              <div  class="form">

                                <div class="form-lable-and-input">

                                    <label for="country">Country</label>
                                    
                                    <select class="form-input-short" id="country" name="country">

                                        <option>select country</option>
                                    </select>
                                </div>
                                
                                <div class="form-lable-and-input">

                                    <label for="city">City</label>

                                    <select class="form-input-short" id="city" name="city"><br><br>
                                            <option>select city</option>

                                    </select>
                                </div>

                                <div class="form-lable-and-input">

                                    <label for="street">Street</label>
                                    <input class="form-input-short" type="text" id="street" name="street"><br><br>
                                </div>

                                <div class="form-lable-and-input">

                                    <label for="poBox">PO Box</label>
                                    <input class="form-input-short" type="text" id="poBox" name="poBox"><br><br>
                                </div>


</div>


                        </div>
                    </div>

                    <div class="security-settings-container">

                        <div><p class="security-title">Security</p></div>


                        <div class="security-form-container">

                            <div  class="form" >

                                <div class="form-lable-and-input">

                                    <label for="password">Old Password</label>
                                    <input class="form-input" type="password" id="password" name="oldPassword"><br><br>
                                </div>

</div>

                            <div  class="form">

                                <div class="form-lable-and-input">

                                    <label for="password">New Password</label>
                                    <input class="form-input" type="password" id="password" name="newPassword"><br><br>
                                </div>
                                
                            </div>

                              <div  class="form">

                                <div class="form-lable-and-input">

                                    <label for="password">Confirm New Password</label>
                                    <input class="form-input" type="password" id="password" name="confirmPassword"><br><br>
                                </div>
                                
                            </div>

                        </div>



                    </div>

                </div>

                <div class="settings-btn-container">

                    <button type="submit" class="save-changes-btn">Save Changes</button>
                    <button class="view-profile-btn">View Profile</button>
                </div>




            
            
                




          
              

            </div>

            </form>

            

        </div>

        

        <div class="right-margin-box"></div>

            




    </main>

    <footer>

        <div class="footer-top">

            <div class="sitemap-container">

                <div class="sitemap-trade">

                    <h1 class="sitemap-title">Trade</h1>
                    
                    <div class="sitemap-text">

                        <p>My Items</p>
                        <p>My Offers</p>
                        <p>Pending Trades</p>

                    </div>


                </div>

                <div class="sitemap-categories">

                    <h1 class="sitemap-title">Categories</h1>
                    
                    <div class="sitemap-text">

                        <p>Furniture</p>
                        <p>Electronics</p>
                        <p>Appliances</p>
                        <p>Books</p>
                        <p>Toys</p>
                        <p>Clothing</p>
                        <p>Jewelry & Watches</p>
                        <p>Miscellaneous</p>
                        
                    </div>


                </div>

                <div class="sitemap-about">

                    <h1 class="sitemap-title">About Bartr</h1>
                    
                    <div class="sitemap-text">

                        <p>Company Info</p>
                        <p>News</p>
                        <p>Policies</p>
                        <p>Careers</p>
                        
                    </div>


                </div>

                <div class="sitemap-help">

                    <h1 class="sitemap-title">Help & Contact</h1>
                    
                    <div class="sitemap-text">

                        <p>Contact Us</p>
                        <p>FAQ</p>
                        <p>Help</p>
                        
                    </div>


                </div>

                <div class="sitemap-community">

                    <h1 class="sitemap-title">Help & Contact</h1>
                    
                    <div class="sitemap-text">

                        <p>Blog</p>
                        <p><img src="images/facebook-white-icon.png" alt=""> Facebook</p>
                        <p><img src="images/twitter-white-icon.png" alt=""> Twitter</p>
                        
                    </div>


                </div>



            </div>


        </div>
        <div class="footer-bottom">

            <h1>© 1996-2022, Bartr.com, Inc. or its affiliates</h1>
            
        </div>


    </footer>

    <script type="module" src="settings-page.js"></script>
    
</body>
</html>
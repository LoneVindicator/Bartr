<?php

include "check.php";

//Notes

/*

validate data on both sides

*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload-page.css">
    <title>Upload Item</title>
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


            <h1 class="page-title">Upload Item</h1>

          

            <div class="main-content-content">

                <form  class="form" action="http://localhost/bartr/Bartr/my-app/src/upload-item.php" method="post" enctype="multipart/form-data">


                <div class="settings-container">   

                    <div class="photo-settings-container">

                        <div class="image-container">

                            

                            <!-- <img  id="item-main-photo" class="item-main-photo" src="images/upload-icon.png" alt=""> -->
                            <img  id="item-main-photo" class="extra-img" onclick="changeImgtoMain(event)" src="images/upload-icon.png" alt="">

                            <div class="item-extra-images">

                                <img id="extra-img-one"   class="extra-img" onclick="changeImgtoMain(event)" src="images/upload-icon.png" alt="">
                                <img id="extra-img-two"   class="extra-img" onclick="changeImgtoMain(event)" src="images/upload-icon.png" alt="">
                                <img id="extra-img-three" class="extra-img" onclick="changeImgtoMain(event)" src="images/upload-icon.png" alt="">
                                <img id="extra-img-four"  class="extra-img" onclick="changeImgtoMain(event)" src="images/upload-icon.png" alt="">

                                <input id="item-main-photo-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="mainPhoto" required/>
                                <input id="extra-img-one-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="extraImages[]"/>
                                <input id="extra-img-two-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="extraImages[]"/>
                                <input id="extra-img-three-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="extraImages[]"/>
                                <input id="extra-img-four-input" class="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg" name="extraImages[]"/>
    
    
                            </div>

                            <div class="photo-btn-container">

                                <!-- <input id="image-input" type="file" style="display:none;" accept="image/jpeg, image/png, image/jpg"/> -->
                                <button id="upload-photo-btn" class="upload-photo-btn" type="button" onclick="document.getElementById(`${selectedImg}-input`).click();">Upload Photo</button>
                                <button id="delete-photo-btn" class="delete-photo-btn" type="button">Delete Photo</button>
                                
                            </div>

                        </div>

                        <div class="photo-text-container">

                            <p class="image-requirement-text">
                                Upload an image that is less than 10 MB
                                 and atleast 400px by 400px 
                            </p>

                            <p class="image-advice-text">

                                It is highly encouraged that you upload 
                                atleast 3 photos displaying your product 
                                from different angles, it’s associated 
                                packaging and peripheral accessories.<br><br> 

                                The more images you have the clearer an idea the buyer has of its quality 
                            </p>



                        </div>


                    </div>


                    <div class="personal-details-settings-container">


                        <div><p class="personal-details-title">Item Details</p></div>

                        <div class="form-container">

                            <div  class="form">

                                <div class="form-lable-and-input">

                                    <label for="fname">Product</label>
                                    <input class="form-input" type="text" id="fname" name="productName" placeholder="Example: iPad, Macbook, Armchair, etc" required><br><br>
                                </div>
                                
                                <div class="form-lable-and-input">

                                    <label for="mname">Brand Name</label>
                                    <input class="form-input" type="text" id="nname" name="brandName" placeholder="Example: Sony, Microsoft, LeCroix, etc"><br><br>
                                </div>

                                <div class="form-lable-and-input">

                                    <label for="lname">Model Name</label>
                                    <input class="form-input" type="text" id="lname" name="modelName" placeholder="Example: Sony WH-1000xm4, Huawei ALP-L29"><br><br>
                                </div>


                            </div>

                             
                                <div class="form-lable-and-input">

                                    <label for="date">Official Product Name</label>
                                    <input class="form-input" type="text" id="date" name="officialProductName" placeholder="Example: iPad Gen 4 12'9 inch 2018"><br><br>

                                </div>

                            

                              <div class="checkbox-container">

                                <p class="checkbox-title">Category</p>

                                <div class="category-checkbox">

                                    
                                        <div  class="category-checkbox-form">

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle1" name="category" value="electronics" required>
                                                <label for="vehicle1">Electronics</label><br>


                                            </div>

                                            
                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle2" name="category" value="majorAppliances">
                                                <label for="vehicle2">Major Appliances</label><br>

                                                
                                            </div>

                                            
                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="furniture">
                                                <label for="vehicle3">Furniture</label><br><br>

                                                
                                            </div>

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="toys">
                                                <label for="vehicle3">Toys</label><br><br>

                                                
                                            </div>

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="books">
                                                <label for="vehicle3">Books</label><br><br>

                                                
                                            </div>

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="clothing">
                                                <label for="vehicle3">Clothing</label><br><br>

                                                
                                            </div>

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="jewelryAndWatches">
                                                <label for="vehicle3">Jewelry &  Watches</label><br><br>

                                                
                                            </div>

                                            <div class="checkbox-input">

                                                <input type="radio" id="vehicle3" name="category" value="miscellaneous">
                                                <label for="vehicle3">Miscellaneous</label><br><br>

                                                
                                            </div>






                                    
                                            
                                            
                                           
                                    
                                        </div>


                                </div>


                              </div>


                              <div class="product-description-container">

                                <div class="product-description-text-area-container">

                                    <label for="w3review">Product Description</label>

                                    <textarea class="product-description-text-area" name="description" placeholder="Include atleast a 20 word description of the item (maxium is 600 characters), its functionality, and any/all defects it may possess"></textarea> 
                                </div>

                                
                              </div>


                        </div>
                    </div>


                    <div class="settings-btn-container">

                        <button type="submit" class="save-changes-btn">Upload Item</button>
                        
                    </div>

            

                </div>

        




            
            
                




          
             </form>

            </div>

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

    <script src="upload-page.js"></script>
    
</body>
</html>
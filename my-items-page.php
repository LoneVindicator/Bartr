<?php

include "check.php";
include "myItems.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my-items-page.css">
    <title>Item</title>
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

            <form id="selectItem" action="http://localhost/bartr/Bartr/my-app/src/item-page.php" method="get">

                <div class="hero"><img src="images/hero-img.png" class="hero-img" alt=""></div>

                <div class="main-content-content">


                    <h1 class="page-title">My Items</h1>

                    <div class="items-grid">

                        <div class="items-row">

                            <div class="item-card">


                                <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo $productId[0] ?>">
                                <img src="<?php echo $productImg[0] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[0] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-two" type="submit" style="display:none;" name="productId" value="<?php echo $productId[1] ?>">
                                <img src="<?php echo $productImg[1] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-two').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[1] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-three" type="submit" style="display:none;" name="productId" value="<?php echo $productId[2] ?>">
                                <img src="<?php echo $productImg[2] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-three').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[2] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-four" type="submit" style="display:none;" name="productId" value="<?php echo $productId[3] ?>">
                                <img src="<?php echo $productImg[3] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-four').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[3] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>


                        </div>
                        <div class="items-row">

                            <div class="item-card">

                                <input id="item-card-five" type="submit" style="display:none;" name="productId" value="<?php echo $productId[4] ?>">
                                <img src="<?php echo $productImg[4] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-five').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[4] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-six" type="submit" style="display:none;" name="productId" value="<?php echo $productId[5] ?>">
                                <img src="<?php echo $productImg[5] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-six').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[5] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-seven" type="submit" style="display:none;" name="productId" value="<?php echo $productId[6] ?>">
                                <img src="<?php echo $productImg[6] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-seven').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[6] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-eight" type="submit" style="display:none;" name="productId" value="<?php echo $productId[7] ?>">
                                <img src="<?php echo $productImg[7] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-eight').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[7] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>


                        </div>
                        <div class="items-row">

                            <div class="item-card">

                                <input id="item-card-nine" type="submit" style="display:none;" name="productId" value="<?php echo $productId[8] ?>">
                                <img src="<?php echo $productImg[8] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-nine').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[8] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-ten" type="submit" style="display:none;" name="productId" value="<?php echo $productId[9] ?>">
                                <img src="<?php echo $productImg[9] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-ten').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[9] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-eleven" type="submit" style="display:none;" name="productId" value="<?php echo $productId[10] ?>">
                                <img src="<?php echo $productImg[10] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-eleven').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[10] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-twelve" type="submit" style="display:none;" name="productId" value="<?php echo $productId[11] ?>">
                                <img src="<?php echo $productImg[11] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-twelve').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[11] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>
                        </div>
                        <div class="items-row">

                            <div class="item-card">

                                <input id="item-card-thirteen" type="submit" style="display:none;" name="productId" value="<?php echo $productId[12] ?>">
                                <img src="<?php echo $productImg[12] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-thirteen').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[12] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-fourteen" type="submit" style="display:none;" name="productId" value="<?php echo $productId[13] ?>">
                                <img src="<?php echo $productImg[13] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-fourteen').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[13] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-fifteen" type="submit" style="display:none;" name="productId" value="<?php echo $productId[14] ?>">
                                <img src="<?php echo $productImg[14] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-fifteen').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[14] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>

                            <div class="item-card">

                                <input id="item-card-sixteen" type="submit" style="display:none;" name="productId" value="<?php echo $productId[15] ?>">
                                <img src="<?php echo $productImg[15] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-sixteen').click();" onerror="hideUnusedItemCards(event)">

                                <div class="item-card-text">

                                    <h1 class="item-card-title"><?php echo $productName[15] ?></h1>

                                    <div class="seller-rating">

                                        <p class="seller-rating-text">Seller Rating</p>

                                        <div class="seller-rating-stars">

                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">
                                            <img src="images/star-icon.png" class="star-icon" alt="">

                                        </div>


                                    </div>

                                    <p class="seller-distance">500m away</p>

                                </div>



                            </div>
                        </div>


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

    <script src="my-items-page.js"></script>

</body>

</html>
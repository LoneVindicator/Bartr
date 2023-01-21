<?php

include "check.php";
include "populateHome.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home-page.css">
    <link rel="stylesheet" href="flickity.css">
    <title>Home</title>
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
                <p id="signin-label">Sign In</p>
            </div>

            <div class="notification-icon-container">
                <img src="images/notification-icon.png" class="notification-icon" alt="">
                <p id="notification-label">Notifications</p>
            </div>


        </div>

    </nav>

    <main>

        <div class="left-margin-box"></div>

        <div class="main-content">



            <div class="hero"><img src="images/hero-img.png" class="hero-img" alt=""></div>

            <div class="main-content-content">

                <!-- Category Title & See All -->

                <div class="category-card">

                    <form id="selectCategory" action="http://localhost/bartr/Bartr/my-app/src/category-page.php" method="get">

                        <div class="card-header">

                            <h1 class="card-header-title">Top Categories</h1>
                            <p class="card-header-seeAll">| See all →</p>


                        </div>

                        <!-- Category Icons & Text -->

                        <div class="card-content">


                            <div class="category-icon" onclick="document.getElementById('category-furniture').click();">

                                <input id="category-furniture" type="submit" style="display:none;" name="category" value="furniture">
                                <img src="images/furniture-icon.png" class="furniture-img" alt="">
                                <p class="card-content-title">Furniture</p>

                            </div>


                            <div class="category-icon" onclick="document.getElementById('category-electronics').click();">

                                <input id="category-electronics" type="submit" style="display:none;" name="category" value="electronics">
                                <img src="images/electronics-icon.png" class="electronics-img" alt="">
                                <p class="card-content-title">Electronics</p>

                            </div>
                            <div class="category-icon" onclick="document.getElementById('category-books').click();">

                                <input id="category-books" type="submit" style="display:none;" name="category" value="books">
                                <img src="images/books-icon.png" class="books-img" alt="">
                                <p class="card-content-title">Books</p>

                            </div>

                            <div class="category-icon" onclick="document.getElementById('category-toys').click();">

                                <input id="category-toys" type="submit" style="display:none;" name="category" value="toys">
                                <img src="images/toys-icon.png" class="toys-img" alt="">
                                <p class="card-content-title">Toys</p>

                            </div>

                            <div class="category-icon" onclick="document.getElementById('category-majorAppliances').click();">

                                <input id="category-majorAppliances" type="submit" style="display:none;" name="category" value="majorAppliances">
                                <img src="images/appliances-icon.png" class="appliances-img" alt="">
                                <p class="card-content-title">Appliances</p>

                            </div>
                            <div class="category-icon" onclick="document.getElementById('category-clothing').click();">

                                <input id="category-clothing" type="submit" style="display:none;" name="category" value="clothing">
                                <img src="images/clothing-icon.png" class="clothing-img" alt="">
                                <p class="card-content-title">Clothing</p>

                            </div>
                        </div>

                        <!-- Donate Icon & Menu Icons -->


                        <div class="submenu-container">

                            <div class="donate-icon"><img src="images/donate-icon.png" class="donate-img" alt=""></div>
                            <div class="sendy-icon"><img src="images/sendy-icon.png" class="sendy-img" alt=""></div>

                            <div class="menu-items">

                                <div class="first-row">

                                    <div class="add-items">

                                        <span class="dot"><img src="images/add-item-icon.png" class="menu-icon-img" alt=""></span>
                                        <p class="menu-items-text">Add Items</p>

                                    </div>

                                    <div class="view-items">

                                        <span class="dot"><img src="images/view-items-icon.png" class="menu-icon-img" alt=""></span>
                                        <p class="menu-items-text">View Items</p>
                                    </div>

                                </div>

                                <div class="second-row">

                                    <div class="view-offers">

                                        <span class="dot"><img src="images/view-offers-icon.png" class="menu-icon-img" alt=""></span>
                                        <p class="menu-items-text">View Offers</p>

                                    </div>

                                    <div class="view-favorites">

                                        <span class="dot"><img src="images/view-favourite-icon.png" class="menu-icon-img" alt=""></span>
                                        <p class="menu-items-text">View Favourites</p>

                                    </div>

                                </div>




                            </div>




                        </div>

                    </form>





                </div>

                <form id="selectItem" action="http://localhost/bartr/Bartr/my-app/src/item-page.php" method="get">


                    <div class="barter-card-header">

                        <h1 class="barter-card-header-title">Barters Near You</h1>
                        <p class="barter-card-header-seeAll">| See all →</p>


                    </div>

                    <div class="distance-toggles">

                        <div class="distance-toggles-500m" onclick="loadNewRow()">
                            <p class="distance-toggles-text">500 m</p>
                        </div>
                        <div class="distance-toggles-1km">
                            <p class="distance-toggles-text">1 Km</p>
                        </div>
                        <div class="distance-toggles-5km">
                            <p class="distance-toggles-text">5 Km</p>
                        </div>
                        <div class="distance-toggles-10km">
                            <p class="distance-toggles-text">10 Km</p>
                        </div>
                        <div class="distance-toggles-50km">
                            <p class="distance-toggles-text">50 Km</p>
                        </div>


                    </div>


                    <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>

                        <div class="item-card">


                            <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo $productId[0] ?>">
                            <img src="<?php echo $productImg[0] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();">

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
                            <img src="<?php echo $productImg[1] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-two').click();">

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
                            <img src="<?php echo $productImg[2] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-three').click();">

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
                            <img src="<?php echo $productImg[3] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-four').click();">

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

                        <div class="item-card">

                            <input id="item-card-five" type="submit" style="display:none;" name="productId" value="<?php echo $productId[4] ?>">
                            <img src="<?php echo $productImg[4] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-five').click();">

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
                            <img src="<?php echo $productImg[5] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-six').click();">

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
                            <img src="<?php echo $productImg[6] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-seven').click();">

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

                            <input id="item-card-eight" type="submit" style="display:none;" name="productId" value="<?php echo $productId[7] ?><?php echo $productId[7] ?>">
                            <img src="<?php echo $productImg[7] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-eight').click();">

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

                        <div class="item-card">

                            <input id="item-card-nine" type="submit" style="display:none;" name="productId" value="<?php echo $productId[8] ?>">
                            <img src="<?php echo $productImg[8] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-nine').click();">

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
                            <img src="<?php echo $productImg[9] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-ten').click();">

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
                            <img src="<?php echo $productImg[10] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-eleven').click();">

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
                            <img src="<?php echo $productImg[11] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-twelve').click();">

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


                    <div class="reccomended-card-header">

                        <h1 class="reccomended-card-header-title">Latest Items</h1>
                        <p class="reccomended-card-header-seeAll">| See all →</p>


                    </div>

                    <div class="reccomended-item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                        <div class="item-card">


                            <input id="reccomended-item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[0] ?>">
                            <img src="<?php echo $recentProductImg[0] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-one').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[0] ?></h1>

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

                            <input id="reccomended-item-card-two" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[1] ?>">
                            <img src="<?php echo $recentProductImg[1] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-two').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[1] ?></h1>

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

                            <input id="reccomended-item-card-three" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[2] ?>">
                            <img src="<?php echo $recentProductImg[2] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-three').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[2] ?></h1>

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

                            <input id="reccomended-item-card-four" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[3] ?>">
                            <img src="<?php echo $recentProductImg[3] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-four').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[3] ?></h1>

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

                            <input id="reccomended-item-card-five" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[4] ?>">
                            <img src="<?php echo $recentProductImg[4] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-five').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[4] ?></h1>

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

                            <input id="reccomended-item-card-six" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[5] ?>">
                            <img src="<?php echo $recentProductImg[5] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-six').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[5] ?></h1>

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

                            <input id="reccomended-item-card-seven" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[6] ?>">
                            <img src="<?php echo $recentProductImg[6] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-seven').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[6] ?></h1>

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

                            <input id="reccomended-item-card-eight" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[7] ?><?php echo $recentProductId[7] ?>">
                            <img src="<?php echo $recentProductImg[7] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-eight').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[7] ?></h1>

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

                            <input id="reccomended-item-card-nine" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[8] ?>">
                            <img src="<?php echo $recentProductImg[8] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-nine').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[8] ?></h1>

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

                            <input id="reccomended-item-card-ten" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[9] ?>">
                            <img src="<?php echo $recentProductImg[9] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-ten').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[9] ?></h1>

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

                            <input id="reccomended-item-card-eleven" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[10] ?>">
                            <img src="<?php echo $recentProductImg[10] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-eleven').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[10] ?></h1>

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

                            <input id="reccomended-item-card-twelve" type="submit" style="display:none;" name="productId" value="<?php echo $recentProductId[11] ?>">
                            <img src="<?php echo $recentProductImg[11] ?>" class="item-card-img" alt="" onclick="document.getElementById('reccomended-item-card-twelve').click();">

                            <div class="item-card-text">

                                <h1 class="item-card-title"><?php echo $recentProductName[11] ?></h1>

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

    <script src="flickity.pkgd.min.js"></script>
    <script src="home-page.js"></script>

</body>

</html>
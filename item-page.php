<?php

include "check.php";
include "retrieveItem.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="item-page.css">
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



            <div class="main-content-content">



                <div class="category-link-container">

                    <p class="category-link-grey-text"><?php echo ucwords($category) ?> / </p>
                    <!-- <p class="category-link-black-text">Gaming</p> -->
                </div>


                <div class="item-container">

                    <div class="item-images">

                        <div class="main-item-image">

                            <img class="main-image" src="<?php echo $mainImg ?>" alt="">
                        </div>

                        <div class="item-extra-images">

                            <img class="extra-img" id="extra-img-one" onclick="changeImgtoMain(event)" src="<?php echo $imageArray[0][0] ?>" alt="" onerror="hideExtraImg(event)">
                            <img class="extra-img" id="extra-img-two" onclick="changeImgtoMain(event)" src="<?php echo $imageArray[0][1] ?>" alt="" onerror="hideExtraImg(event)">
                            <img class="extra-img" id="extra-img-three" onclick="changeImgtoMain(event)" src="<?php echo $imageArray[0][2] ?>" alt="" onerror="hideExtraImg(event)">
                            <img class="extra-img" id="extra-img-four" onclick="changeImgtoMain(event)" src="<?php echo $imageArray[0][3] ?>" alt="" onerror="hideExtraImg(event)">


                        </div>
                    </div>

                    <div class="item-desc-container">

                        <div class="item-title"><?php echo $productName ?></div>

                        <div class="item-text">

                            <p class="item-desc"> <?php echo $description ?> </p>

                        </div>

                        <div class="item-price-container">

                            <p class="price-title">Market Price: </p>
                            <p class="price-amount">$179 ~ 50</p>


                        </div>



                        <div class="item-buttons-container">

                            <button class="make-offer-btn">Make Offer</button>
                            <button id="contact-btn" class="chat-btn">Contact</button>
                            <button id="reveal-contact-btn" class="chat-btn" style="display: none"><?php echo $phoneNumber; ?></button>
                        </div>
                    </div>

                    <iframe id="select-item-iframe" src="http://localhost/bartr/Bartr/my-app/src/select-item-page.php" style="display: none;"></iframe>



                    <div class="seller-desc-container">



                        <form id="selectCategory" action="http://localhost/bartr/Bartr/my-app/src/sellers-items-page.php" method="get">

                            <div class="seller-img-container">

                                <input id="seller-input" type="submit" name="sellerUserId" value="<?php echo $sellerUserId ?>" style="display: none"></input>
                                <img class="seller-img" src="<?php echo $profilePicture ?>" alt="" onclick="document.getElementById('seller-input').click();">


                                <div class="seller-name">
                                    <h1><?php echo "{$firstName} {$lastName}" ?></h1>
                                </div>


                            </div>

                        </form>



                        <div class="seller-info">

                            <div class="barter-info">

                                <p class="barters-info-label">Barters Made: </p>
                                <p class="barter-info-content">149</p>

                            </div>

                            <div class="barter-info">

                                <p class="barters-info-label">Registered On: </p>
                                <p class="barter-info-content">08-Nov-2022</p>

                            </div>

                            <div class="barter-info">

                                <p class="barters-info-label-seller">Seller Review (271): </p>

                                <div class="seller-rating-stars">

                                    <img src="images/star-icon.png" class="star-icon" alt="">
                                    <img src="images/star-icon.png" class="star-icon" alt="">
                                    <img src="images/star-icon.png" class="star-icon" alt="">
                                    <img src="images/star-icon.png" class="star-icon" alt="">
                                    <img src="images/star-icon.png" class="star-icon" alt="">

                                </div>

                            </div>


                        </div>

                        <div class="barter-info-location">

                            <p class="barter-info-label">Location: </p>
                            <p class="barter-info-content"><?php echo $location ?></p>

                        </div>


                    </div>

                </div>

                <div class="reviews-container">

                    <div class="seller-card">

                        <h1 class="reviews-title">Reviews and Ratings</h1>

                        <h1 class="review-score">4 out of 5</h1>


                        <div class="review-stars">

                            <div class="seller-rating-stars">

                                <img src="images/star-icon.png" class="rating-star-icon" alt="">
                                <img src="images/star-icon.png" class="rating-star-icon" alt="">
                                <img src="images/star-icon.png" class="rating-star-icon" alt="">
                                <img src="images/star-icon.png" class="rating-star-icon" alt="">
                                <img src="images/star-icon.png" class="rating-star-icon" alt="">

                            </div>

                            <p class="review-count">(271): Reviews</p>

                        </div>

                        <div class="rating-grid">

                            <div class="bar-container">

                                <p class="rating-grid-text-black">5 stars</p>

                                <div class="rating-bar">

                                    <div class="five-star-green-bar"></div>
                                    <div class="five-star-grey-bar"></div>

                                </div>

                                <p class="rating-grid-text-grey">180</p>

                            </div>

                            <div class="bar-container">

                                <p class="rating-grid-text-black">4 stars</p>

                                <div class="rating-bar">

                                    <div class="four-star-green-bar"></div>
                                    <div class="four-star-grey-bar"></div>

                                </div>

                                <p class="rating-grid-text-grey">150</p>

                            </div>

                            <div class="bar-container">

                                <p class="rating-grid-text-black">3 stars</p>

                                <div class="rating-bar">

                                    <div class="three-star-green-bar"></div>
                                    <div class="three-star-grey-bar"></div>

                                </div>

                                <p class="rating-grid-text-grey">35</p>

                            </div>

                            <div class="bar-container">

                                <p class="rating-grid-text-black">2 stars</p>

                                <div class="rating-bar">

                                    <div class="two-star-green-bar"></div>
                                    <div class="two-star-grey-bar"></div>

                                </div>

                                <p class="rating-grid-text-grey">4</p>

                            </div>

                            <div class="bar-container">

                                <p class="rating-grid-text-black">1 stars</p>

                                <div class="rating-bar">

                                    <div class="one-star-green-bar"></div>
                                    <div class="one-star-grey-bar"></div>

                                </div>

                                <p class="rating-grid-text-grey">2</p>

                            </div>


                        </div>

                        <div class="review-buttons">

                            <button class=seeAll-btn>See all reviews</button>
                            <button class="writeReview-btn">Write Review</button>

                        </div>






                    </div>

                    <div class="user-reviews">

                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[0] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[0]} {$reviewerLname[0]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[0]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[0]; ?></p>
                            </div>

                        </div>

                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[1] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[1]} {$reviewerLname[1]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[1]; ?> </p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[1]; ?></p>
                            </div>

                        </div>

                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[2] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[2]} {$reviewerLname[2]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[2]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[2]; ?></p>
                            </div>

                        </div>

                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[3] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[3]} {$reviewerLname[3]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[3]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[3]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[4] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[4]} {$reviewerLname[4]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[4]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[4]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[5] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[5]} {$reviewerLname[5]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[5]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[5]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[6] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[6]} {$reviewerLname[6]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[6]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[6]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[7] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[7]} {$reviewerLname[7]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[7]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[7]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[8] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[8]} {$reviewerLname[8]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[8]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[8]; ?></p>
                            </div>

                        </div>


                        <div class="user-statement">

                            <div class="user-info">

                                <img class="user-img" src="<?php echo $reviewerImage[9] ?>" alt="" onerror="hideItem(event)">

                                <div class="user-details">

                                    <p class="user-name"><?php echo "{$reviewerFname[9]} {$reviewerLname[9]}"; ?></p>

                                    <div class="user-rating-stars">

                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">
                                        <img src="images/star-icon.png" class="user-rating-star-icon" alt="">

                                        <p class="user-review-title"><?php echo $reviewHeadline[9]; ?></p>

                                    </div>

                                </div>

                            </div>

                            <div class="review-text">

                                <p><?php echo $reviewBody[9]; ?></p>
                            </div>

                        </div>

                        <form id="submitReview" action="http://localhost/bartr/Bartr/my-app/src/submitReview.php" method="post">

                            <div id="write-review-container" style="display: none">

                                <input name="sellerUserId" value="<?php echo $sellerUserId ?>" style="display: none">
                                <input name="productId" value="<?php echo $productId ?>" style="display: none">



                                <label for="rating">Rate No. of stars</label>
                                <select class="rating-input" name="rating" required>

                                    <option value="">select rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>

                                <label for="review-headline">Add a headline</label>
                                <input type="text" id="review-headline" name="reviewHeadline" required>

                                <label for="review-body">Write your review</label>
                                <textarea id="review-body" type="text" name="reviewBody" placeholder="Only a maximum of 200 characters is allowed" required></textarea>

                                <div id="submit-btn-container">

                                    <button id="submit-review-btn" type="submit">Submit</button>

                                </div>




                            </div>

                        </form>



                    </div>
                </div>



                <div class="reccomended-card-header">

                    <h1 class="reccomended-card-header-title">Reccomended For You</h1>
                    <p class="reccomended-card-header-seeAll">| See all →</p>


                </div>

                <div class="reccomended-item-cards-container">

                    <div class="item-card">

                        <img src="images/ilce-img.png" class="item-card-img" alt="">

                        <div class="item-card-text">

                            <h1 class="item-card-title">Sony Alpha II ILCE-7M2</h1>

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

                        <img src="images/fujifilm-img.png" class="item-card-img" alt="">

                        <div class="item-card-text">

                            <h1 class="item-card-title">Fujifilm X100T</h1>

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

                        <img src="images/nikon-img.png" class="item-card-img" alt="">

                        <div class="item-card-text">

                            <h1 class="item-card-title">Nikon D3400 DSLR</h1>

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

                        <img src="images/cybershot-img.png" class="item-card-img" alt="">

                        <div class="item-card-text">

                            <h1 class="item-card-title">Sony Cybershot</h1>

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

    <script src="item-page.js"></script>

</body>

</html>
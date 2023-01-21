<?php

include "check.php";
include "viewOffers.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view-offers-page.css">
    <link rel="stylesheet" href="flickity.css">
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

            <div class="hero"><img src="images/hero-img.png" class="hero-img" alt=""></div>

            <div class="main-content-content">


                <h1 class="page-title">My Offers</h1>

                <div class="items-grid">

                    <div class="offer-card">

                        <div class="seller-desc-container">



                            <div class="seller-img-container">

                                <img class="seller-img" src="<?php echo $sellerImg[0] ?>" alt="" onerror="hideUnusedItemCards(event)">

                                <div class="seller-name">
                                    <h1><?php echo "{$sellerFname[0]} {$sellerLname[0]}" ?></h1>
                                </div>


                            </div>

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
                                <p class="barter-info-content"><?php echo $sellerLocation[0] ?></p>

                            </div>






                        </div>

                        <div class="offer-rhs-content">



                            <div class="header-and-card">

                                <h1 class="header-title">Wants</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $sellerWants[0])[0];  ?>">
                                        <img src="<?php echo getItemDetails($conn, $sellerWants[0])[1];  ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" >

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">"<?php echo getItemDetails($conn, $sellerWants[0])[2];  ?>"</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="header-and-card">

                                <h1 class="header-title">In exchange for</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][0])[0]; ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][0])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][0])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][1])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][1])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][1])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <!-- C+P -->

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][2])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][2])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][2])[2]; ?></h1>


                                        </div>



                                    </div>
                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][3])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][3])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][3])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][4])[0]; ?> " onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][4])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][4])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][5])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][5])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][5])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][6])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][6])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][6])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][7])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][7])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][7])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][8])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][8])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][8])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][9])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][9])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][9])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][10])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][10])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][10])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[0][11])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[0][11])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[0][11])[2]; ?></h1>


                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="offer-button-container">

                                <button class="offer-btn" id="accept-btn">Accept Offer</button>
                                <button class="offer-btn" id="reject-btn">Reject Offer</button>


                            </div>


                        </div>








                    </div>

                    <div class="offer-card">

                        <div class="seller-desc-container">



                            <div class="seller-img-container">

                                <img class="seller-img" src="<?php echo $sellerImg[1] ?>" alt="" onerror="hideUnusedItemCards(event)">

                                <div class="seller-name">
                                    <h1><?php echo "{$sellerFname[1]} {$sellerLname[1]}" ?></h1>
                                </div>


                            </div>

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
                                <p class="barter-info-content"><?php echo $sellerLocation[1] ?></p>

                            </div>






                        </div>

                        <div class="offer-rhs-content">



                            <div class="header-and-card">

                                <h1 class="header-title">Wants</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $sellerWants[1])[0]; ?>">
                                        <img src="<?php echo getItemDetails($conn, $sellerWants[1])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $sellerWants[1])[2]; ?></h1>



                                        </div>



                                    </div>
                                </div>

                            </div>

                            <div class="header-and-card">

                                <h1 class="header-title">In exchange for</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][0])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][0])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][0])[2]; ?></h1>



                                        </div>



                                    </div>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][1])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][1])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][1])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <!-- C+P -->

                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][2])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][2])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][2])[2]; ?></h1>



                                        </div>



                                    </div>
                                    
                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][3])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][3])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][3])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][4])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][4])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][4])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[1][5])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[1][5])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[1][5])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="offer-button-container">

                                <button class="offer-btn" id="accept-btn">Accept Offer</button>
                                <button class="offer-btn" id="reject-btn">Reject Offer</button>


                            </div>


                        </div>








                    </div>

                    <div class="offer-card">

                        <div class="seller-desc-container">



                            <div class="seller-img-container">

                                <img class="seller-img" src="<?php echo $sellerImg[2] ?>" alt="" onerror="hideUnusedItemCards(event)">>

                                <div class="seller-name">
                                    <h1><?php echo "{$sellerFname[2]} {$sellerLname[2]}" ?></h1>
                                </div>


                            </div>

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
                                <p class="barter-info-content"><?php echo $sellerLocation[2] ?></p>

                            </div>






                        </div>

                        <div class="offer-rhs-content">



                            <div class="header-and-card">

                                <h1 class="header-title">Wants</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $sellerWants[2])[0];  ?>">
                                        <img src="<?php echo getItemDetails($conn, $sellerWants[2])[1];  ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" >

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">"<?php echo getItemDetails($conn, $sellerWants[2])[2];  ?>"</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="header-and-card">

                                <h1 class="header-title">In exchange for</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][0])[0]; ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][0])[1]; ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();" onerror="hideItem()">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][0])[2]; ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][1])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][1])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][1])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <!-- C+P -->

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][2])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][2])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][2])[2]; ?></h1>


                                        </div>



                                    </div>
                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][3])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][3])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][3])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][4])[0]; ?> " onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][4])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][4])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][5])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][5])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][5])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][6])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][6])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][6])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][7])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][7])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][7])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][8])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][8])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][8])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][9])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][9])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][9])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][10])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][10])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][10])[2]; ?></h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[2][11])[0]; ?>" onerror="hideItem()">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[2][11])[1]; ?>" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[2][11])[2]; ?></h1>


                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="offer-button-container">

                                <button class="offer-btn" id="accept-btn">Accept Offer</button>
                                <button class="offer-btn" id="reject-btn">Reject Offer</button>


                            </div>


                        </div>








                    </div>

                    <div class="offer-card">

                        <div class="seller-desc-container">



                            <div class="seller-img-container">

                                <img class="seller-img" src="<?php echo $sellerImg[3] ?>" alt="" onerror="hideUnusedItemCards(event)">

                                <div class="seller-name">
                                    <h1><?php echo "{$sellerFname[3]} {$sellerLname[3]}" ?></h1>
                                </div>


                            </div>

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
                                <p class="barter-info-content"><?php echo $sellerLocation[3] ?></p>

                            </div>






                        </div>

                        <div class="offer-rhs-content">



                            <div class="header-and-card">

                                <h1 class="header-title">Wants</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[3][0])[0] ?>">
                                        <img src="<?php echo getItemDetails($conn, $buyersWants[3][0])[1] ?>" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[3][0])[2] ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="header-and-card">

                                <h1 class="header-title">In exchange for</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="<?php echo getItemDetails($conn, $buyersWants[3][0])[0] ?>">
                                        <img src="" class="<?php echo getItemDetails($conn, $buyersWants[3][0])[1] ?>" alt="" onclick="document.getElementById('item-card-one').click();">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title"><?php echo getItemDetails($conn, $buyersWants[3][0])[2] ?></h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="offer-button-container">

                                <button class="offer-btn" id="accept-btn">Accept Offer</button>
                                <button class="offer-btn" id="reject-btn">Reject Offer</button>


                            </div>


                        </div>








                    </div>

                    <div class="offer-card">

                        <div class="seller-desc-container">



                            <div class="seller-img-container">

                                <img class="seller-img" src="<?php echo $sellerImg[4] ?>" alt="" onerror="hideUnusedItemCards(event)">

                                <div class="seller-name">
                                    <h1><?php echo "{$sellerFname[4]} {$sellerLname[4]}" ?></h1>
                                </div>


                            </div>

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
                                <p class="barter-info-content"><?php echo $sellerLocation[4] ?></p>

                            </div>






                        </div>

                        <div class="offer-rhs-content">



                            <div class="header-and-card">

                                <h1 class="header-title">Wants</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="178">
                                        <img src="" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="header-and-card">

                                <h1 class="header-title">In exchange for</h1>

                                <div class="item-cards-container" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false}'>



                                    <div class="item-card">


                                        <input id="item-card-one" type="submit" style="display:none;" name="productId" value="178">
                                        <img src="" class="item-card-img" alt="" onclick="document.getElementById('item-card-one').click();">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Rose Chair</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Dell Precision 2016</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">May Tag Front Loader</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>



                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>


                                        </div>



                                    </div>

                                    <div class="item-card">

                                        <img src="" class="item-card-img" alt="" onerror="hideItem(event)">

                                        <div class="item-card-text">

                                            <h1 class="item-card-title">Sony Playstation 1</h1>

                                        </div>



                                    </div>




                                </div>

                            </div>

                            <div class="offer-button-container">

                                <button class="offer-btn" id="accept-btn">Accept Offer</button>
                                <button class="offer-btn" id="reject-btn">Reject Offer</button>


                            </div>


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


    <script src="flickity.pkgd.min.js"></script>
    <script src="view-offers-page.js"></script>

</body>

</html>
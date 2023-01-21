<?php

include "check.php";
include "displaySelectedItems.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select-item-page.css">
    <title>Select Item</title>
</head>

<body>

    <main>

        <form class="form" action="http://localhost/bartr/Bartr/my-app/src/selectItem.php" method="post">

            <div class="item-container">

                <input id="item-one-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[0] ?>" />

                <div class="item-checkbox" id="item-one" onclick="selectItem(event)" style="background: #E4E2E2">

                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[0] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[0] ?></h1>

                    </div>

                </div>



            </div>

            <div class="item-container">

                <input id="item-two-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[1] ?>" />


                <div class="item-checkbox" id="item-two" onclick="selectItem(event)" style="background: #E4E2E2">

                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[1] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[1] ?></h1>

                    </div>

                </div>



            </div>

            <div class="item-container">

                <input id="item-three-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[2] ?>" />


                <div class="item-checkbox" id="item-three" onclick="selectItem(event)" style="background: #E4E2E2">

                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[2] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[2] ?></h1>

                    </div>

                </div>



            </div>

            <div class="item-container">

                <input id="item-four-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[3] ?>" />


                <div class="item-checkbox" id="item-four" onclick="selectItem(event)" style="background: #E4E2E2">

                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[3] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[3] ?></h1>

                    </div>

                </div>



            </div>

            <div class="item-container">

                <input id="item-five-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[4] ?>" />


                <div class="item-checkbox" id="item-five" onclick="selectItem(event)" style="background: #E4E2E2">

                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[4] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[4] ?></h1>

                    </div>

                </div>



            </div>

            <div class="item-container">

                <input id="item-six-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[5] ?>" />


                <div class="item-checkbox" id="item-six" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[5] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[5] ?></h1>

                    </div>

                </div>





            </div>

            <div class="item-container">

                <input id="item-seven-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[6] ?>" />


                <div class="item-checkbox" id="item-seven" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[6] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[6] ?></h1>

                    </div>

                </div>





            </div>

            <div class="item-container">

                <input id="item-eight-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[7] ?>" />


                <div class="item-checkbox" id="item-eight" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[7] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[7] ?></h1>

                    </div>

                </div>





            </div>

            <div class="item-container">

                <input id="item-nine-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[8] ?>" />


                <div class="item-checkbox" id="item-nine" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[8] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[8] ?></h1>

                    </div>

                </div>





            </div>

            <div class="item-container">

                <input id="item-ten-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[9] ?>" />


                <div class="item-checkbox" id="item-ten" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[9] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[9] ?></h1>

                    </div>

                </div>





            </div>

            <div class="item-container">

                <input id="item-eleven-checkbox" class="item-checkbox-input" type="checkbox" style="display:none;" name="item-checkbox[]" value="<?php echo $productId[10] ?>" />


                <div class="item-checkbox" id="item-eleven" onclick="selectItem(event)" style="background: #E4E2E2" ;>
                    <img class="checkmark-icon-img" src="./images/checkmark-icon.png" alt="">

                </div>

                <div class="item-card-details">

                    <img src="<?php echo $productImg[10] ?>" class="item-card-img" alt="" onerror="hideUnusedItemCards(event)">

                    <div class="item-card-text">

                        <h1 class="item-card-title"><?php echo $productName[10] ?></h1>

                    </div>

                </div>





            </div>



            <button type="submit" class=select-items-btn>Select Items to Bartr</button>




        </form>






    </main>

    <script src="select-item-page.js"></script>

</body>

</html>
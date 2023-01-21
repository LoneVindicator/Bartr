const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")
const addItemBtn = document.getElementsByClassName("add-items")
const viewOffersBtn = document.getElementsByClassName("view-offers")
const viewItemBtn = document.getElementsByClassName("view-items")

const itemImgBtn = document.getElementsByClassName("item-card-img")


const Btn50km = document.getElementsByClassName("distance-toggles-50km")
const Btn10km = document.getElementsByClassName("distance-toggles-10km")
const Btn5km = document.getElementsByClassName("distance-toggles-5km")
const Btn1km = document.getElementsByClassName("distance-toggles-1km")
const Btn500m = document.getElementsByClassName("distance-toggles-500m")


// Navbar Functions

signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")


})


//Page Specific Functions

addItemBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/upload-page.php", "_self")

})

viewOffersBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/view-offers-page.php", "_self")

})

viewItemBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/my-items-page.php", "_self")

})

itemImgBtn[0].addEventListener("click", function(){

    // window.open("http://localhost/bartr/Bartr/my-app/src/item-page.php", "_self")

})


//Distance Button Behavior

Btn50km[0].addEventListener("click", function(){
    
    clearBtnColor()
    Btn50km[0].style.background = "#2BC48A"

})

Btn10km[0].addEventListener("click", function(){

    clearBtnColor()
    Btn10km[0].style.background = "#2BC48A"

})

Btn5km[0].addEventListener("click", function(){

    clearBtnColor()
    Btn5km[0].style.background = "#2BC48A"

    

})

Btn1km[0].addEventListener("click", function(){

    clearBtnColor()
    Btn1km[0].style.background = "#2BC48A"

})

Btn500m[0].addEventListener("click", function(){

    clearBtnColor()
    Btn500m[0].style.background = "#2BC48A"

})

function clearBtnColor(){

    Btn50km[0].style.background = "#D9D9D9"
    Btn10km[0].style.background = "#D9D9D9"
    Btn5km[0].style.background = "#D9D9D9"
    Btn1km[0].style.background = "#D9D9D9"
    Btn500m[0].style.background = "#D9D9D9"


}









//Footer Functions


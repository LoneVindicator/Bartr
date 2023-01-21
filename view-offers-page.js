const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")
const addItemBtn = document.getElementsByClassName("add-items")
const viewItemBtn = document.getElementsByClassName("view-items")
const itemImgBtn = document.getElementsByClassName("item-card-img")
const  itemCard = document.getElementsByTagName("img")

// Navbar Functions

signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")


})

function hideUnusedItemCards(event){

    const element = event.target.parentNode.parentNode.parentNode

    element.style = "display:none"


}

function hideItem(event){

    const element = event.target.parentNode

    console.log("test")

    element.style = "display:none"


}



//Footer Functions


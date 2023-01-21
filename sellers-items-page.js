const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")


// Navbar Functions

signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")


})

function hideUnusedItemCards(event){

    const element = event.target

    element.parentNode.style = "display:none"


}










//Footer Functions


const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")

const mainImg = document.getElementsByClassName("main-image")
const originalMainImg  = mainImg[0].src
const makeOfferBtn = document.getElementsByClassName("make-offer-btn")
const selectItemIframe = document.getElementById("select-item-iframe")
const sellerDescContainer = document.getElementsByClassName("seller-desc-container")
const extraImg = document.getElementsByClassName("extra-imag")
const contactBtn = document.getElementById("contact-btn")
const revealContactBtn = document.getElementById("reveal-contact-btn")

const clickMainImg = document.getElementsByClassName("main-image")

const writeReviewContainer = document.getElementById("write-review-container")
const writeReviewBtn = document.getElementsByClassName("writeReview-btn")
const reviewsContainer = document.getElementsByClassName("reviews-container") 
const userStatement = document.getElementsByClassName("user-statement")
const sellerCard = document.getElementsByClassName("seller-card")




//Navbar Functions
signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    window.open("home-page.php", "_self")

})

//Page Specific Functions

function changeImgtoMain(event){

    mainImg[0].src = event.target.src

    console.log(mainImg.src)
    console.log(event.target.src)



}

clickMainImg[0].addEventListener("click", function(){

    console.log(originalMainImg)

    mainImg[0].src = originalMainImg
    
})

makeOfferBtn[0].addEventListener("click", function(){

    selectItemIframe.style = "display: intial"
    sellerDescContainer[0].style = "display: none"


})

contactBtn.addEventListener("click", function(){

    contactBtn.style = "display: none";
    revealContactBtn.style = ""

})

function hideExtraImg(event){

    // console.log(event)
    // console.log("test")

    event.target.style = "visibility: hidden"
}

writeReviewBtn[0].addEventListener("click", function(){

    if(writeReviewContainer.style.display == "none"){

        writeReviewContainer.style = ""
        
        reviewsContainer[0].style.height = "756px"
        reviewsContainer[0].style.width = "1152px"
        
        

    }else{

        writeReviewContainer.style = "display: none"
        reviewsContainer[0].style.width = ""
        reviewsContainer[0].style.height = ""


    }


    
})



function hideItem(event){

    const element = event.target.parentNode.parentNode
    console.log(element)
    element.style = "display:none"

}


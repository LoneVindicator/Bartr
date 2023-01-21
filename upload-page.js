const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")
const uploadPhotoBtn = document.getElementById("upload-photo-btn")
const deletePhotoBtn = document.getElementById("delete-photo-btn")
const mainImg = document.getElementById("item-main-photo")
const extraImg = document.querySelectorAll(".extra-img")

let selectedImg = ""

// let image_input = document.querySelector(`#${selectedImg}-input`)
let extraOne = document.querySelector(`#extra-img-one-input`)
let extraTwo = document.querySelector(`#extra-img-two-input`)
let extraThree = document.querySelector(`#extra-img-three-input`)
let extraFour = document.querySelector(`#extra-img-four-input`)
let mainPhoto = document.querySelector(`#item-main-photo-input`)



//Navbar Functions
signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    
    window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")
    

})

uploadPhotoBtn.addEventListener("click", function(){
    


})

function changeImgtoMain(event){

    mainImg.src = event.target.src

    if(event.target.style.border == ""){

        extraImg.forEach(extraImg => {
            extraImg.style.border = ""
            mainImg.style.border = ""
            
         });

        
        
        event.target.style = "border: solid black"
        selectedImg = event.target.id
        console.log(selectedImg)
        

    }else{

        event.target.style.border = ""

        
    }

    



}

deletePhotoBtn.addEventListener("click", function(){

    document.querySelector(`#${selectedImg}`).src = "images/upload-icon.png";
    document.querySelector("#item-main-photo").src = "images/upload-icon.png";


})

extraOne.addEventListener("change", function() {

    console.log(selectedImg)
    
    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      document.querySelector("#item-main-photo").src = uploaded_image;
      document.querySelector(`#${selectedImg}`).src = uploaded_image;
      

      console.log(document.querySelector(`#${selectedImg}-input`))
      document.querySelector(`#${selectedImg}-input`).src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    document.querySelector("#item-main-photo").src = ""
    console.log(selectedImg)
    

  
  });

  extraTwo.addEventListener("change", function() {

    console.log(selectedImg)
    
    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      document.querySelector("#item-main-photo").src = uploaded_image;
      document.querySelector(`#${selectedImg}`).src = uploaded_image;
      

      console.log(document.querySelector(`#${selectedImg}-input`))
      document.querySelector(`#${selectedImg}-input`).src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    document.querySelector("#item-main-photo").src = ""
    console.log(selectedImg)
    

  
  });

  extraThree.addEventListener("change", function() {

    console.log(selectedImg)
    
    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      document.querySelector("#item-main-photo").src = uploaded_image;
      document.querySelector(`#${selectedImg}`).src = uploaded_image;
      

      console.log(document.querySelector(`#${selectedImg}-input`))
      document.querySelector(`#${selectedImg}-input`).src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    document.querySelector("#item-main-photo").src = ""
    console.log(selectedImg)
    

  
  });

  extraFour.addEventListener("change", function() {

    console.log(selectedImg)
    
    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      document.querySelector("#item-main-photo").src = uploaded_image;
      document.querySelector(`#${selectedImg}`).src = uploaded_image;
      

      console.log(document.querySelector(`#${selectedImg}-input`))
      document.querySelector(`#${selectedImg}-input`).src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    document.querySelector("#item-main-photo").src = ""
    console.log(selectedImg)
    

  
  });

  mainPhoto.addEventListener("change", function() {

    console.log(selectedImg)
    
    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      document.querySelector("#item-main-photo").src = uploaded_image;
      document.querySelector(`#${selectedImg}`).src = uploaded_image;
      

      console.log(document.querySelector(`#${selectedImg}-input`))
      document.querySelector(`#${selectedImg}-input`).src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    document.querySelector("#item-main-photo").src = ""
    console.log(selectedImg)
    

  
  });







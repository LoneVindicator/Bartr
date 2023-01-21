let countries = ""
let nations = ""

fetch('./countries.json')
    .then((response) => response.json())
    .then((json) => countries = json);



fetch('./nations.json')
    .then((response) => response.json())
    .then((json) => nations = json);


const signInBtn = document.getElementsByClassName("signin-icon-container")
const bartrLogo = document.getElementsByClassName("bartr-logo")



const cityDropDown = document.getElementById("city")
const country = document.getElementById("country")
const mainPhoto = document.getElementById("mainPhoto")
const mainPhotoBtn = document.getElementById("item-main-photo-input")
const deletePhotoBtn = document.getElementById("delete-photo-btn")


// Navbar Functions

signInBtn[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/logout.php", "_self")

})

bartrLogo[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")


})

country.addEventListener("change", function(){

    console.log(countries)
    

    let chosenCountry = getSelectValue()
    console.log(chosenCountry)
    let relevantCities = countries[chosenCountry]

    cityDropDown.innerHTML = '<select class="form-input-short" id="city" name="city"><option>select city</option>'

    relevantCities.forEach(city => {

        let option = document.createElement("option")
        option.text = city
        option.value = city
        cityDropDown.appendChild(option)

    });

    console.log(relevantCities)



})

country.addEventListener("click", function(){

    let allNationNames = []

    for(let i=0; i<nations.length; i++){

        let nationName = nations[i].name

        allNationNames.push(nationName)
       
    }

    allNationNames.forEach(nation => {

        let option = document.createElement("option")
        option.text = nation
        option.value = nation
        country.appendChild(option)

    });

    console.log("test")


})

mainPhotoBtn.addEventListener("change", function (){

    const reader = new FileReader();
    reader.addEventListener("load", () => {
    
      const uploaded_image = reader.result;
      mainPhoto.src = uploaded_image;
      
    });

    reader.readAsDataURL(this.files[0]);
    
})

deletePhotoBtn.addEventListener("click", function(){

    mainPhoto.src = "images/pierce-img.jpg";
    // document.querySelector(`#${selectedImg}`).src = "images/upload-icon.png";


})


function getSelectValue()
{
    // var selectedValue = document.getElementById("country").value;
    var selectedValue = country.options[country.selectedIndex].text

    return selectedValue

}




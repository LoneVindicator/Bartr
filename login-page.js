const loginBtn = document.getElementsByClassName("login-btn")
const registerLink = document.getElementsByClassName("secondText")
const usernameInput = document.getElementById("username")

const resetForm = document.getElementById("login-form")

resetForm.reset();

console.log(usernameInput.attributes.required)



// loginBtn[0].addEventListener("click", function(){

//     window.open("http://localhost/bartr/Bartr/my-app/src/home-page.php", "_self")
//     console.log(usernameInput.attributes.required)

// })

registerLink[0].addEventListener("click", function(){

    window.open("http://localhost/bartr/Bartr/my-app/src/registration-page.php", "_self")

})
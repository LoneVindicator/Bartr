const createAccountBtn = document.getElementsByClassName("createAccount-btn")
const resetForm = document.getElementById("registrationForm")

const usernameInput = document.getElementById("username")
const emailInput = document.getElementById("email")
const password = document.getElementById("password")
const confirmPassword = document.getElementById("confirmPassword")

resetForm.reset();


usernameInput.addEventListener("invalid", function(){

    alert("Please enter a valid username")
    
})

emailInput.addEventListener("invalid", function(){

    alert("Please enter a valid email")
})

password.addEventListener("invalid", function(){

    alert("Please enter a password")
})

confirmPassword.addEventListener("invalid", function(){

    alert("Please enter a password")


})




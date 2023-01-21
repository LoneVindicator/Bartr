const extraImg = document.querySelectorAll(".extra-img")

function selectItem(event){

    selectedImg = event.target
    let selectedCheckbox = document.getElementById(`${selectedImg.id}-checkbox`)

    if(event.target.style.backgroundColor == "rgb(228, 226, 226)"){

        selectedImg.style.backgroundColor = "rgba(43, 196, 138, 1)"
        selectedCheckbox.checked = true


    }else{

        selectedImg.style.backgroundColor = "rgb(228, 226, 226)"
        selectedCheckbox.checked = false
    }

    // console.log(`${selectedImg.id}-checkbox`)
    // console.log(selectedCheckbox.checked)
    


    



}

function hideUnusedItemCards(event){

    const element = event.target
    const parentElement = element.parentNode.parentNode

    // console.log(parentElement)

    parentElement.style = "display: none"


}
import { selectLoginButton } from "./selectInformations.js";
import { selectForm } from "./selectInformations.js";

let SelectLoginButton = selectLoginButton();
const SELECTFORM = selectForm();

function addEventOnLogin(){

    SelectLoginButton.addEventListener('click', event =>{
        if(SelectLoginButton){
            
            document.getElementById('registration-form-container').style.display = 'block';


        }else {
            console.log("ta condition est à chier sale merde");
        }
    })
    console.log("VOICI LE BOUTON ZEBI"+SelectLoginButton);
}

export {addEventOnLogin};
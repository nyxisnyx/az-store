import { selectLoginButton } from "./selectInformations.js";
// import { selectForm } from "./selectInformations.js";
import { selectButtonDeleteForm } from "./selectInformations.js";

let SelectLoginButton = selectLoginButton();
// const SELECTFORM = selectForm();
let selectButtonDeleteForms = selectButtonDeleteForm();




function addEventOnLogin(){

    SelectLoginButton.addEventListener('click', event =>{
        if(SelectLoginButton){
            
            document.getElementById('registration-form-container').style.display = 'block';


        }else {
            console.log("ta condition est à chier sale merde");
        }
    })
    // console.log("VOICI LE BOUTON ZEBI"+SelectLoginButton);
}

function addEventBtnDelete(){
    let supp = document.querySelector('.btn-display-n');
    console.log(supp);
    
   supp.addEventListener('click', events =>{

    if(supp){

        document.getElementById('registration-form-container').style.display = 'none';
    }
   })

}

export {addEventOnLogin};
export {addEventBtnDelete};
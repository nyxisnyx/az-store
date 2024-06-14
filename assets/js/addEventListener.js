import { selectSvgShoppingCard } from "./selectInformations.js";

const SVGSELECT = selectSvgShoppingCard();

function addEventShoppingCard(){ //Select of the icon 

    SVGSELECT.addEventListener('click', shoppingCard =>{
        window.location.href = '../az-store/assets/backend/php/shoppingCard.php';
    })
    
}

export {addEventShoppingCard};
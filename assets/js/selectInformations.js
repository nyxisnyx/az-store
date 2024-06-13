
function selectForm(){

    let form = document.querySelector('#registration-form-container');
    console.log(form);


}

function selectLoginButton(){
    let login = document.querySelector('#login-modale');
    console.log(login);

    return login;
}

function selectButtonDeleteForm(){
    let supp = document.querySelector('.btn-display-n');
    console.log(supp);

    return supp;
}

export {selectForm};
export {selectLoginButton};
export {selectButtonDeleteForm};
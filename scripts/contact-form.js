//Catching Variables from HTML
let contactName = document.getElementById('contact-name');
let contactSurname = document.getElementById('contact-surname');
let contactEmail = document.getElementById('contact-email');
let contactTel = document.getElementById('contact-tel');
let contactMessage = document.getElementById('contact-message');

const reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const reTel = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;

//Check name input
contactName.addEventListener("blur", function(){
    if (contactName.value == null || contactName.value == ""){
        contactName.style.borderBottom = "1px solid red";
    }
    else {
        contactName.style.borderBottom = "1px solid #008964";
    }
});

//Check surname input
contactSurname.addEventListener("blur", function(){
    if (contactSurname.value == null || contactSurname.value == ""){
        contactSurname.style.borderBottom = "1px solid red";
    }
    else {
        contactSurname.style.borderBottom = "1px solid #008964";
    } 
});

//Check e-mail address input
contactEmail.addEventListener("blur", function(){
    if ( !reEmail.test(contactEmail.value) ){
        contactEmail.style.borderBottom = "1px solid red";
    }
    else {
        contactEmail.style.borderBottom = "1px solid #008964";
    }
});

//Check telephone number input
contactTel.addEventListener("blur", function(){
    if (contactTel.value != ""){
        if ( !reTel.test(contactTel.value) ){
            contactTel.style.borderBottom = "1px solid red";
        }
        else {
            contactTel.style.borderBottom = "1px solid #008964";
        }
    }
    else {
        contactTel.style.borderBottom = "1px solid #C6C6C6";
    }
});

//Check messagge content textarea
contactMessage.addEventListener("blur", function(){
    if (contactMessage.value == null || contactMessage.value == ""){
        contactMessage.style.borderBottom = "1px solid red";
    }
    else {
        contactMessage.style.borderBottom = "1px solid #008964";
    } 
});

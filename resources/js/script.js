// INIZIO SCROLL NAVBAR 
let navbar = document.querySelector(".navbar")

window.addEventListener("scroll", ()=>{

    
    if(window.scrollY > 0) {
        navbar.classList.add("nav-custom")
    } else {
        navbar.classList.remove("nav-custom")
        }
})






// FINE SCROLL NAVBAR 

//INIZIO FORM DI REGISTRAZIONE/ACCEDI 
let container = document.getElementById('custom_container');
let registerBtn = document.getElementById('register');
let loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    custom_container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    custom_container.classList.remove('active');
});

//FINE FORM DI REGISTRAZIONE/ACCEDI 

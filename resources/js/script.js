//INIZIO FORM DI REGISTRAZIONE/ACCEDI 
let container = document.getElementById('custom_container');
let registerBtn = document.getElementById('register');
let loginBtn = document.getElementById('login');

registerBtn?.addEventListener('click', () => {
    custom_container.classList.add('active');
});

loginBtn?.addEventListener('click', () => {
    custom_container.classList.remove('active');
});
//FINE FORM DI REGISTRAZIONE/ACCEDI 





// INIZIO SCROLL NAVBAR 
let navbar = document.querySelector(".navbar")

window.addEventListener("scroll", () => {


    if (window.scrollY > 0) {
        navbar.classList.add("nav-custom")
    } else {
        navbar.classList.remove("nav-custom")
    }

})

// CAMBIO COLORE NAVBAR
let header = document.querySelector("#header")
let article_cards = document.querySelector("#article_cards")
let footer = document.querySelector("#footer")
let nav_logo = document.querySelector("#nav_logo")



let check = true;
let observer1 = new IntersectionObserver((entries) => {
    // threshold= 0.9;
    entries.forEach(entry => {
        if (entry.isIntersecting && check) {
            navbar.classList.add("navbar-dark")
            nav_logo.src = "/image/Minimal_initial_brand_logo_2.png"


        } else {
            navbar.classList.remove("navbar-dark")
            nav_logo.src = "/storage/images/logoAulabPost.png"
            check = true;

        }
    })
});
observer1.observe(article_cards);


let check2 = true;
let observer2 = new IntersectionObserver((entries) => {
    // threshold= 0.9;
    entries.forEach(entry => {
        if (entry.isIntersecting && check2) {
            navbar.classList.remove("navbar-dark", "navbar-light")
            nav_logo.src = "/storage/images/logoAulabPost.png"

            check2 = false;

        } else {
            navbar.classList.add("navbar-dark", "navbar-light")
            nav_logo.src = "/image/Minimal_initial_brand_logo_2.png"
            check2 = true;

        }
    })
});
observer2.observe(footer);
// FINE SCROLL NAVBAR 










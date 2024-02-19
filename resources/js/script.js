let container = document.getElementById('custom_container');
let registerBtn = document.getElementById('register');
let loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    custom_container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    custom_container.classList.remove('active');
});
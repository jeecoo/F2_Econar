document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnPopup = document.querySelector('.login_btn');
    const iconClose = document.querySelector('.icon-close');
    const loginForm = document.querySelector('.form-box.login form');


    registerLink.addEventListener('click', () => {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        wrapper.classList.remove('active');
    });

    btnPopup.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
        
    });

    iconClose.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
        wrapper.classList.remove('active');
    });

    const loginBtn = document.getElementById("login_btn");
});
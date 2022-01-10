console.log('подключено');
let burgerMenu = document.querySelector('.header__burger');
let mobileMenu = document.querySelector('.mobile__menu');
let body = document.querySelector('body');
burgerMenu.addEventListener('click', function() {
    //.mobile__menu_active
    if(mobileMenu.classList.contains('mobile__menu_active')) {
        mobileMenu.classList.remove('mobile__menu_active');
    } else {
        mobileMenu.classList.add('mobile__menu_active');
    }
    
    body.classList.add('body__mobile-active');
});

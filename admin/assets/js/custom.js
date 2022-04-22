// /*----- Path Actions -----*/
// let path = window.location.pathname;
// path = path.split('/');
// let pageTitle = path[path.length - 1];
// let activePath = path[path.length - 2];

// if (activePath == 'auth') {
//     let bodyTop = document.querySelector('.bodyTop');
//     bodyTop.style.padding = '0';
// }

// let sideMenu = Array.from(document.querySelectorAll('.main-menu .nav-item'));
// sideMenu.forEach(e => {
//     let sideMenuLink = e.querySelector('.main-menu .nav-item a').href;
//     sideMenuLink = sideMenuLink.split('/');
//     let sideMenuActive = sideMenuLink[sideMenuLink.length - 2];
//     if (sideMenuActive == activePath) {
//         e.classList.add('active');
//     };
// });




/*----- Go Back Page -----*/
let backLink = Array.from(document.querySelectorAll('.backLink'));
if (backLink) {
    backLink.forEach(e => {
        e.addEventListener('click', function () {
            window.history.go(-1)
        });
    });
};



/*----- Password Display -----*/
let eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
if (eyeBtn) {
    eyeBtn.forEach(e => {
        e.addEventListener('click', function () {
            let passwordWrapper = e.closest('.passwordWrapper');
            let passInput = passwordWrapper.querySelector('.passInput');
            let eyeIcon = passwordWrapper.querySelector('.passDisplay i');
            if (passInput.type == 'password') {
                passInput.setAttribute('type', 'text');
                eyeIcon.setAttribute('class', 'fas fa-eye');
            }
            else {
                passInput.setAttribute('type', 'password');
                eyeIcon.setAttribute('class', 'fas fa-eye-slash');
            };
        });
    });
};




/*----- Open SubMenu -----*/
let subNavItem = document.querySelector('.subactive');

if (subNavItem) {
    let navItem = subNavItem.closest('.has-sub');
    navItem.classList.add('open');
};



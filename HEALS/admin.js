document.addEventListener("DOMContentLoaded", function() {
    // JQuery-like syntax for vanilla JS
    const menuBtn = document.querySelector('.menu-btn');
    const sideBar = document.querySelector('.side-bar');
    const closeBtn = document.querySelector('.close-btn');
    const subBtns = document.querySelectorAll('.sub-btn');

    menuBtn.addEventListener('click', function() {
        sideBar.classList.add('active');
        menuBtn.style.visibility = 'hidden';
    });

    closeBtn.addEventListener('click', function() {
        sideBar.classList.remove('active');
        menuBtn.style.visibility = 'visible';
    });

    subBtns.forEach(function(subBtn) {
        subBtn.addEventListener('click', function() {
            const subMenu = subBtn.nextElementSibling;
            const dropdown = subBtn.querySelector('.dropdown');

            if (subMenu.style.display === 'block') {
                subMenu.style.display = 'none';
                dropdown.classList.remove('rotate');
            } else {
                subMenu.style.display = 'block';
                dropdown.classList.add('rotate');
            }
        });
    });
});

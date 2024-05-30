document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const sideBar = document.querySelector('.side-bar');
    const closeBtn = document.querySelector('.close-btn');
    const menuItems = document.querySelectorAll('.side-bar ul li');
    const contents = document.querySelectorAll('.content');

    menuBtn.addEventListener('click', function () {
        sideBar.classList.add('active');
    });
  

    closeBtn.addEventListener('click', function () {
        sideBar.classList.remove('active');
    });

    menuItems.forEach(item => {
        item.addEventListener('click', function () {
            const contentId = item.getAttribute('data-content');
            contents.forEach(content => {
                content.style.display = content.id === contentId ? 'block' : 'none';
            });
            sideBar.classList.remove('active');
        });
    });
});

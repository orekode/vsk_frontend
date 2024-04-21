const menuBtn = document.querySelector('.menu-btn_102');
const closeBtn = document.querySelector('.close-btn_102');
const navItems = document.querySelector('.nav_items_102')

//open and nav menu
menuBtn.addEventListener('click', showMenu);
closeBtn.addEventListener('click', closeMenu);

function showMenu(){
    navItems.style.display = 'block';
    menuBtn.style.display= 'none';
    closeBtn.style.display = 'inline-block'
}

function closeMenu(){
    navItems.style.display = 'none';
    menuBtn.style.display = 'inline-block';
    closeBtn.style.display = 'none'
}
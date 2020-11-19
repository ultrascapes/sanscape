console.log('Loaded');

function OpenMenu() {
    const menu = document.querySelector('#site-navigation');
    const menuHeight = menu.scrollHeight + 'px';
    if (menu.style.maxHeight){ 
        menu.style.maxHeight = null;
        menu.style.overflow = 'hidden';
    } else {
        menu.style.overflow = 'visible';
        menu.style.maxHeight = menuHeight;
    }
    console.log(menuHeight); 

}
window.onload = function () {
    /* Open burger menu */
    const burger = document.querySelector('#__burger');
    burger.onclick = function () {
        const body = document.querySelector('body');
        if (body.style.overflow === 'hidden') {
            body.style.overflow = 'auto';
        } else {
            body.style.overflow = 'hidden';
        }
        const menu = document.querySelector('#__menu');
        menu.classList.toggle('__show-menu');
        menu.classList.toggle('__hidden-menu');
        menu.classList.remove('display-none_mob');
        const burgerItems = document.querySelectorAll('span[id*=__burger-item]');
        for (let i = 0; i < burgerItems.length; ++i) {
            if (burgerItems[i].classList.contains('__active')) {
                burgerItems[i].classList.remove('__active');
            } else {
                burgerItems[i].classList.add('__active');
            }
            if (!burgerItems[i].classList.contains('__deactive') && !burgerItems[i].classList.contains('__active')) {
                burgerItems[i].classList.add('__deactive');
            } else {
                burgerItems[i].classList.remove('__deactive');
            }
        }
    }
    /* End open burger menu */
}

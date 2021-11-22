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
    // /* End open burger menu */


    const glideTop = new Glide('.works__glide_top', {
        type: 'carousel',
        autoplay: 3000,
        perView: 2,
        animationDuration: 500,
        focusAt: 'center',
        keyboard: false,
        breakpoints: {
            1350: {
                perView: 1
            },
            770: {
                perView: 1
            },

        }
    })
    glideTop.mount();
    const glideBottom = new Glide('.works__glide_bottom', {
        type: 'carousel',
        direction: "rtl",
        autoplay: 3000,
        animationDuration: 500,
        perView: 2,
        focusAt: 'center',
        keyboard: false,
        breakpoints: {
            1350: {
                perView: 1
            },
            770: {
                perView: 1
            },
        }
    })
    glideBottom.mount();

    const glideServices = new Glide('.services__glide', {
        type: 'carousel',
        autoplay: 3000,
        animationDuration: 1000,
        perView: 4,
        startAt: 0,
        focusAt: 'center',
        keyboard: false,
        breakpoints: {
            1350: {
                perView: 3
            },
            770: {
                perView: 2
            },
            400: {
                perView: 1
            },

        }
    })
    glideServices.mount();

    // const filterSliderServices = new Glide('.services__glide', {
    //     type: 'carousel',
    //     animationDuration: 1000,
    //     perView: 7,
    //     gap: 30,
    //     startAt: 0,
    //     focusAt: '0',
    // keyboard: false,
    //     breakpoints: {
    //         1500: {
    //             perView: 6
    //         },
    //         1300: {
    //             perView: 5
    //         },
    //         1100: {
    //             perView: 4
    //         },
    //         770: {
    //             focusAt: 'center',
    //             perView: 2,
    //
    //         },
    //         500 :{
    //             focusAt: 'center',
    //             perView: 1,
    //         }
    //
    //
    //     }
    // })
    // filterSliderServices.mount();

    // const glideProductHostingSlider = new Glide('.hosting__glide', {
    //     type: 'slider',
    //     autoplay: 3000,
    //     animationDuration: 500,
    //     perView: 1,
    //     gap: 50,
    //     startAt: 0,
    //     focusAt: 'center',
    //     rewind: false,
    // keyboard: false,
    //     breakpoints: {
    //         1350: {
    //             perView: 2
    //         },
    //
    //         770: {
    //             perView: 1
    //         }
    //     }
    // })
    // glideProductHostingSlider.mount();
    //
    //
    //
    // const glideProductSlider = new Glide('.product-slider__glide', {
    //     type: 'carousel',
    //     autoplay: 3000,
    //     animationDuration: 1000,
    //     perView: 1,
    //     startAt: 0,
    //     focusAt: 'center',
    // keyboard: false,
    //     breakpoints: {
    //         770: {
    //             perView: 1
    //         }
    //     }
    // })
    // glideProductSlider.mount();
    //
    // const filterSliderOrder = new Glide('.order__glide', {
    //     type: 'carousel',
    //     animationDuration: 1000,
    //     perView: 6,
    //     gap: 50,
    //     startAt: 0,
    //     focusAt: '0',
    // keyboard: false,
    //     breakpoints: {
    //         1500: {
    //             perView: 5
    //         },
    //
    //         770: {
    //             focusAt: 'center',
    //             perView: 2,
    //
    //         },
    //         500 :{
    //             focusAt: 'center',
    //             perView: 1,
    //         }
    //
    //
    //     }
    // })
    // filterSliderOrder.mount();

//     const glidePortfolioTopSlider = new Glide('.portfolio-slider__glide_top', {
//         type: 'carousel',
//         autoplay: 3000,
//         animationDuration: 1000,
//         perView: 1,
//         startAt: 0,
//         focusAt: 'center',
//     keyboard: false,
//         breakpoints: {
//             770: {
//                 perView: 1
//             }
//         }
//     })
//     glidePortfolioTopSlider.mount();
//
//     const glidePortfolioBottomSlider = new Glide('.portfolio-slider__glide_bottom', {
//         type: 'carousel',
//         autoplay: 3000,
//         animationDuration: 1000,
//         perView: 1,
//         startAt: 0,
//         focusAt: 'center',
//     keyboard: false,
//         breakpoints: {
//             770: {
//                 perView: 1
//             }
//         }
//     })
//     glidePortfolioBottomSlider.mount();
//
//
}


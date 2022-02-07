// burger menu
var menuList = document.getElementById("navbar");
menuList.style.left = "500px";

function togglemenu() {
    if (menuList.style.left === "500px") {
        menuList.style.left = "5%"
    }
    else {
        menuList.style.left = "500px"
    }
}






// slider
const config = {
    type: 'carousel',
    perView: 1,
    breakpoints: {
        1024: {
            perView: 2
        },
        600: {
            perView: 1
        }
    },
}

new Glide('.glide', config).mount();


// slider
const configCarousel = {
    type: 'carousel',
    perView: 5,
    breakpoints: {
        1024: {
            perView: 5
        },
        600: {
            perView: 2
        }
    }
}
new Glide('.glider-carousel', configCarousel).mount();



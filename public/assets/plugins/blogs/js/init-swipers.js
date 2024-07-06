// 1: blogSwiper
var swiper = new Swiper(".blog--swiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    autoplay: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

$(".section--side-swiper").each(function () {
    new Swiper(this, {
        grabCursor: true,
        effect: "creative",
        autoplay: true,
        loop: true,
        creativeEffect: {
            prev: {
                shadow: true,
                translate: [0, 0, -400],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },
    });
});

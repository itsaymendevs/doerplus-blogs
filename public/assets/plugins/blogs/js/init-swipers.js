// 1: blogSwiper
var swiper = new Swiper(".blog--swiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    autoplay: true,
    grabCursor: true,
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
        mousewheel: true,
        autoplay: true,
        loop: true,
        creativeEffect: {
            prev: {
                shadow: true,
                origin: "left center",
                translate: ["-5%", 0, -200],
                rotate: [0, 100, 0],
            },
            next: {
                origin: "right center",
                translate: ["5%", 0, -200],
                rotate: [0, -100, 0],
            },
        },
    });
});

$(".section--regular-swiper").each(function () {
    new Swiper(this, {
        slidesPerView: "auto",
        spaceBetween: 30,
        autoplay: true,
        grabCursor: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});

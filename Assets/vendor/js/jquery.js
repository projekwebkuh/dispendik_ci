$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: 1000,
    autowidth: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})
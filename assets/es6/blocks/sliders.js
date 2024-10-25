const sliders = () => {
    try {
        $('.home__promo-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            appendDots: $('.home__promo-dots'),
            prevArrow: $('.home__promo-arrows .left'),
            nextArrow: $('.home__promo-arrows .right'),
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default sliders;
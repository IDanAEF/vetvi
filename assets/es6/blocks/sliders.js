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
        
        $('.catalog-detail__image-main .images').slick({
            infinite: false,
            slidesToScroll: 1,
            dots: true,
            appendDots: $('.catalog-detail__image-main .dots'),
            prevArrow: $('.catalog-detail__image-main .arrows .left'),
            nextArrow: $('.catalog-detail__image-main .arrows .right'),
            asNavFor: '.catalog-detail__image-thumbs',
        });
        $('.catalog-detail__image-thumbs').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.catalog-detail__image-main .images',
            arrows: false,
            focusOnSelect: true,
            infinite: false,
            vertical: true,
            verticalSwiping: true,
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default sliders;
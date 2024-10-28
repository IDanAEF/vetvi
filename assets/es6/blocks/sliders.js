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

    try {
        const waySliders = document.querySelectorAll('.about__way-slider');

        waySliders.forEach(waySlider => {
            const sliderItems = waySlider.querySelectorAll('.about__way-slider-item');
            
            let all = sliderItems.length,
                count = Math.floor(all / 2);

            const setSlider = () => {
                if (count < 0) count = all - 1;
                if (count >= all) count = 0;

                sliderItems.forEach(item => item.classList.remove('active', 'left', 'right'));

                if (count - 1 >= 0) sliderItems[count - 1].classList.add('left');
                sliderItems[count].classList.add('active');
                if (count + 1 < sliderItems.length) sliderItems[count + 1].classList.add('right');
            }

            setSlider();

            sliderItems.forEach((item, i) => {
                item.addEventListener('click', () => {
                    count = i;
                    setSlider();
                });
            });

            let startPos = 0;
        
            waySlider.addEventListener('touchstart', (e) => {
                startPos = e.changedTouches[0].screenX;
            });
        
            waySlider.addEventListener('touchend', (e) => {
                if (startPos - e.changedTouches[0].screenX > 50) {
                    count++;
                    setSlider();
                } else if (startPos - e.changedTouches[0].screenX < -50) {
                    count--;
                    setSlider();
                }
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default sliders;
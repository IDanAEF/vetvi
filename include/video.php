<section class="home__video page__block">
    <div class="container">
        <?php if (isset($showTitle) && $showTitle) : ?>
            <h2 class="page__title">Видео о коллекции</h2>
        <?php endif; ?>
        <a href="https://youtu.be/htIuSWBnmok" class="home__video-wrap elem_animate scale" data-fancybox>
            <picture>
                <source srcset="<?=IMAGES_PATH?>video-back.webp" type="image/webp">
                <img src="<?=IMAGES_PATH?>video-back.jpg" alt="Видео" class="img_bg">
            </picture>
            <span class="text_fz22 text_fw500 text_white">
                <img src="<?=IMAGES_PATH?>icons/play.svg" alt="Смотреть видео">
                Смотреть видео
            </span>
        </a>
    </div>
</section>
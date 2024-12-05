<?php require 'header.php'; ?>
<main class="home">
    <section class="home__promo text_white">
        <div class="home__promo-arrows">
            <div class="container">
                <span class="left">
                    <img src="<?=IMAGES_PATH?>icons/arrow.svg" alt="Назад">
                </span>
                <span class="right">
                    <img src="<?=IMAGES_PATH?>icons/arrow.svg" alt="Вперед">
                </span>
            </div>
        </div>
        <div class="home__promo-slider">
            <?php
                for ($i = 0; $i < 5; $i++) {
                    ?>
                    <div class="home__promo-slider-item">
                        <div class="parallax">
                            <picture>
                                <source srcset="<?=IMAGES_PATH?>promo-back.webp" type="image/webp">
                                <img src="<?=IMAGES_PATH?>promo-back.jpg" alt="VETVI" class="img_bg">
                            </picture>
                        </div>
                        <div class="container">
                            <div class="text">
                                <img src="<?=IMAGES_PATH?>logo-big.svg" alt="VETVI" class="logo">
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
        <div class="home__promo-dots"></div>
    </section>
    <?php require 'include/catalog.php'; ?>
    <?php require 'include/company.php'; ?>
    <?php require 'include/video.php'; ?>
    <?php require 'include/process.php'; ?>
</main>
<?php require 'footer.php'; ?>
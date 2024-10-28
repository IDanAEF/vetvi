<?php require '../header.php'; ?>
<main class="contacts">
    <section class="page__promo contacts__promo">
        <div class="parallax">
            <picture>
                <source srcset="<?=IMAGES_PATH?>contact-promo.webp" type="image/webp">
                <img src="<?=IMAGES_PATH?>contact-promo.png" alt="VETVI" class="img_bg">
            </picture>
        </div>
        <div class="container">
            <div class="page__breadcrumbs text_fz16">
                <a href="/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="white" />
                    </svg>
                    Главная
                </a>
                <span class="text_color">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="white" />
                    </svg>
                    Контакты
                </span>
            </div>
            <div class="contacts__promo-row">
                <div class="contacts__promo-info text_fz16">
                    <h1>Контакты</h1>
                    <div class="footer__social">
                        <a href="mailto:zakaz@vetvi.site">
                            Email: zakaz@vetvi.site
                        </a>
                        <a href="" target="_blank">
                            <img src="<?=IMAGES_PATH?>icons/telegram.svg" alt="Telegram">
                        </a>
                        <a href="" target="_blank">
                            <img src="<?=IMAGES_PATH?>icons/youtube.svg" alt="Youtube">
                        </a>
                        <a href="" target="_blank">
                            <img src="<?=IMAGES_PATH?>icons/whatsapp.svg" alt="Whatsapp">
                        </a>
                        <a href="" target="_blank">
                            <img src="<?=IMAGES_PATH?>icons/pinterest.svg" alt="Pinterest">
                        </a>
                    </div>
                    <a href="tel:+73472265723">
                        Телефон: <span class="text_fz20">+7 (347) 226-57-23</span>
                    </a>
                    <span>Адресс: г. Уфа, Бакалинская ул., 7</span>
                </div>
                <div class="contacts__promo-open">
                    <h2 class="text_fz70">Скоро открытие Шоурума</h2>
                    <span>Москва, комсомольский проспект 28</span>
                    <div class="images">
                        <img src="<?=IMAGES_PATH?>contact-image1.jpg" alt="">
                        <img src="<?=IMAGES_PATH?>contact-image2.jpg" alt="">
                        <img src="<?=IMAGES_PATH?>contact-image3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts__list page__block pt100 pb100">
        <div class="container">
            <div class="wrap">
                <h2 class="page__title text_center">Региональные представители</h2>
                <div class="descr text_fz30 text_center">Дилеры</div>
                <div class="country">
                    <button class="btn gray active">
                        <span>Россия</span>
                    </button>
                    <button class="btn gray">
                        <span>Казахстан</span>
                    </button>
                    <button class="btn gray">
                        <span>Узбекистан | Азербайджан</span>
                    </button>
                </div>
                <div class="country-item active">
                    <div class="country cats">
                        <button class="btn border active">
                            <span>Наши дилеры - освещение</span>
                        </button>
                        <button class="btn border">
                            <span>Наши дилеры - фурнитура</span>
                        </button>
                    </div>
                    <div class="country-item-list text_fz14 active">
                        <?php
                            for ($i = 0; $i < 16; $i++) {
                                ?>
                                <div class="country-item-place">
                                    <strong class="text_fz20">Cочи</strong>
                                    <span>Салон "That`s Living</span>
                                    <span>Сочи, Транспортная, 28, ТРЦ «Олимп», третий и четвертый этаж</span>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '../footer.php'; ?>
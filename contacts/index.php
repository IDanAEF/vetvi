<?php require '../header.php'; ?>
<main class="contacts">
    <section class="contacts__content page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs text_fz16">
                <a href="/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    Главная
                </a>
                <span class="text_color">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    Контакты
                </span>
            </div>
            <div class="contacts__content-row">
                <div class="contacts__content-text text_fz16">
                    <h1 class="page__block-title elem_animate bott">Контакты</h1>
                    <div class="contacts__content-text-item">
                        <a href="tel:+73472265723">Телефон: <span class="text_fz20">+7 (347) 226-57-23</span></a>
                    </div>
                    <div class="contacts__content-text-item">
                        <span>Адресс: г. Уфа, Бакалинская ул., 7</span>
                    </div>
                    <div class="contacts__content-text-item">
                        <div class="footer__social text_fz16">
                            <a href="mailto:info@vetvi.site">
                                Email: info@vetvi.site
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
                    </div>
                </div>
                <div class="contacts__content-map" id="contacts-map">

                </div>
            </div>
        </div>
    </section>
    <section class="contacts__list page__block">
        <div class="container">
            <div class="wrap">
                <h2 class="page__block-title text_center">Адрес производства</h2>
                <div class="descr text_fz20 text_center">г. Уфа, Бакалинская ул., 7</div>
                <div class="images">
                    <img src="<?=IMAGES_PATH?>contact-image1.jpg" alt="">
                    <img src="<?=IMAGES_PATH?>contact-image3.jpg" alt="">
                    <img src="<?=IMAGES_PATH?>contact-image4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="contacts__list page__block pb100">
        <div class="container">
            <div class="wrap">
                <h2 class="page__block-title text_center">Региональные представители</h2>
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
<script src="https://api-maps.yandex.ru/2.1/?apikey=5727f775-e56b-498e-bb2a-a48a1702a7f7&amp;lang=ru_RU"></script>
<script>
    ymaps.ready(function () {
        var contactsMap = new ymaps.Map('contacts-map', {
            center: [54.716154, 55.991363],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

        contactsMapPlacemark = new ymaps.Placemark([54.716154, 55.991363], {
            hintContent: 'г. Уфа, Бакалинская ул., 7',
        }, {
            iconLayout: 'default#image',
        });

        contactsMap.geoObjects.add(contactsMapPlacemark);
    });
</script>
<?php require '../footer.php'; ?>
<?php require '../../../header.php'; ?>
<main class="catalog-detail">
    <section class="catalog-detail__info page__block">
        <div class="container">
            <div class="page__breadcrumbs text_fz16">
                <a href="/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    Главная
                </a>
                <a href="/catalog/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    Каталог
                </a>
                <a href="/catalog/section/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    Люстры
                </a>
                <span class="text_color">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="black" />
                    </svg>
                    OLIVIA BLACK
                </span>
            </div>
            <div class="catalog-detail__info-row">
                <div class="catalog-detail__image">
                    <div class="catalog-detail__image-thumbs">
                        <div class="thumb-item">
                            <picture>
                                <source srcset="<?=IMAGES_PATH?>product-preview1.webp" type="image/webp">
                                <img src="<?=IMAGES_PATH?>product-preview1.jpg" alt="OLIVIA BLACK" class="img_bg">
                            </picture>
                            <img src="<?=IMAGES_PATH?>icons/play.svg" alt="Видео" class="play">
                        </div>
                        <?php
                            for ($i = 2; $i <= 6; $i++) {
                                ?>
                                <div class="thumb-item">
                                    <picture>
                                        <source srcset="<?=IMAGES_PATH?>product-preview<?=$i?>.webp" type="image/webp">
                                        <img src="<?=IMAGES_PATH?>product-preview<?=$i?>.jpg" alt="OLIVIA BLACK" class="img_bg">
                                    </picture>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="catalog-detail__image-main">
                        <div class="images">
                            <a href="https://youtu.be/htIuSWBnmok" data-fancybox>
                                <picture>
                                    <source srcset="<?=IMAGES_PATH?>product-preview1.webp" type="image/webp">
                                    <img src="<?=IMAGES_PATH?>product-preview1.jpg" alt="OLIVIA BLACK" class="img_bg">
                                </picture>
                                <img src="<?=IMAGES_PATH?>icons/play.svg" alt="Видео" class="play">
                            </a>
                            <?php
                                for ($i = 2; $i <= 6; $i++) {
                                    ?>
                                    <a href="<?=IMAGES_PATH?>product-preview<?=$i?>.jpg" data-fancybox>
                                        <picture>
                                            <source srcset="<?=IMAGES_PATH?>product-preview<?=$i?>.webp" type="image/webp">
                                            <img src="<?=IMAGES_PATH?>product-preview<?=$i?>.jpg" alt="OLIVIA BLACK" class="img_bg">
                                        </picture>
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="arrows">
                            <span class="left">
                                <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="Назад">
                            </span>
                            <span class="right">
                                <img src="<?=IMAGES_PATH?>icons/arrow-small.svg" alt="Вперед">
                            </span>
                        </div>
                        <div class="dots"></div>
                    </div>
                </div>
                <div class="catalog-detail__text">
                    <div class="text-block">
                        <span class="article text_fz12 text_fw500">Артикул: 98941541435</span>
                        <h1 class="text_fz24 text_fw700 text_ffMon">
                            OLIVIA BLACK <span class="text_gray2">Люстра</span>
                        </h1>
                        <span class="price text_fw500">
                            680 000р.
                        </span>
                        <div class="perks text_fz12 text_fw500">
                            <span>
                                <img src="<?=IMAGES_PATH?>icons/exist.svg" alt="В наличии / под заказ">
                                В наличии / под заказ
                            </span>
                        </div>
                    </div>
                    <div class="text-block">
                        <strong class="text-block-title">
                            Выберите вариант
                        </strong>
                        <div class="variant text_fz16">
                            <div class="variant-item active">M</div>
                            <div class="variant-item">L</div>
                            <button class="btn color text_fz20">
                                <span>Заказать</span>
                            </button>
                        </div>
                    </div>
                    <div class="text-block">
                        <strong class="text-block-title">
                            Выберите цвет
                        </strong>
                        <div class="colors">
                            <div class="colors-item active">
                                <img src="<?=IMAGES_PATH?>product-thumb1.png" alt="OLIVIA BLACK">
                            </div>
                            <div class="colors-item">
                                <img src="<?=IMAGES_PATH?>product-thumb2.png" alt="OLIVIA BLACK">
                            </div>
                        </div>
                        <a href="" class="whatsapp text_fz16" target="_blank">
                            <img src="<?=IMAGES_PATH?>icons/whatsapp-color.svg" alt="whatsapp">
                            Быстрый заказ через whatsapp
                        </a>
                        <div class="params text_fz16">
                            <div class="params-row">
                                <span>Габариты <br>(Диаметр x Толщина)</span>
                                <span class="text_fw300">900x400</span>
                            </div>
                            <div class="params-row">
                                <span>Вес</span>
                                <span class="text_fw300">15 кг</span>
                            </div>
                            <div class="params-row">
                                <span>Материал</span>
                                <span class="text_fw300">Окрашенная латунь, стекло ручной работы</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <strong class="text-block-title">
                            Скачать техническую документацию
                        </strong>
                        <div class="docs text_fz16">
                            <a href="" target="_blank">
                                <img src="<?=IMAGES_PATH?>icons/tech-doc.svg" alt="">
                                <span>Технические характеристики</span>
                            </a>
                            <a href="" target="_blank">
                                <img src="<?=IMAGES_PATH?>icons/3d.svg" alt="">
                                <span>3D модели</span>
                            </a>
                            <a href="" target="_blank">
                                <img src="<?=IMAGES_PATH?>icons/scheme.svg" alt="">
                                <span>Схема подключения</span>
                            </a>
                        </div>
                    </div>
                    <div class="text-block">
                        <strong class="text-block-title">
                            Описание
                        </strong>
                        <div class="default-text text_fz14">
                            <p>Люстра OLIVIA – мастерски воссозданный венец из ветвей оливкового дерева, который отсылает ко временам Древней Греции, где оно считалось священным. OLIVIA покоряет своей торжественностью и величием, а декоративные капли из стекла ручной работы вносят элемент волшебства. При освещении люстра словно оживает и создаёт танцующие тени.</p>
                            <p>Изделие оснащено комплектом из 16 LED лампочками, цоколь G9.</p>
                            <p>В комплект люстры диаметром 900 мм входят 35 прозрачных и 35 черных капель из стекла ручной работы; диаметром 1200 мм - по 45 капель. Для замены цвета капель необходимо обратиться к менеджеру.</p>
                            <p>*Вес и габариты могут варьироваться ± 10%, т.к. это ручная работа.</p>
                            <p>*Обращаем ваше внимание, что цвет изделия на экране монитора или мобильного устройства и в печатных материалах (каталогах, брошюрах) может отличаться от реального.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        $showTitle = true;
        require '../../../include/video.php';
    ?>
    <section class="catalog-detail__simular page__block">
        <div class="container">
            <h2 class="page__title">
                Соберите свой комплект освещения <span class="text_color">OLIVIA</span>
            </h2>
            <div class="catalog-section__products-list">
                <?php
                    $products = [
                        'product-preview1',
                        'product-preview2',
                        'product-preview3',
                        'product-preview4',
                    ];

                    foreach($products as $prod) {
                        $image = [
                            $prod.'.jpg',
                            $prod.'.webp'
                        ];
                        
                        require '../../../include/product-card.php';
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<?php require '../../../footer.php'; ?>
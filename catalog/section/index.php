<?php require '../../header.php'; ?>
<main class="catalog-section">
    <section class="page__promo">
        <div class="parallax dark">
            <picture>
                <source srcset="<?=IMAGES_PATH?>section-promo.webp" type="image/webp">
                <img src="<?=IMAGES_PATH?>section-promo.jpg" alt="VETVI" class="img_bg">
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
                <a href="/catalog/">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="white" />
                    </svg>
                    Каталог
                </a>
                <span class="text_color">
                    <svg width="5" height="13" viewBox="0 0 5 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.9246 6.63453C3.96924 6.67917 3.99156 6.73051 3.99156 6.78855C3.99156 6.84658 3.96924 6.89792 3.9246 6.94257L0.80406 10.0631C0.759417 10.1077 0.708078 10.1301 0.650042 10.1301C0.592006 10.1301 0.540667 10.1077 0.496024 10.0631L0.161203 9.72828C0.11656 9.68364 0.0942383 9.6323 0.0942383 9.57426C0.0942383 9.51623 0.11656 9.46489 0.161203 9.42024L2.7929 6.78855L0.161203 4.15685C0.11656 4.11221 0.0942383 4.06087 0.0942383 4.00283C0.0942383 3.9448 0.11656 3.89346 0.161203 3.84882L0.496024 3.51399C0.540667 3.46935 0.592006 3.44703 0.650042 3.44703C0.708078 3.44703 0.759417 3.46935 0.80406 3.51399L3.9246 6.63453Z" fill="white" />
                    </svg>
                    Люстры
                </span>
            </div>
            <h1 class="page__promo-single">Люстры</h1>
        </div>
    </section>
    <section class="catalog-section__products page__block pt100">
        <div class="container">
            <div class="catalog-section__products-list">
                <?php
                    $products = [
                        'product-preview1',
                        'product-preview2',
                        'product-preview3',
                        'product-preview4',
                        'product-preview5',
                        'product-preview6',
                        'product-preview7',
                        'product-preview1',
                        'product-preview1',
                        'product-preview1',
                        'product-preview1',
                        'product-preview1',
                    ];

                    foreach($products as $prod) {
                        $image = [
                            $prod.'.jpg',
                            $prod.'.webp'
                        ];
                        
                        require '../../include/product-card.php';
                    }
                ?>
            </div>
            <button class="btn margin text_fz16">
                <span>Смотреть еще</span>
            </button>
        </div>
    </section>
    <section class="catalog-section__about page__block pb100">
        <picture>
            <source srcset="<?=IMAGES_PATH?>section-back.webp" type="image/webp">
            <img src="<?=IMAGES_PATH?>section-back.jpg" alt="Дизайн" class="img_bg">
        </picture>
        <div class="container">
            <div class="text elem_animate right">
                <div class="default-text">
                    <h2>Интерьер</h2>
                    <p>Следует отметить, что базовый вектор развития однозначно определяет каждого участника как способного принимать собственные решения касаемо стандартных подходов.</p>
                </div>
                <div class="default-text">
                    <p>Наше дело не так однозначно, как может показаться: реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для соответствующих условий активизации.</p>
                    <p>В своём стремлении улучшить пользовательский опыт мы упускаем, что явные признаки победы институционализации разоблачены.</p>
                </div>
            </div>
            <div class="person text_fz18 text_center elem_animate top">
                <strong class="text_fz24">Алина Садыкова</strong>
                <span>Директор компании VETVI</span>
            </div>
        </div>
    </section>
    <section class="catalog-section__steps page__block gray pt100 pb100">
        <div class="container">
            <h2 class="page__block-title text_center">Этапы работы</h2>
            <div class="catalog-section__steps-list text_fz16">
                <?php
                    for ($i = 0; $i < 6; $i++) {
                        ?>
                        <div class="catalog-section__steps-item elem_animate top">
                            <span class="num">
                                <?=($i+1)?>
                            </span>
                            <span>В своём стремлении улучшить пользовательский опыт мы упускаем, что акционеры крупнейших компаний смешаны.</span>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="catalog-section__info page__block pt100 pb100">
        <div class="container">
            <div class="catalog-section__info-row">
                <div class="col image elem_animate scale">
                    <picture>
                        <source srcset="<?=IMAGES_PATH?>section-image1.webp" type="image/webp">
                        <img src="<?=IMAGES_PATH?>section-image1.jpg" alt="Дизайн">
                    </picture>
                </div>
                <div class="col elem_animate left">
                    <div class="default-text">
                        <h2>Дизайн</h2>
                        <p>Следует отметить, что базовый вектор развития однозначно определяет каждого участника как способного принимать собственные решения касаемо стандартных подходов. </p>
                        <p>Наше дело не так однозначно, как может показаться: реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для соответствующих условий активизации.</p>
                        <p>В своём стремлении улучшить пользовательский опыт мы упускаем, что явные признаки победы институционализации разоблачены.</p>
                    </div>
                </div>
            </div>
            <div class="catalog-section__info-row">
                <div class="col elem_animate right">
                    <div class="default-text">
                        <h2>Материалы</h2>
                        <p><b>Следует отметить, что базовый вектор развития однозначно определяет каждого участника как способного принимать собственные решения касаемо стандартных подходов. </b></p>
                        <ul>
                            <li>Наше дело не так однозначно, как может показаться: реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для соответствующих условий активизации.</li>
                            <li>Наше дело не так однозначно, как может показаться: реализация намеченных плановых заданий</li>
                            <li>Наше дело не так однозначно, как может показаться: реализация нам</li>
                        </ul>
                    </div>
                </div>
                <div class="col image elem_animate scale">
                    <picture>
                        <source srcset="<?=IMAGES_PATH?>section-image2.webp" type="image/webp">
                        <img src="<?=IMAGES_PATH?>section-image2.jpg" alt="Материалы">
                    </picture>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '../../footer.php'; ?>
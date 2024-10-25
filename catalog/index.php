<?php require '../header.php'; ?>
<main class="catalog">
    <section class="page__promo">
        <div class="parallax">
            <picture>
                <source srcset="<?=IMAGES_PATH?>catalog-back.webp" type="image/webp">
                <img src="<?=IMAGES_PATH?>catalog-back.jpg" alt="VETVI" class="img_bg">
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
                    Каталог
                </span>
            </div>
            <h1 class="page__promo-single">Каталог продукции</h1>
        </div>
    </section>
    <?php
        $hideTitle = true;
        require '../include/catalog.php';
    ?>
    <?php require '../include/about.php'; ?>
    <?php require '../include/video.php'; ?>
    <?php require '../include/process.php'; ?>
</main>
<?php require '../footer.php'; ?>
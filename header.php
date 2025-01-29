<?php
    define('IMAGES_PATH', '/assets/images/');
    define('CLEAR_PATH', preg_replace('/\\?.*/', '', $_SERVER['REQUEST_URI']));

    $blackHeader = 
        CLEAR_PATH == '/privacy/' || 
        CLEAR_PATH == '/catalog/section/product/' || 
        CLEAR_PATH == '/404/' || 
        CLEAR_PATH == '/cart/' || 
        CLEAR_PATH == '/cart/thanks/' || 
        CLEAR_PATH == '/search/' || 
        CLEAR_PATH == '/contacts/';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="max-image-preview:large">
    <title>VETVI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poiret+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/custom.css">
</head>
<body>
    <div class="page-wrap">
        <header class="header <?=$blackHeader ? 'black' : 'white'?>">
            <div class="container">
                <nav class="header__nav text_fz16">
                    <ul>
                        <li>
                            <svg class="burger" width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.5H24.0477" stroke="white" />
                                <path d="M9.90479 7.8335H26.1429" stroke="white" />
                                <path d="M1 15.1665H24.0477" stroke="white" />
                            </svg>
                        </li>
                        <li>
                            <a href="/catalog/">
                                Каталог
                            </a>
                        </li>
                        <li>
                            <a href="/about/">
                                О компании
                            </a>
                        </li>
                        <li>
                            <a href="/partner/">
                                Партнёрам
                            </a>
                        </li>
                        <li>
                            <a href="/contacts/">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="/" class="header__logo">
                    <img src="<?=IMAGES_PATH?>logo-header.svg" alt="VETVI">
                </a>
                <div class="header__right search-field">
                    <a href="tel:+79871444141" class="search-hide">+7 (987) 144 41 41</a>
                    <div class="icons">
                        <form action="/" class="search-form">
                            <input type="text" name="search-string" value="" required>
                        </form>
                        <i class="search-btn text_normal">
                            <img src="<?=IMAGES_PATH?>icons/loop.svg" alt="Поиск">
                        </i>
                        <a href="/cart/">
                            <span>2</span>
                            <img src="<?=IMAGES_PATH?>icons/cart.svg" alt="Корзина">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__mobile">
                <div class="header__mobile-wrap">
                    <div class="header__mobile-top search-field">
                        <img src="<?=IMAGES_PATH?>icons/close.svg" alt="Закрыть" class="header__mobile-close">
                        <a href="/" class="header__mobile-logo search-hide">
                            <img src="<?=IMAGES_PATH?>logo-small.svg" alt="Vetvi">
                        </a>
                        <form action="/" class="search-form">
                            <input type="text" name="search-string" value="" required>
                        </form>
                        <i class="search-btn text_normal">
                            <img src="<?=IMAGES_PATH?>icons/loop.svg" alt="Поиск">
                        </i>
                    </div>
                    <nav class="header__mobile-nav text_fz16">
                        <ul>
                            <li><a href="/catalog/section/">Люстры</a></li>
                            <li><a href="/catalog/section/">Подвесы</a></li>
                            <li><a href="/catalog/section/">Бра</a></li>
                            <li><a href="/catalog/section/">Настольные лампы</a></li>
                            <li><a href="/catalog/section/">Торшеры</a></li>
                            <li><a href="/catalog/section/">Зеркала</a></li>
                            <li><a href="/catalog/section/">Дверные ручки</a></li>
                            <li><a href="/catalog/section/">Декор</a></li>
                            <li><a href="/catalog/section/">Мебель</a></li>
                        </ul>
                    </nav>
                    <nav class="header__mobile-nav text_fz16 text_fw600">
                        <ul>
                            <li><a href="/catalog/">Каталог</a></li>
                            <li><a href="/delivery/">Оплата и доставка</a></li>
                            <li><a href="/about/">О компании</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                            <li><a href="/">Статьи</a></li>
                            <li><a href="/partner/">Дилеры</a></li>
                        </ul>
                    </nav>
                    <a href="tel:+79871444141" class="header__mobile-phone">
                        +7 (987) 144-41-41
                    </a>
                    <div class="icons">
                        <a href="">
                            <img src="<?=IMAGES_PATH?>icons/telegram-light.svg" alt="telegram">
                        </a>
                        <a href="">
                            <img src="<?=IMAGES_PATH?>icons/youtube-light.svg" alt="youtube">
                        </a>
                        <a href="">
                            <img src="<?=IMAGES_PATH?>icons/whatsapp-light.svg" alt="whatsapp">
                        </a>
                        <a href="">
                            <img src="<?=IMAGES_PATH?>icons/pinterest-light.svg" alt="pinterest">
                        </a>
                    </div>
                </div>
            </div>
        </header>
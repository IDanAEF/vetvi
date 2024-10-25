<?php
    define('IMAGES_PATH', '/assets/images/');
    define('CLEAR_PATH', preg_replace('/\\?.*/', '', $_SERVER['REQUEST_URI']));

    $blackHeader = CLEAR_PATH == '/privacy/' || CLEAR_PATH == '/catalog/section/product/' || CLEAR_PATH == '/404/';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="header__right">
                    <a href="tel:+79871444141">+7 (987) 144 41 41</a>
                    <div class="icons">
                        <a href="">
                            <img src="<?=IMAGES_PATH?>icons/loop.svg" alt="Поиск">
                        </a>
                        <a href="">
                            <span>2</span>
                            <img src="<?=IMAGES_PATH?>icons/cart.svg" alt="Корзина">
                        </a>
                    </div>
                </div>
            </div>
        </header>
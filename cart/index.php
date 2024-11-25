<?php require '../header.php'; ?>
<main class="cart">
    <section class="cart__content page__block pt0 pb100">
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
                    Корзина
                </span>
            </div>
            <h1 class="page__title elem_animate bott">Корзина</h1>
            <div class="cart__cols">
                <form action="" class="cart__form form">
                    <div class="form-head text_fz24">
                        <strong>Укажите свои контактные данные</strong>
                    </div>
                    <label class="form-label">
                        <input type="text" name="feedname" placeholder="Ваше имя*" required>
                    </label>
                    <label class="form-label">
                        <input type="tel" name="feedphone" placeholder="Телефон*" required>
                    </label>
                    <label class="form-label">
                        <input type="email" name="feedmail" placeholder="Email*" required>
                    </label>
                    <label class="form-label">
                        <input type="text" name="feedaddress" placeholder="Полный адрес доставки с индексом">
                    </label>
                    <div class="form-label">
                        <button class="text_fz16">
                            <span>Отправить</span>
                        </button>
                    </div>
                    <div class="form-policy text_fz12">
                        <span>
                            *Нажимая на кнопку “Отправить заявку” вы соглашаетесь с <a href="/privacy/" class="text_color">обработкой персональных данных и политикой конфиденциальности</a>
                        </span>
                    </div>
                </form>
                <div class="cart__list">
                    <strong class="col-name text_fz24">Список товаров</strong>
                    <div class="cart__products-item">
                        <div class="cart__products-item-left">
                            <a href="" class="image">
                                <img src="<?=IMAGES_PATH?>cart-image1.png" alt="OLIVIA BLACK">
                            </a>
                            <div class="descr text_ffPoi text_fz26">
                                <a href="">OLIVIA BLACK</a>
                                <div class="article text_fz16">
                                    <span>Артикул:</span>
                                    116744
                                </div>
                            </div>
                        </div>
                        <div class="cart__products-item-right text_fw500">
                            <div class="plus">
                                <span class="decr"></span>
                                <input type="text" value="1">
                                <span class="inc"></span>
                            </div>
                            <span class="text_fz16">
                                <i class="text_normal">2 800</i> ₽
                            </span>
                            <img src="<?=IMAGES_PATH?>icons/remove.svg" alt="Удалить" class="remove">
                        </div>
                    </div>
                    <div class="cart__info-row">
                        <span>Итого:</span>
                        <div class="line"></div>
                        <span>
                            <strong class="text_fz30">5 600 ₽</strong>
                            <span class="old-price">7 600 ₽</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '../footer.php'; ?>
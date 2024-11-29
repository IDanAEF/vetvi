        <footer class="footer">
            <picture>
                <source srcset="<?=IMAGES_PATH?>footer-back.webp" type="image/webp">
                <img src="<?=IMAGES_PATH?>footer-back.jpg" alt="footer-back" class="img_bg">
            </picture>
            <div class="container">
                <div class="footer__top">
                    <div class="footer__head">
                        <a href="/" class="footer__logo">
                            <img src="<?=IMAGES_PATH?>logo-color.svg" alt="VETVI">
                        </a>
                        <div class="footer__phone">
                            <img src="<?=IMAGES_PATH?>icons/footer-line.svg" alt="footer-line">
                            <span class="text_fz14 text_color">Ждем вашего звонка!</span>
                            <a href="tel:+79871444141">+7 (987) 144 41 41</a>
                        </div>
                    </div>
                    <div class="footer__info text_fz16">
                        <div class="footer__info-row">
                            <span class="text_color">© 2015 - <?=date('Y')?> ООО "ВЕТВИ"</span>
                        </div>
                        <div class="footer__info-row">
                            <span>Юридический адрес 450106, Республика Башкортостан, г. Уфа, ул. Радищева 117, пом. 8</span>
                        </div>
                        <div class="footer__info-row">
                            <span>ОГРН 1220200043535</span>
                            <span>ИНН/КПП 0274976316/02740100</span>
                        </div>
                        <div class="footer__info-row">
                            <a href="/privacy/">Политика конфиденциальности и пользовательское соглашение</a>
                        </div>
                    </div>
                </div>
                <div class="footer__bott text_fz14">
                    <span>Вся информация, размещенная на сайте, носит исключительно информационный характер и не является публичной офертой (ст.437 ГК РФ).</span>
                    <div class="footer__social text_fz16">
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
                </div>
            </div>
        </footer>
    </div>

    <div class="modal">
        <div class="modal__item" data-modal="feedback">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <form action="" class="form">
                    <img src="<?=IMAGES_PATH?>form-bush.png" alt="form-bush" class="bush">
                    <div class="form-head text_fz24 text_center">
                        <strong>Куда отправить файл?</strong>
                    </div>
                    <label class="form-label">
                        <input type="text" name="feedname" placeholder="Ваше имя" required>
                    </label>
                    <label class="form-label">
                        <input type="email" name="feedmail" placeholder="E-mail" required>
                    </label>
                    <div class="form-label">
                        <button class="text_fz16">
                            <span>Выслать файл</span>
                        </button>
                    </div>
                    <div class="form-policy text_fz12">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.4375 6.72936C12.6332 6.51077 12.6146 6.17491 12.396 5.9792C12.1774 5.78349 11.8416 5.80205 11.6459 6.02064L9.25937 8.68623C8.77579 9.22636 8.45013 9.58819 8.1717 9.82222C7.90646 10.0452 7.75067 10.0938 7.61458 10.0938C7.47849 10.0938 7.3227 10.0452 7.05747 9.82222C6.77903 9.58819 6.45337 9.22636 5.96979 8.68622L5.35413 7.99856C5.15842 7.77997 4.82257 7.76142 4.60397 7.95712C4.38538 8.15283 4.36683 8.48869 4.56254 8.70728L5.20451 9.42434C5.6549 9.92743 6.03057 10.3471 6.37383 10.6356C6.73695 10.9408 7.12861 11.1562 7.61458 11.1562C8.10055 11.1562 8.49222 10.9408 8.85533 10.6356C9.19859 10.3471 9.57426 9.92744 10.0246 9.42435L12.4375 6.72936Z" fill="#C7B299" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6617 1.68139C10.8526 1.59374 9.83293 1.59374 8.53205 1.59375H8.46795C7.16707 1.59374 6.14735 1.59374 5.33834 1.68139C4.51275 1.77084 3.84381 1.95665 3.27267 2.37161C2.9269 2.62282 2.62282 2.9269 2.37161 3.27267C1.95665 3.84381 1.77084 4.51275 1.68139 5.33834C1.59374 6.14735 1.59374 7.16707 1.59375 8.46795V8.53205C1.59374 9.83293 1.59374 10.8526 1.68139 11.6617C1.77084 12.4873 1.95665 13.1562 2.37161 13.7273C2.62282 14.0731 2.9269 14.3772 3.27267 14.6284C3.84381 15.0434 4.51275 15.2292 5.33834 15.3186C6.14734 15.4063 7.16703 15.4063 8.46788 15.4062H8.53207C9.83291 15.4063 10.8527 15.4063 11.6617 15.3186C12.4873 15.2292 13.1562 15.0434 13.7273 14.6284C14.0731 14.3772 14.3772 14.0731 14.6284 13.7273C15.0434 13.1562 15.2292 12.4873 15.3186 11.6617C15.4063 10.8527 15.4063 9.83297 15.4062 8.53212V8.46793C15.4063 7.16709 15.4063 6.14734 15.3186 5.33834C15.2292 4.51275 15.0434 3.84381 14.6284 3.27267C14.3772 2.9269 14.0731 2.62282 13.7273 2.37161C13.1562 1.95665 12.4873 1.77084 11.6617 1.68139ZM3.89719 3.23119C4.25702 2.96975 4.71759 2.81736 5.45278 2.73771C6.19791 2.65698 7.16014 2.65625 8.5 2.65625C9.83986 2.65625 10.8021 2.65698 11.5472 2.73771C12.2824 2.81736 12.743 2.96975 13.1028 3.23119C13.3584 3.41687 13.5831 3.64162 13.7688 3.89719C14.0302 4.25702 14.1826 4.71759 14.2623 5.45278C14.343 6.19791 14.3438 7.16014 14.3438 8.5C14.3438 9.83986 14.343 10.8021 14.2623 11.5472C14.1826 12.2824 14.0302 12.743 13.7688 13.1028C13.5831 13.3584 13.3584 13.5831 13.1028 13.7688C12.743 14.0302 12.2824 14.1826 11.5472 14.2623C10.8021 14.343 9.83986 14.3438 8.5 14.3438C7.16014 14.3438 6.19791 14.343 5.45278 14.2623C4.71759 14.1826 4.25702 14.0302 3.89719 13.7688C3.64162 13.5831 3.41687 13.3584 3.23119 13.1028C2.96975 12.743 2.81736 12.2824 2.73771 11.5472C2.65698 10.8021 2.65625 9.83986 2.65625 8.5C2.65625 7.16014 2.65698 6.19791 2.73771 5.45278C2.81736 4.71759 2.96975 4.25702 3.23119 3.89719C3.41687 3.64162 3.64162 3.41687 3.89719 3.23119Z" fill="#C7B299" />
                        </svg>
                        <span>
                            Подтверждаю свои данные и <a href="/privacy/" class="text_color">даю своё согласие на их обработку.</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal__item modal__success">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <div class="form">
                    <div class="form-head text_fz24 text_center">
                        <strong>Ваша заявка успешно отправлена</strong>
                    </div>
                    <p class="text_center">Мы свяжемся с вами в ближайшее время</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page__loading">
        <img src="<?=IMAGES_PATH?>logo-color.svg" alt="logo">
        <div class="page__loading-progress">
            <div class="dash">
                <span></span>
            </div>
            <div class="number text_fz24 text_fw700">0%</div>
        </div>
    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/custom.js"></script>
</body>
</html>
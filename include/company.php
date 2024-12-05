<?php
    $test = [
        'top',
        'top',
        'top',
        'bottom',
        'bottom',
        'center',
        'center'
    ];

    foreach($test as $key => $item) {
        ?>
        <section class="home__company page__block elem_animate top">
            <div class="container">
                <div class="home__company-text text_white">
                    <h2 class="page__title">О компании</h2>
                    <div class="text">
                        <p>Следует отметить, что базовый вектор развития однозначно определяет каждого участника как способного принимать собственные решения касаемо стандартных подходов.</p>
                        <p>Наше дело не так однозначно, как может показаться: реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для соответствующих условий активизации.</p>
                        <p>В своём стремлении улучшить пользовательский опыт мы упускаем, что явные признаки победы институционализации разоблачены.</p>
                        <p>Мы трепетно относимся к нашим изделиям, ведь у каждого из них своя история создания.</p>
                        <button class="btn color" data-call-modal="feedback">
                            <span class="text_white">Получить консультацию</span>
                            <img src="<?=IMAGES_PATH?>icons/consult.svg" alt="Получить консультацию">
                        </button>
                    </div>
                </div>
                <picture class="home__company-image <?=$item?>">
                    <img src="<?=IMAGES_PATH?>company<?=($key + 1)?>.png" alt="О компании">
                </picture>
            </div>
        </section>
        <?php
    }
?>
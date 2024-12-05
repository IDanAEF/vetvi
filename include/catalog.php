<section class="home__catalog page__block pt100">
    <img src="<?=IMAGES_PATH?>catalog-leaf1.png" alt="catalog-leaf1" class="leafs leaf1 elem_animate opacity">
    <img src="<?=IMAGES_PATH?>catalog-leaf2.png" alt="catalog-leaf2" class="leafs leaf2 elem_animate opacity">
    <div class="container">
        <?php if (!isset($hideTitle)) : ?>
            <h1 class="page__title text_animate">Каталог продукции</h1>
        <?php endif; ?>
        <div class="home__catalog-list text_fz40 text_ffPoi text_white">
            <?php
                $catalog = [
                    ['Люстры', IMAGES_PATH.'catalog-image1'],
                    ['Торшеры', IMAGES_PATH.'catalog-image2'],
                    ['Подвесы', IMAGES_PATH.'catalog-image3'],
                    ['Зеркала', IMAGES_PATH.'catalog-image4'],
                    ['Бра', IMAGES_PATH.'catalog-image5'],
                    ['Дверные <br>ручки', IMAGES_PATH.'catalog-image6'],
                    ['Декор', IMAGES_PATH.'catalog-image7'],
                    ['Мебель', IMAGES_PATH.'catalog-image8'],
                    ['Настольные <br>лампы', IMAGES_PATH.'catalog-image9'],
                ];

                $catalogBlocks = ceil(count($catalog) / 9);

                for ($block = 0; $block < $catalogBlocks; $block++) {
                    $multi = $block*9;
                    $count = 0;

                    for ($col = 1; $col <= 4; $col++) {
                        ?>
                        <div class="home__catalog-list-col col<?=$col?>">
                            <?php
                                $diff = $col == 3 ? 3 : 2;

                                for ($i = 0; $i < $diff; $i++) {
                                    $currInd = $count + $multi;

                                    if (isset($catalog[$currInd]) && $catalog[$currInd]) {
                                        ?>
                                        <a href="/catalog/section/" class="home__catalog-list-item item<?=($count+1)?> no-hover elem_animate top">
                                            <img src="<?=$catalog[$currInd][1]?>.jpg" alt="<?=$catalog[$currInd][0]?>" class="img_bg default">
                                            <img src="<?=$catalog[$currInd][1]?>-light.jpg" alt="<?=$catalog[$currInd][0]?>" class="img_bg light">

                                            <span><?=$catalog[$currInd][0]?></span>
                                        </a>
                                        <?php
                                    }
                                    $count++;
                                }
                            ?>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
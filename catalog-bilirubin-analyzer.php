<?php require 'blocks/header.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <?php require 'blocks/catalog-nav.php' ?>
        </div>

        <div class="col-md-8">
            <div class="catalog-info">
                <?php require 'blocks/catalog-title.php' ?>

                <h3>Анализатор билирубина</h3>

                <div class="catalog-block row">
                    <div class="col-md-4"><img class="catalog-img" src="style/img/catalog/analiz/1.png" alt=""></div>

                    <div class="col-md-8">
                        <!-- title -->
                        <h5>Bilimetrix-Система Bilistick  </h5>

                        <!-- id -->
                        <div id="catalog-bil1" class="catalog-text-shrink">
                            <p>
                                Система Bilistick - это инновационное диагностическое устройство, задуманное как тест Point Of Care для измерения общей концентрации билирубина в образцах цельной крови новорожденных. Он состоит из тест-полоски Bilistick, куда загружается небольшое количество крови, и Bilistick Reader, который анализирует образец и показывает результат.
                                <br>
                                <br>Благодаря простому методу, небольшому размеру и использованию считывающего устройства с батарейным питанием система Bilistick не требует наличия высококвалифицированного персонала или оборудования для анализа, что делает диагностику и мониторинг желтухи новорожденных простой практикой даже за пределами больницы. Например, во время домашнего наблюдения или в кабинете врача.
                            </p>
                        </div>

                        <!-- id -->
                        <button class="btn btn-primary" onclick="toggleItem('catalog-bil1')" id="show-more">Подробнее..</button>
                        <a href="contacts.php" class="ms-3">Связаться с нами</a><br>
                        <a href="#"><b>Подробнее на сайте производителя »</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require 'blocks/footer.php' ?>

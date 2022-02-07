<?php require 'blocks/header.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <?php require 'blocks/catalog-nav.php' ?>
        </div>

        <div class="col-md-8">
            <div class="catalog-info">
                <h4>ТОВАРЫ вы можете купить в НОВОМЕД</h4>

                <p>NOVOMED предоставляет следующие продукты LÖWENSTEIN medical, HAMILTON Medical, MEDIN, TSE и KLS Martin Group: электрохирургическое оборудование, хирургические лазерные системы, операционные и диагностические светильники, рабочие станции для анестезии, системы инкубаторов для новорожденных, аппараты ИВЛ, периферийные устройства, аксессуары и расходные материалы.</p>

                <img class="info-pic" src="https://images.unsplash.com/photo-1628771065518-0d82f1938462?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

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
                        <button class="btn btn-primary" onclick="toggleItem('catalog-bil1')" id="show-more">Подробнее..</button><br>
                        <a href="#"><b>More on the manufacturer's website »</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require 'blocks/footer.php' ?>

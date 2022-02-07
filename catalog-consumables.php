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

                <h3>Расходники</h3>

                <div class="catalog-block row">
                    <div class="col-md-4"><img class="catalog-img" src="style/img/catalog/rasxod/1.png" alt=""></div>

                    <div class="col-md-8">
                        <!-- title -->
                        <h5>Расходники RVENT</h5>

                        <!-- id -->
                        <div id="catalog-ras1" class="catalog-text-shrink">
                            <p>
                                <ul>
                                    <li>Маска для подачи газовых смесей различной модификации, размерами 0,1,2,3,4,5</li>
                                    <li>Закрытая аспирационная система R-Vent  на 24 и 72 часа</li>
                                    <li>Дыхательные системы R-Vent</li>
                                    <li>Aнестетические контура</li>
                                    <li>СPAP контура</li>
                                    <li>BPAP контура</li>
                                    <li>IPPB контура</li>
                                    <li>Контура домашней терапий</li>
                                    <li>Неонатальные контуры</li>
                                    <li>Специальные контура</li>
                                </ul>
                            </p>
                        </div>

                        <!-- id -->
                        <button class="btn btn-primary" onclick="toggleItem('catalog-ras1')" id="show-more">Подробнее..</button><br>
                        <a href="#"><b>More on the manufacturer's website »</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require 'blocks/footer.php' ?>

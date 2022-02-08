<?php require 'blocks/header.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <?php require 'blocks/catalog-nav.php' ?>
        </div>

        <div class="col-md-8">
            <div class="catalog-info">
                <?php require 'blocks/catalog-title.php' ?>

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

<?php require 'blocks/header.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <?php require 'blocks/catalog-nav.php' ?>
        </div>

        <div class="col-md-8">
            <div class="catalog-info">
                <?php require 'blocks/catalog-title.php' ?>

                <h3>Диагностика сна</h3>

                <div class="catalog-block row">
                    <div class="col-md-4"><img class="catalog-img" src="style/img/catalog/diagnSna/1.png" alt=""></div>

                    <div class="col-md-8">
                        <!-- title -->
                        <h5>Lоwenstein Medical SOMNOcheck micro CARDIO</h5>

                        <!-- id -->
                        <div id="catalog-d1" class="catalog-text-shrink">
                            <p>
                                <!-- text -->
                                Пока пациент спит, скрининговое устройство определяет нарушения дыхания во сне, сердечно-сосудистый риск и возбуждение.
                                <br>Быстро, просто и неинвазивно - SOMNOcheck micro CARDIO определяет помимо известных параметров AHI, индекса десатурации, индекса возбуждения, частоты пульса и храпа, теперь впервые, индекс кардио-риска (CRI). CRI предоставляет информацию о сердечно-сосудистом риске вашего пациента, имеющихся сердечно-легочных заболеваниях и возможных этапах диагностики. Анализы основаны на пульсоксиметрическом измерении пульсовой волны, с помощью которого можно определить аритмию и дыхание Чейна-Стокса. Изменения в кровеносных сосудах распознаются с помощью волнового анализа пульса (PWA) наряду с реактивностью вегетативной нервной системы и сердечным ритмом.
                            </p>
                        </div>

                        <!-- id -->
                        <button class="btn btn-primary" onclick="toggleItem('catalog-d1')" id="show-more">Подробнее..</button>
                        <a href="contacts.php" class="ms-3">Связаться с нами</a><br>
                        <a href="#"><b>Подробнее на сайте производителя »</b></a>
                    </div>
                </div>

                <div class="catalog-block row">
                    <div class="col-md-4"><img class="catalog-img" src="style/img/catalog/diagnSna/2.png" alt=""></div>

                    <div class="col-md-8">
                        <!-- title -->
                        <h5>Lоwenstein Medical Sonata</h5>

                        <!-- id -->
                        <div id="catalog-d2" class="catalog-text-shrink">
                            <p>
                                Sonata - это современная привлекательная система полисомнографии, основанная на критериях AASM, представляющая собой современное искусство с максимальной гибкостью и широким диапазоном характеристик.
                                <br>
                                <br>Благодаря 65 каналам, привлекательному дизайну, встроенным функциям Wi-Fi и гибкой сенсорной системе, приложениям и использованию он является идеальным партнером для полисомнографических исследований будущего.
                            </p>
                        </div>

                        <!-- id -->
                        <button class="btn btn-primary" onclick="toggleItem('catalog-d2')" id="show-more">Подробнее..</button>
                        <a href="contacts.php" class="ms-3">Связаться с нами</a><br>
                        <a href="#"><b>Подробнее на сайте производителя »</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require 'blocks/footer.php' ?>

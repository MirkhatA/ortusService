<?php require 'blocks/header.php' ?>

    <div class="container mt-4 a-about-section">
        <div class="row text-center">
            <h2 class="mb-4">О нас</h2>

            <div class="col-md-6 mb-4">
                <img src="style/img/about-main.png" alt="">
            </div>

            <div class="col-md-6 text-start a-about-text">
                <p class="mb-5">В настоящее время компания NOVOMEDKZ разделена на три основных подразделения:
                    подразделение медицинского оборудования по обоим направлениям: продажи и техническая поддержка, а
                    также подразделение по консультациям и планированию для проектов «под ключ».</p>
                <a href="#" class="main-btn">СВЯЖИТЕСЬ С НАМИ</a>
            </div>

            <h2 class="mb-3 mt-5">Наши услуги</h2>

            <div class="col-md-6 text-start a-about-text">
                <b class="fs-5">Список предоставляемых услуг</b>

                <ul class="mb-5 mt-4">
                    <li>Анестезия</li>
                    <li>Вентиляция</li>
                    <li>Системы управления газом</li>
                    <li>Мониторинг</li>
                    <li>Системы неонатальной помощи</li>
                    <li>Мастер класс</li>
                    <li>Домашняя терапия</li>
                </ul>

                <a href="#" class="main-btn">НАШИ ТОВАРЫ</a>
            </div>

            <div class="col-md-6 mb-4 mt-4">
                <img src="style/img/about-img-2.png" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contacts-block">
                    <img src="style/img/icons/phone-icon.png" alt="">
                    <div>
                        <p>Звоните нам :</p>
                        <p>+ 1 123 456 78 90</p>
                    </div>
                </div>
                <div class="col-md-4 contacts-block">
                    <img src="style/img/icons/location-icon.png" alt="">
                    <div>
                        <p>Улица Алихана Бокейханова, 27/1,</p>
                        <p>офис 1,  KZ-010000 Нур-Султан</p>
                        <p>Республика  Казахстан</p>
                    </div>
                </div>
                <div class="col-md-4 contacts-block">
                    <img src="style/img/icons/mail-icon.png" alt="">
                    <div>
                        <p>Почта:</p>
                        <p>email@sample</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mail">
        <div class="row">
            <div class="col-md-6">
                <section>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.1243866644327!2d71.42681228718834!3d51.08563712358501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586a6ac32c4c5%3A0x49797c2b62d4e48f!2sZhiloy%20Kompleks%20%22Venskiy%20Kvartal%22!5e0!3m2!1sen!2skz!4v1639466919340!5m2!1sen!2skz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section>
            </div>

            <div class="col-md-6 mail-section">
                <div class="container">
                    <form id="emailSend" method="POST">
                        <h3 class="sent-notification"></h3>

                        <h3>Напишите нам</h3>

                        <input type="text" id="name" name="name" placeholder="Ваше имя"> <br>
                        <input type="text" id="email" name="email" placeholder="Ваш e-mail"> <br>
                        <textarea name="body" id="body" cols="20" rows="7" placeholder="Сообщение"></textarea>

                        <button href="#" type="button" onclick="sendEmail() class="main-btn">Отправить</a>
                    </form>
                </div>
            </div>
        </div>
    </div>




<?php require 'blocks/footer.php' ?>
<?php require 'blocks/header.php' ?>
<?php

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    // submit form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = 'Ortus';
//    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $to = "contact.ortus.service@gmail.com";
    $body = "";

    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
//    $body .= "Phone number: " . $phone . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $messageSubject, $body);

    $message_sent = true;
}

?>

    <div class="container mt-4 a-about-section" xmlns="http://www.w3.org/1999/html">
        <div class="row text-center">
            <h2 class="mb-4">О нас</h2>

            <div class="col-md-6 mb-4">
                <img src="style/img/about.jpg" alt="">
            </div>

            <div class="col-md-6 text-start a-about-text">
                <p class="mb-5">ТОО ”Ortus Service” существует на рынке с 2012 года. Наша компания специализируется на
                    продаже и обслужвания медицинского оборудования. Все товары поставленные нами прошли все необходимые
                    меры проверки и они соблюдают всем необходимым требованиям и нормам.
                    В штате компаний работают высококвалифицированные cпециалисты которые отвечают за надежность
                    исполнения и качество оказаных услуг.
                    Офис находится в г.Нур-Султан.
                </p>
                <a href="#email-s" class="main-btn">СВЯЖИТЕСЬ С НАМИ</a>
            </div>

            <h2 class="mb-3 mt-5">Наши услуги</h2>

            <div class="col-md-6 text-start a-about-text">
                <b class="fs-5">Список предоставляемых услуг</b>

                <ul class="mb-5 mt-4">
                    <li>Анестезия</li>
                    <li>Вентиляция</li>
                    <li>Системы управления газом</li>
                    <li>Мониторинг</li>
                    <li>Неонатология</li>
                    <li>Мастер класс</li>
                    <li>Домашняя терапия</li>
                    <li>Монтаж,ремонт и сервисное обслуживание медицинского оборудования</li>
                </ul>


                <a href="catalog.php" class="main-btn">НАШИ ТОВАРЫ</a>
            </div>

            <div class="col-md-6 mb-4 mt-4">
                <img src="style/img/about-image-2.png" alt="">
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
                        <p>офис 1, KZ-010000 Нур-Султан</p>
                        <p>Республика Казахстан</p>
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

    <div class="container-fluid mail" id="email-s">
        <div class="row">
            <div class="col-md-6">
                <section>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.1243866644327!2d71.42681228718834!3d51.08563712358501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586a6ac32c4c5%3A0x49797c2b62d4e48f!2sZhiloy%20Kompleks%20%22Venskiy%20Kvartal%22!5e0!3m2!1sen!2skz!4v1639466919340!5m2!1sen!2skz"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section>
            </div>


            <div class="col-md-6 mail-section">
                <div class="container">
                    <?php if ($message_sent): ?>
                        <h3>Ваше сообщение успешно отправлено!</h3>
                    <?php else: ?>
                        <form action="about.php" id="emailSend" method="POST">
                            <h3 class="sent-notification"></h3>

                            <h3>Напишите нам</h3>

                            <input type="text" id="name" name="name" placeholder="Ваше имя"> <br>
                            <input type="text" id="email" name="email" placeholder="Ваш e-mail"> <br>
                            <textarea id="message" name="message" cols="20" rows="7" placeholder="Сообщение"></textarea>

                            <button class="main-btn" style="border: 0px" type="submit">Отправить</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php require 'blocks/footer.php' ?>
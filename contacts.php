<?php
require 'blocks/header.php';
?>

<?php

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    // submit form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = 'Ortus';
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $to = "contact.ortus.service@gmail.com";
    $body = "";

    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
    $body .= "Phone number: " . $phone . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $messageSubject, $body);

    $message_sent = true;
}

?>

<div class="container mt-4 a-about-section">

    <?php
    if ($message_sent):
    ?>
    <h1>Ваще сообщение успешно отправлено!</h1>

        <a href="index.php">Назад</a>
    <?php
    else:
    ?>

    <form action="contacts.php" method="post">
        <div class="row">
            <h2 class="mb-4">Свяжитесь с нами</h2>


            <div class="col-md-4">
                <input type="text" id="name" name="name" class="form-control mt-3" placeholder="Ваше имя"
                       aria-label="Username">
            </div>

            <div class="col-md-4">
                <input type="text" id="email" name="email" class="form-control mt-3" placeholder="Ваша почта"
                       aria-label="Username">
            </div>

            <div class="col-md-4">
                <input type="text" id="phone" name="phone" class="form-control mt-3" placeholder="Ваш номер"
                       aria-label="Username">
            </div>

            <div>
                    <textarea class="form-control mt-3" id="message" name="message" placeholder="Ваше сообщение"
                              rows="10"></textarea>
            </div>


        </div>
        <button type="submit" style="border: 0px; padding: 10px" class="main-btn mt-4">Отправить</button>
    </form>
    <?php
    endif;
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="script/app.js"></script>
<script src="script/sendEmail.js"></script>
<script src="script/itemDetails.js"></script>

</body>
</html>

<?php require 'blocks/header.php' ?>

<div class="container mt-4 a-about-section">
    <div class="row">
        <h2 class="mb-4">Свяжитесь с нами</h2>

        <div class="col-md-4">
            <input type="text" class="form-control mt-3" placeholder="Ваше имя" aria-label="Username">
        </div>

        <div class="col-md-4">
            <input type="text" class="form-control mt-3" placeholder="Ваша почта" aria-label="Username">
        </div>

        <div class="col-md-4">
            <input type="text" class="form-control mt-3" placeholder="Ваш номер" aria-label="Username">
        </div>
        
        <div>
            <textarea class="form-control mt-3" placeholder="Ваше сообщение" id="floatingTextarea" rows="10"></textarea>
        </div>


    </div>
    <button style="border: 0px; padding: 10px" class="main-btn mt-4">Отправить</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="script/app.js"></script>
<script src="script/sendEmail.js"></script>
<script src="script/itemDetails.js"></script>

</body>
</html>

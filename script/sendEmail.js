function sendEmail() {
    var name = $("#name")
    var email = $("#email")
    var body = $("#body")

    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)) {
        $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data: {
                name: name.val(),
                email: email.val(),
                body: body.val()
            }, success: function (response) {
                $('#emailSend')[0].reset();
                $('.sent-notification').text("Сообщение успешно отправлено!.");
            }
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val()=="") {
        caller.css('border', '1px solid red');
        return false;
    }
    else {
        caller.css('border', '1px solid green');
        return true;
    }
}
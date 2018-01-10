$(document).ready(function () {
    $("#login").click(function () {
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
            type: "POST",
            url: "get-data.php",
            data: "email=" + email + "&password=" + password,
            success: function (html) {
                if (html == 'true') {
                    window.location = "dashboard.php";
                }
                else {
                    $("#add_err").css('display', 'inline', 'important');
                    $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
                }
            },
            beforeSend: function () {
                $("#add_err").css('display', 'inline', 'important');
                $("#add_err").html("<img src='images/ajax-loader.gif' /> Loading.....")
            }
        });
        return false;
    });
});

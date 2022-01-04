$(document).ready(function() {
    $("#add_email").on("click", function(e) {
        var email = document.getElementById("email").value;

        $.ajax({
            type: 'POST',
            url: "{ { url('/test_email') }} ",

            data: {
                email: email
            },
            success: function(data) {
                alert(data);
            }
        });
    });
});
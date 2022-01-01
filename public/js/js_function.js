$(document).ready(function() {
    $("#add_email").on("click", function(e) {
        var email = document.getElementById("email").value;

        $.ajax({
            url: "{{url('/test_email')}}",
            type: 'POST',
            data: {
                email: email
            },
            success: function(data) {
                alert(data);
            }
        });
    });
});
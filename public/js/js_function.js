$(document).ready(function() {

    $("#add_email").on("click", function(e) {
        event.preventDefault();
        var email = document.getElementById("email").value;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/test_email ",
            type: 'POST',
            data: { email: email },

            success: function(data) {
                alert(data);
            }
        });
    });
});
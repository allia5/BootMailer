$(document).ready(function() {
    $("#add_email").on("click", function(e) {
        var email = document.getElementById("email").value;

        $.ajax({

            url: "{{ Route('hello.add') }} ",
            type: 'POST',


            success: function(data) {
                alert(data);
            }
        });
    });
});
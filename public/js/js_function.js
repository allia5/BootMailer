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
                //alert(JSON.stringify(data));
                document.getElementById('success').style.display = "block";
                document.getElementById('danger').style.display = "none";
                document.getElementById('success').innerHTML = JSON.stringify(data);
            },
            error: function(error) {
                // alert(JSON.stringify(error.responseText));
                document.getElementById('danger').style.display = "block";
                document.getElementById('success').style.display = "none";
                document.getElementById('danger').innerHTML = JSON.stringify(error.responseText);


            }
        });
    });
    $("#btn_riensialiser").on("click", function(e) {
        jour = document.getElementById("Riensialiser").value;
        $.ajax({
            url: "/riensialiser/data",
            type: 'POST',
            data: { jour: jour },
            success: function(data) {
                document.getElementById('success').style.display = "block";
                document.getElementById('danger').style.display = "none";
                document.getElementById('success').innerHTML = JSON.stringify(data);
            },
            error: function(error) {
                document.getElementById('danger').style.display = "block";
                document.getElementById('success').style.display = "none";
                document.getElementById('danger').innerHTML = JSON.stringify(error.responseText);

            }
        });
    });



});
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
        event.preventDefault();
        jour = document.getElementById("Riensialiser").value;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
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

    function get_statistique() {

        $.ajax({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/get_stat_of_data',
            type: 'GET',

            success: function(data) {
                alert(data);
                document.getElementById('card1').innerHTML = data[1];
                document.getElementById('card2').innerHTML = data[2];
                document.getElementById('card3').innerHTML = data[3];
            }
        });
    }

    get_statistique();


});
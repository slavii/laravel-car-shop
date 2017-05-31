$(document).ready(function () {
    setYears();

    $('#make').on('change', function () {
        var make = $('#make').val();

        if (make == '') {
            $("#model").html('');
            $("#model").append("<option>" + 'Модел' + "</option>");
            $('#model').prop("disabled", true);
            return 0;
        }


        $.ajax({
            url: '/loadmodels',
            method: 'POST',
            data: {
                'make': make,
                '_token': $('[name="_token"]').val()
            },
            success: function (response) {

                $("#model").html('');
                $("#model").append("<option>" + 'Модел' + "</option>");

                var array = JSON.parse(response);

                if (array.length == 0) {
                    $('#model').prop("disabled", true);
                    return 0;
                }

                $('#model').prop("disabled", false);

                var appendData = [];
                for (var i = 0; i < array.length; i++) {
                    appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
                }
                $("#model").append(appendData);
            }
        });
    });

    $('#submit').on('click', function (e) {

        $("#result").text('Поле -МАРКА- е задължително!');
        $("#result").removeClass('hidden');

        e.preventDefault();

        var form = document.getElementById('form');
        var request = new XMLHttpRequest();
        var formData = new FormData(form);

        request.open('post', '/addcar');
        request.addEventListener('load', transferComplete);
        request.send(formData);
    });

});

function transferComplete(data) {
    console.log(data.currentTarget.response);
}

function setYears(){
    var currentTime = new Date();
    var year = currentTime.getFullYear();

    for (var i = year; i >= 1900; i--) {
        $("#year").append("<option value='" + i + "'>" + i + "</option>");
    }
}
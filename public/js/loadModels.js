$(document).ready(function () {

    $('#make').on('change', function () {
        var make = $('#make').val();

        // if (make == '') {
        //     $("#model").html('');
        //     $("#model").append("<option>" + 'Модел' + "</option>");
        //     $('#model').prop("disabled", true);
        //     return 0;
        // }
    });

    $.ajax({
        url: '/loadmodels',
        method: 'POST',
        data: {
            'make': make,
            '_token': $('[name="_token"]').val()
        },
        success: function (response) {

            alert('TEST');

            // $("#model").html('');
            // $("#model").append("<option>" + 'Модел' + "</option>");
            //
            // var array = JSON.parse(response);
            //
            // if (array.length == 0) {
            //     $('#model').prop("disabled", true);
            //     return 0;
            // }
            //
            // $('#model').prop("disabled", false);
            //
            // var appendData = [];
            // for (var i = 0; i < array.length; i++) {
            //     appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
            // }
            // $("#model").append(appendData);
        }
    });
});
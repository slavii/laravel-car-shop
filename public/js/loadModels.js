$(document).ready(function () {
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
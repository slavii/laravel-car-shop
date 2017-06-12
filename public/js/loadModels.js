$(document).ready(function () {

    $.ajax({
        url: '/loadmodels',
        method: 'POST',
        data: {
            '_token': $('[name="_token"]').val()
        },
        success: function (response) {

            var array = JSON.parse(response);

            localStorage.setItem('models', JSON.stringify(array));
        }
    });

    $('#make').on('change', function () {
        var makeId = $('#make').val();

        updateModels(makeId);
    });
});

function updateModels(makeId) {
    if (makeId == '') {
        $('#model').prop("disabled", true);
        return 0;
    }

    var models = JSON.parse(localStorage.getItem('models'));
    var selectedModels = [];

    for (var i = 0; i < models.length; i++) {
        if (makeId == models[i].car_make_id) {
            selectedModels.push(models[i].name);
        }
    }

    $('#model').prop("disabled", false);
    $("#model").html('');
    $("#model").append("<option value=''>" + 'Модел' + "</option>");

    var appendData = [];
    for (i = 0; i < selectedModels.length; i++) {
        appendData += "<option value = '" + selectedModels[i] + "', class = 'newitem'>" + selectedModels[i] + " </option>";
    }
    $("#model").append(appendData);
}
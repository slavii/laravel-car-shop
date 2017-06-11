$(document).ready(function () {

    //     $.ajax({
    //         url: '/loadmodels',
    //         method: 'POST',
    //         data: {
    //             'make': make,
    //             '_token': $('[name="_token"]').val()
    //         },
    //         success: function (response) {
    //
    //             $("#model").html('');
    //             $("#model").append("<option>" + 'Модел' + "</option>");
    //
    //             var array = JSON.parse(response);
    //
    //             if (array.length == 0) {
    //                 $('#model').prop("disabled", true);
    //                 return 0;
    //             }
    //
    //             $('#model').prop("disabled", false);
    //
    //             var appendData = [];
    //             for (var i = 0; i < array.length; i++) {
    //                 appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
    //             }
    //             $("#model").append(appendData);
    //         }
    //     });
    // });

    $('#submit').on('click', function (e) {

        $("#result").append('Поле -МАРКА- е задължително!');
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

window.onmousedown = function (e) {
    var el = e.target;
    if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
        e.preventDefault();

        if (el.hasAttribute('selected')) el.removeAttribute('selected');
        else el.setAttribute('selected', '');

        var select = el.parentNode.cloneNode(true);
        el.parentNode.parentNode.replaceChild(select, el.parentNode);
    }
}
$(document).ready(function () {

    $('#submit').on('click', function (e) {

        $('#result').text('');
        $('#result').addClass('hidden');

        var make = $('#make').val();
        var model = $('#model').val();
        var condition = $('#condition').val();
        var price = $('#price').val();
        var year = $('#year').val();
        var fuel = $('#fuel').val();
        var power = $('#power').val();
        var gears = $('#gears').val();
        var body = $('#body').val();
        var color = $('#color').val();
        var mileage = $('#mileage').val();
        var region = $('#region').val();
        var doors = $('#doors').val();

        var makeText = $('#make option:selected').text();
        var modelText = $('#model option:selected').text();
        var conditionText = $('#condition option:selected').text();
        var priceText = 'Цена';
        var yearText = $('#year option:selected').text();
        var fuelText = $('#fuel option:selected').text();
        var powerText = 'Мощност';
        var gearsText = $('#gears option:selected').text();
        var bodyText = $('#body option:selected').text();
        var colorText = $('#color option:selected').text();
        var mileageText = 'Пробег';
        var regionText = $('#region option:selected').text();
        var doorsText = $('#doors option:selected').text();

        var formFields = [make, model, condition, price, year, fuel, power, gears, body, color, mileage, region, doors];
        var formFieldsText = [makeText, modelText, conditionText, priceText, yearText, fuelText, powerText, gearsText, bodyText, colorText, mileageText, regionText, doorsText];

        for (var i = 0; i < formFields.length; i++) {
            if (formFields[i] == '') {
                $('#result').append('Поле --' + formFieldsText[i] + '-- е задължително!<br>');
                $('#result').removeClass('hidden');
                return false;
            }
        }

        e.preventDefault();

        var form = document.getElementById('form');
        var request = new XMLHttpRequest();
        var formData = new FormData(form);

        request.open('post', '/addcar');
        request.addEventListener('load', transferComplete);
        request.send(formData);
    });

    $('#reset').on('click', function (e) {
        $('#equipments').find($('option')).attr('selected',false)

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
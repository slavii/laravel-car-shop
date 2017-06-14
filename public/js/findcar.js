$(document).ready(function () {

    $('#submit').on('click', function (e) {


    });


    $('#reset').on('click', function (e) {
        $('#equipments').find($('option')).attr('selected',false)

    });
});


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
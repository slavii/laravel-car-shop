$(document).ready(function () {

    var region = $('#region').text();
    var location = region.substr(8, region.length) + ", " + 'България';

    $.ajax({
        url: '/updateLocation',
        method: 'POST',
        data: {
            '_token': $('[name="_token"]').val(),
            location: location
        },
        success: function (response) {

            var coords = JSON.parse(response);

            initMap(coords['lat'], coords['lng']);
        }
    });

});

function initMap(lat, lng) {

    lat = lat || 43.2140504;
    lng = lng || 27.9147333;

    var uluru = {lat: lat, lng: lng};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
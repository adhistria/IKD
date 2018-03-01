$("#datarent").DataTable();
function myMap()
{
var myLatlng = new google.maps.LatLng(-1.6337918860204, 103.64822018);
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        mapTypeId: 'satellite'
    };
    var map = new google.maps.Map(document.getElementById('googleMap'),
        mapOptions);
    map.setMapTypeId('terrain');
    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat: -1.6337918860204, lng: 103.64822018}
    });
    marker.addListener('click', toggleBounce);
    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

}

L.mapbox.accessToken = 'pk.eyJ1IjoiYW50b2luZWYiLCJhIjoiY2lnYXphdDZ5MDNkeHdnbTQ0bWRxamF2eiJ9.DppLsFptyQhsvPlXVOuShw';
var map = L.mapbox.map('searchmap', 'mapbox.streets');

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   maxZoom:25,
   minZoom: 4,
   id: 'antoinef.o168ol31',
   accessToken: 'pk.eyJ1IjoiYW50b2luZWYiLCJhIjoiY2lnYXphdDZ5MDNkeHdnbTQ0bWRxamF2eiJ9.DppLsFptyQhsvPlXVOuShw'
}).addTo(map);

var geocoder = L.mapbox.geocoder('mapbox.places');
if(placeQuery !== ''){
  geocoder.query({query: placeQuery}, showMap);
}

function showMap(err, data) {
    if (data.lbounds) {
        map.fitBounds(data.lbounds);
    } else if (data.latlng) {
        map.setView([data.latlng[0], data.latlng[1]], 7);
    }
    var queryMarker = L.marker([data.latlng[0], data.latlng[1]]).addTo(map);
    queryMarker.bindPopup(placeQuery);
}

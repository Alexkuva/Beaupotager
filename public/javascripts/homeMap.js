var map = L.map('homemap',{scrollWheelZoom: false, doubleClickZoom: false, touchZoom: false}).setView([46.7, 2], 6);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> &copy; <a href=https://www.mapbox.com/about/maps/">Mapbox</a>',
   maxZoom:25,
   minZoom: 4,
   id: 'antoinef.o168ol31',
   accessToken: 'pk.eyJ1IjoiYW50b2luZWYiLCJhIjoiY2lnYXphdDZ5MDNkeHdnbTQ0bWRxamF2eiJ9.DppLsFptyQhsvPlXVOuShw'
}).addTo(map);

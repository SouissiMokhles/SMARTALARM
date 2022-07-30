//Variable de centralisation de la carte
var mn=[36.8115973, 10.0857632];
// Creation de la carte

var map=L.map('map').setView(mn, 9);

//Creation de la couche

L.tileLayer ('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  minZoom:9,
  maxZoom:19
}).addTo(map);

var wms=L.tileLayer.wms('http://localhost:8080/geoserver/Smart_alarm/wms', {
  layers: 'Smart_alarm:sitealarm',
  format: 'image/png',
  transparent:true,
  minZoom:9,
  maxZoom:19,
  version: '1.1.1'
}).addTo(map);

var wms=L.tileLayer.wms('http://localhost:8080/geoserver/Smart_alarm/wms', {
  layers: 'Smart_alarm:ShortestPath',
  format: 'image/png',
  transparent:true,
  minZoom:9,
  maxZoom:19,
  version: '1.1.1'
}).addTo(map);

ip="<?php echo $rev; ?>";

if (ip==0) {
  var popuppz = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.990863, 10.062363])
.setContent("lokza")
.openOn(map);
}
var north = L.control({position: "topright"});
north.onAdd = function(map) {
    var div = L.DomUtil.create("div", "info legend");
    div.innerHTML = '<img src="northarrow.png">';
    return div;
}
north.addTo(map);

map.setMaxBounds(map.getBounds());
L.control.scale().addTo(map);
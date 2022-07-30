<!DOCTYPE html>
<html>
<head>
  <title> SMART ALARM </title>
  <meta http-equiv="refresh" content = "50" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>

<?php
ini_set('max_execution_time', 1000);
//Manouba SA
$msGEstr = exec("ping -n 1 -w 600 10.2.1.1", $resmsge, $rev1);
$MSGE = substr($resmsge[5], 46);
$msALTEKstr= exec ("ping -n 1 -w 600 10.2.1.3",$resmsaltek,$rev2);
$MSALTEK = substr($resmsaltek[5], 46);
//MN Centre
$mncGEstr= exec ("ping -n 1 -w 600 10.2.2.1",$resmncge,$rev3);
$MNCGE = substr($resmncge[5], 46);
$mncaltekstr= exec ("ping -n 1 -w 600 10.2.2.2",$resmncaltek,$rev4);
$MSALTEK = substr($resmncaltek[5], 46);
//DENDEN
$ddgestr= exec ("ping -n 1 -w 600 10.2.3.1",$resddge,$rev5);
$DDGE = substr($resddge[5], 46);
$ddaltekstr= exec ("ping -n 1 -w 600 10.2.3.2",$resddaltek,$rev6);
$DDALTEK = substr($resddaltek[5], 46);
//Daouar HICHER
$dhgestr= exec ("ping -n 1 -w 600 10.2.4.1",$resdhge,$rev7);
$DHGE= substr($resdhge[5], 46);
$dhaltekstr= exec ("ping -n 1 -w 600 10.2.4.2",$resdhaltek,$rev8);
$DHALTEK= substr($resdhaltek[5], 46);
//OL Ennajet
$olngestr= exec ("ping -n 1 -w 600 10.2.5.1",$resolnge,$rev9);
$OLNGE = substr($resolnge[5], 46);
$olnaltekstr= exec ("ping -n 1 -w 600 10.2.5.2",$resolnaltek,$rev10);
$OLNALTEK = substr($resolnaltek[5], 46);
//BEJAOUA
$bjgestr= exec ("ping -n 1 -w 600 10.2.6.1",$resbjge,$rev11);
$BJGE = substr($resbjge[5], 46);
$bjaltekstr= exec ("ping -n 1 -w 600 10.2.6.2",$resbjaltek,$rev12);
$BJALTEK = substr($resbjaltek[5], 46);
//ETTADHAMEN
$ettgestr= exec ("ping -n 1 -w 600 10.2.7.1",$resettge,$rev13);
$ETTGE = substr($resettge[5], 46);
$msaltekstr= exec ("ping -n 1 -w 600 10.2.7.3",$resettaltek,$rev14);
$ETTALTEK = substr($resettaltek[5], 46);
//MNIHLA
$mngestr= exec ("ping -n 1 -w 600 10.2.8.1",$resmnge,$rev15);
$MNGE = substr($resmnge[5], 46);
$mnaltekstr= exec ("ping -n 1 -w 600 10.2.8.2",$resmnaltek,$rev16);
$MNALTEK = substr($resmnaltek[5], 46);
//C B AMMAR
$cbagestr= exec ("ping -n 1 -w 600 10.2.9.1",$rescbage,$rev17);
$CBAGE = substr($rescbage[5], 46);
$cbealtekstr= exec ("ping -n 1 -w 600 10.2.9.2",$rescbaaltek,$rev18);
$CBAALTEK = substr($rescbaaltek[5], 46);
//Sidi Thabet
$stgestr= exec ("ping -n 1 -w 600 10.2.10.1",$resstge,$rev20);
$STGE = substr($resstge[5], 46);
$staltekstr= exec ("ping -n 1 -w 600 10.2.10.2",$resstaltek,$rev21);
$STALTEK = substr($resstaltek[5], 46);
//pont de bizert
$pbgestr= exec ("ping -n 1 -w 600 10.2.11.1",$respbge,$rev22);
$PBGE = substr($respbge[5], 46);
$pbaltekstr= exec ("ping -n 1 -w 600 10.2.11.2",$respbaltek,$rev24);
$PBALTEK = substr($respbaltek[5], 46);
// Kalaat Andalous
$kagestr= exec ("ping -n 1 -w 600 10.2.12.1",$reskage,$rev25);
$KAGE = substr($reskage[5], 46);
$kaaltekstr= exec ("ping -n 1 -w 600 10.2.12.2",$reskaaltek,$rev26);
$KAALTEK = substr($reskaaltek[5], 46);
//Borj el Amri
$bagestr= exec ("ping -n 1 -w 600 10.2.13.1",$resbage,$rev27);
$BAGE = substr($resbage[5], 46);
$baaltekstr= exec ("ping -n 1 -w 600 10.2.13.2",$resbaaltek,$rev28);
$BAALTEK = substr($resbaaltek[5], 46);
//Mornagia
$mgestr= exec ("ping -n 1 -w 600 10.2.14.1",$resmge,$rev29);
$MGE = substr($resmge[5], 46);
$maltekstr= exec ("ping -n 1 -w 600 10.2.14.2",$resmaltek,$rev30);
$MALTEK = substr($resmaltek[5], 46);
//Oued Ellil
$olgestr= exec ("ping -n 1 -w 600 10.2.15.1",$resolge,$rev31);
$OLGE = substr($resolge[5], 46);
$olaltekstr= exec ("ping 10.2.15.2",$resolaltek,$rev32);
$OLALTEK = substr($resolaltek[5], 46);
//TEBOURBA
$tgestr= exec ("ping -n 1 -w 600 10.2.16.1",$restge,$rev33);
$TGE = substr($restge[5], 46);
$tgaltekstr= exec ("ping -n 1 -w 600 10.2.16.3",$restaltek,$rev34);
$TALTEK = substr($restaltek[5], 46);
//BATHAN
$bgestr= exec ("ping -n 1 -w 600 10.2.17.1",$resbge,$rev35);
$BGE = substr($resbge[5], 46);
$baltekstr= exec ("ping -n 1 -w 600 10.2.17.2",$resbaltek,$rev36);
$BALTEK = substr($resbaltek[5], 46);
//JEDEIDA
$jgestr= exec ("ping -n 1 -w 600 10.2.18.1",$resjge,$rev37);
$JGE = substr($resjge[5], 46);
$jaltekstr= exec ("ping -n 1 -w 600 10.2.18.2",$resjaltek,$rev38);
$JALTEK = substr($resjaltek[5], 46);
//EL FEJJA
$efgestr= exec ("ping -n 1 -w 600 10.2.19.1",$resefge,$rev39);
$EFGE = substr($resefge[5], 46);
$efaltekstr= exec ("ping -n 1 -w 600 10.2.19.2",$resefaltek,$rev40);
$EFALTEK = substr($resefaltek[5], 46);
//DKILLA VILLAGE
$dkgestr= exec ("ping -n 1 -w 600 10.2.20.1",$resdkge,$rev41);
$DKGE = substr($resdkge[5], 46);
$dkaltekstr= exec ("ping -n 1 -w 600 10.2.20.2",$resdkaltek,$rev42);
$DKALTEK = substr($resdkaltek[5], 46);
//HABIBA
$hgestr= exec ("ping -n 1 -w 600 10.2.24.1",$reshge,$rev43);
$HGE = substr($reshge[5], 46);
$haltekstr= exec ("ping -n 1 -w 600 10.2.24.5",$reshaltek,$rev44);
$HALTEK = substr($reshaltek[5], 46);
//CHAOUAT
$cgestr= exec ("ping -n 1 -w 600 10.2.26.4",$rescge,$rev45);
$CGE = substr($rescge[5], 46);
?>
<script type="text/javascript">
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
  
var popuppz = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.990863, 10.062363])
if ("<?php echo $PBGE[1]; ?>"!=0) {
popuppz.setContent("Pane electrogene"),
popuppz.openOn(map) }
else  if ("<?php echo $respbaltek[1]; ?>"!=0) {
popuppz.setContent("Pane d'énergie")
popuppz.openOn(map)}
else if (("<?php echo $respbge[1];?>") && ("<?php echo $respbaltek[1];?>")!=0) {
popuppz.setContent("Pane electrogene et énergie")	
popuppz.openOn(map)}


var popupka = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([37.058221, 10.109707])
if ("<?php echo $KAGE[1]; ?>"!=0) {
popupka.setContent("Pane electrogene")
popupka.openOn(map)}
else  if ("<?php echo $KAALTEK[1]; ?>"!=0) {
popupka.setContent("Pane d'énergie")
popupka.openOn(map)}
else if (("<?php echo $KAALTEK[1];?>") && ("<?php echo $KAGE[1];?>")!=0) {
popupka.setContent("Pane electrogene et énergie")
popupka.openOn(map)}

var popupst = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.907749, 10.041713])
if ("<?php echo $STGE[1]; ?>"!=0) {
popupst.setContent("Pane electrogene")
popupst.openOn(map)}
else  if ("<?php echo $STALTEK[1]; ?>"!=0) {
popupst.setContent("Pane d'énergie")
popupst.openOn(map)}
else if (("<?php echo $STGE[1];?>") && ("<?php echo $STALTEK[1];?>")!=0) {
popupst.setContent("Pane electrogene et énergie")
popupst.openOn(map)}


var popupmn = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.850793, 10.103334])
if ("<?php echo $MNGE[1]; ?>"!=0) {
popupmn.setContent("Pane electrogene")
popupmn.openOn(map)}
else  if ("<?php echo $MNALTEK[1]; ?>"!=0) {
popupmn.setContent("Pane d'énergie")
popupmn.openOn(map)}
else if (("<?php echo $MNGE[1];?>") && ("<?php echo $MNALTEK[1];?>")!=0) {
popupmn.setContent("Pane electrogene et énergie")
popupmn.openOn(map)}


var popupcba = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.911936, 10.103334])
if ("<?php echo $CBAGE[1]; ?>"!=0) {
popupcba.setContent("Pane electrogene")
popupcba.openOn(map)}
else  if ("<?php echo $CBAALTEK[1]; ?>"!=0) {
popupcba.setContent("Pane d'énergie")
popupcba.openOn(map)}
else if (("<?php echo $CBAGE[1];?>") && ("<?php echo $CBAALTEK[1];?>")!=0) {
popupcba.setContent("Pane electrogene et énergie")
popupcba.openOn(map)}


var popupbj = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.855626, 10.0076497])
if ("<?php echo $BJGE[1]; ?>"!=0) {
popupbj.setContent("Pane electrogene")
popupbj.openOn(map)}
else  if ("<?php echo $BJALTEK[1]; ?>"!=0) {
popupbj.setContent("Pane d'énergie")
popupbj.openOn(map)}
else if (("<?php echo $BJGE[1];?>") && ("<?php echo $BJALTEK[1];?>")!=0) {
popupbj.setContent("Pane electrogene et énergie")
popupbj.openOn(map)}

var popupoln = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.840492, 10.040308])
if ("<?php echo $OLNGE[1]; ?>"!=0) {
popupoln.setContent("Pane electrogene")
popupoln.openOn(map)}
else  if ("<?php echo $OLNALTEK[1]; ?>"!=0) {
popupoln.setContent("Pane d'énergie")
popupoln.openOn(map)}
else if (("<?php echo $OLNGE[1];?>") && ("<?php echo $OLNALTEK[1];?>")!=0) {
popupoln.setContent("Pane electrogene et énergie")
popupoln.openOn(map)}

var popupol = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.831508, 10.040351])
if ("<?php echo $OLGE[1]; ?>"!=0) {
popupol.setContent("Pane electrogene")
popupol.openOn(map)}
else  if ("<?php echo $OLALTEK[1]; ?>"!=0) {
popupol.setContent("Pane d'énergie")
popupol.openOn(map)}
else if (("<?php echo $OLGE[1];?>") && ("<?php echo $OLALTEK[1];?>")!=0) {
popupol.setContent("Pane electrogene et énergie")
popupol.openOn(map)}

var popupdh = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.826364, 10.079336])
if ("<?php echo $DHGE[1]; ?>"!=0) {
popupdh.setContent("Pane electrogene")
popupdh.openOn(map)}
else  if ("<?php echo $DHALTEK[1]; ?>"!=0) {
popupdh.setContent("Pane d'énergie")
popupdh.openOn(map)}
else if (("<?php echo $DHGE[1];?>") && ("<?php echo $DHALTEK[1];?>")!=0) {
popupdh.setContent("Pane electrogene et énergie")
popupdh.openOn(map)}

var popupett= L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.827347, 10.105968])
if ("<?php echo $ETTGE[1]; ?>"!=0) {
popupett.setContent("Pane electrogene")
popupett.openOn(map)}
else  if ("<?php echo $ETTALTEK[1]; ?>"!=0) {
popupett.setContent("Pane d'énergie")
popupett.openOn(map)}
else if (("<?php echo $ETTGE[1];?>") && ("<?php echo $ETTALTEK[1];?>")!=0) {
popupett.setContent("Pane electrogene et énergie")
popupett.openOn(map)}

var popupms = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.805892, 10.085932])
if ("<?php echo $MSGE[1]; ?>"!=0) {
popupdh.setContent("Pane electrogene")
popupdd.openOn(map)}
else  if ("<?php echo $MSALTEK[1]; ?>"!=0) {
popupms.setContent("Pane d'énergie")
popupdd.openOn(map)}
else if (("<?php echo $MSGE[1];?>") && ("<?php echo $MSALTEK[1];?>")!=0) {
popupms.setContent("Pane electrogene et énergie")
popupms.openOn(map)}

var popupdd = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.801474, 10.110104])
if ("<?php echo $DDGE[1]; ?>"!=0) {
popupdd.setContent("Pane electrogene")
popupdd.openOn(map)}
else  if ("<?php echo $DDALTEK[1]; ?>"!=0) {
popupdd.setContent("Pane d'énergie")
popupdd.openOn(map)}
else if (("<?php echo $DDGE[1];?>") && ("<?php echo $DDALTEK[1];?>")!=0) {
popupdd.setContent("Pane electrogene et énergie")
popupdd.openOn(map)}

var popupm = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.758298, 10.019738])
if ("<?php echo $MGE[1]; ?>"!=0) {
popupm.setContent("Pane electrogene")
popupm.openOn(map)}
else  if ("<?php echo $MALTEK[1]; ?>"!=0) {
popupm.setContent("Pane d'énergie")
popupm.openOn(map)}
else if (("<?php echo $MGE[1];?>") && ("<?php echo $MALTEK[1];?>")!=0) {
popupm.setContent("Pane electrogene et énergie")
popupm.openOn(map)}

var popupef = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.684901, 9.95202])
if ("<?php echo $EFGE[1]; ?>"!=0) {
popupef.setContent("Pane electrogene")
popupm.openOn(map)}
else  if ("<?php echo $EFALTEK[1]; ?>"!=0) {
popupef.setContent("Pane d'énergie")
popupm.openOn(map)}
else if (("<?php echo $EFGE[1];?>") && ("<?php echo $EFALTEK[1];?>")!=0) {
popupef.setContent("Pane electrogene et énergie")
popupef.openOn(map)}

var popupba = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.711373, 9.883345])
if ("<?php echo $BAGE[1]; ?>"!=0) {
popupb.setContent("Pane electrogene")
popupb.openOn(map)}
else  if ("<?php echo $BAALTEK[1]; ?>"!=0) {
popupb.setContent("Pane d'énergie")
popupb.openOn(map)}
else if (("<?php echo $BAGE[1];?>") && ("<?php echo $BALTEK[1];?>")!=0) {
popupb.setContent("Pane electrogene et énergie")
popupb.openOn(map)}

var popuph = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.813524, 9.943646])
if ("<?php echo $HGE[1]; ?>"!=0) {
popuph.setContent("Pane electrogene")
popuph.openOn(map)}
else  if ("<?php echo $HALTEK[1]; ?>"!=0) {
popuph.setContent("Pane d'énergie")
popuph.openOn(map)}
else if (("<?php echo $HGE[1];?>") && ("<?php echo $HALTEK[1];?>")!=0) {
popuph.setContent("Pane electrogene et énergie")
popuph.openOn(map)}

var popupb = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.805924, 9.847017])
if ("<?php echo $BGE[1]; ?>"!=0) {
popupb.setContent("Pane electrogene")
popupb.openOn(map)}
else  if ("<?php echo $BALTEK[1]; ?>"!=0) {
popuph.setContent("Pane d'énergie")
popupb.openOn(map)}
else if (("<?php echo $BGE[1];?>") && ("<?php echo $BALTEK[1];?>")!=0) {
popupb.setContent("Pane electrogene et énergie")
popupb.openOn(map)}

var popupj = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.849668, 9.936466])
if ("<?php echo $JGE[1]; ?>"!=0) {
popupj.setContent("Pane electrogene")
popupj.openOn(map)}
else  if ("<?php echo $JALTEK[1]; ?>"!=0) {
popupj.setContent("Pane d'énergie")
popupj.openOn(map)}
else if (("<?php echo $JGE[1];?>") && ("<?php echo $JALTEK[1];?>")!=0) {
popupj.setContent("Pane electrogene et énergie")
popupj.openOn(map)}

var popupc = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.888468, 9.942911])
if ("<?php echo $CGE[1]; ?>"!=0) {
popupc.setContent("Pane electrogene") 
popupc.openOn(map)}

var popupt = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.827826, 9.844343])
if ("<?php echo $TGE[1]; ?>"!=0) {
popupt.setContent("Pane electrogene")
popupt.openOn(map)}
else  if ("<?php echo $TALTEK[1]; ?>"!=0) {
popupt.setContent("Pane d'énergie")
popupt.openOn(map)}
else if (("<?php echo $TGE[1];?>") && ("<?php echo $TALTEK[1];?>")!=0) {
popupt.setContent("Pane electrogene et énergie")
popupt.openOn(map)}

var popupdk = L.popup({
  closeButton: true,
  autoClose: false
})
.setLatLng([36.86521, 9.708572])
if ("<?php echo $DKGE[1]; ?>"!=0) {
popupdk.setContent("Pane electrogene")
popupt.openOn(map)}
else  if ("<?php echo $DKALTEK[1]; ?>"!=0) {
popupdk.setContent("Pane d'énergie")
popupt.openOn(map)}
else if (("<?php echo $DKGE[1];?>") && ("<?php echo $DKALTEK[1];?>")!=0) {
popupdk.setContent("Pane electrogene et énergie")
popupdk.openOn(map)}

var north = L.control({position: "topright"});
north.onAdd = function(map) {
    var div = L.DomUtil.create("div", "info legend");
    div.innerHTML = '<img src="northarrow.png">';
    return div;
}
north.addTo(map);

map.setMaxBounds(map.getBounds());
L.control.scale().addTo(map);
</script>

   </body>
    </html>

$(document).ready(function () {

  var mapRBI = L.esri.dynamicMapLayer({
    url: 'https://portal.ina-sdi.or.id/arcgis/rest/services/IGD/RupabumiIndonesia/MapServer',
    opacity: 1
  });
  
  /* OSM */
  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  var osmMap = L.tileLayer(osmUrl, {name:'osm'});

  var map = L.map('map', {
    layers: osmMap,
    center: [-1.173535, 118.446550],
    zoom: 4
  });

  L.control.scale().addTo(map);

  /* CITRA */
  var citra_layer = L.layerGroup();
  map.createPane('jawa');
  var csrt = L.esri.imageMapLayer({
    url: 'http://portal.ina-sdi.or.id/arcgis/rest/services/CITRASATELIT/JawaBaliNusra_2015_ImgServ1/ImageServer',
    pane: 'jawa',
    opacity: 0.9,
    maxZoom: 19
  });
  csrt.addTo(citra_layer);
  var csrt_kal = L.esri.imageMapLayer({
    url: 'http://portal.ina-sdi.or.id/arcgis/rest/services/CITRASATELIT/Kalimantan_2015/ImageServer',
    pane: 'jawa',
    opacity: 0.9,
    maxZoom: 19
  });
  csrt_kal.addTo(citra_layer);

  var baseLayers = {
    "Open Street Map": osmMap,
    "Rupabumi Indonesia": mapRBI
  };

  var citra = {
    "Citra Satelit": citra_layer
  };

  L.control.layers(baseLayers, citra).addTo(map);

  $('#modal-default').on('shown.bs.modal', function(){
    setTimeout(function() {
      map.invalidateSize();
    }, 10);
  });

  var drawnItems = new L.FeatureGroup();

  map.addLayer(drawnItems);

  var drawControl = new L.Control.Draw({
    edit: {
      featureGroup: drawnItems
    },
    draw: {
      polyline: false,
      circle: false,
      marker: false
    }
  });

  map.addControl(drawControl);

  map.on(L.Draw.Event.CREATED, function (e) {
    var type = e.layerType
    var layer = e.layer;

    console.log(type);

    if (type === 'rectangle') {
      layer.on('mouseover', function() {

          var x = layer.getLatLngs();
          var koordinat = JSON.stringify(x);
          var a = JSON.parse(koordinat);

          var lat = [];
          var long = [];

          for(var i = a[0].length - 1; i >= 0; i--){
            console.log(a[0][i].lat);
            lat.push(JSON.parse("[" + a[0][i].lat + "]"));
            long.push(JSON.parse("[" + a[0][i].lng + "]"));
          }

          console.log(lat);
          console.log(long);

          document.getElementById("L").value = a[0].length;

          document.getElementById("PolLat").value = lat;
          document.getElementById("PolLng").value = long;

      });
    }

    else if(type === 'polygon'){
      layer.on('mouseover', function(){

        var x = layer.getLatLngs();
        var koordinat = JSON.stringify(x);
        var a = JSON.parse(koordinat);

        console.log(a);

        var lat = [];
        var long = [];

        for(var i = a[0].length - 1; i >= 0; i--){
          console.log(a[0][i].lat);
          lat.push(JSON.parse("[" + a[0][i].lat + "]"));
          long.push(JSON.parse("[" + a[0][i].lng + "]"));
        }

        console.log(lat);
        console.log(long);

        document.getElementById("L").value = a[0].length;

        document.getElementById("PolLat").value = lat;
        document.getElementById("PolLng").value = long;

      });
    }

    drawnItems.addLayer(layer);
  });
});
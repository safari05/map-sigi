$(document).ready(function () {

  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  var mapRBI = L.esri.dynamicMapLayer({
    url: 'https://portal.ina-sdi.or.id/arcgis/rest/services/IGD/RupabumiIndonesia/MapServer',
    opacity: 1
  });

  var map = L.map('map', {
    layers: mapRBI,
    center: [-1.173535, 118.446550],
    zoom: 5
  });

  var citra_layer = L.layerGroup();
  map.createPane('jawa');
  var csrt = L.esri.imageMapLayer({
    url: 'http://portal.ina-sdi.or.id/arcgis/rest/services/CITRASATELIT/JawaBaliNusra_2015_ImgServ1/ImageServer',
    pane: 'jawa',
    opacity: 0.8,
    maxZoom: 19
  });
  csrt.addTo(citra_layer);
  var csrt_kal = L.esri.imageMapLayer({
    url: 'http://portal.ina-sdi.or.id/arcgis/rest/services/CITRASATELIT/Kalimantan_2015/ImageServer',
    pane: 'jawa',
    opacity: 0.8,
    maxZoom: 19
  });
  csrt_kal.addTo(citra_layer);
                           
  var osmMap = L.tileLayer(osmUrl, {name:'osm'});

  L.control.scale().addTo(map);

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
        rectangle: false,
        polygon: false
      },
      position: 'topright'
    });

    map.addControl(drawControl);

    map.on(L.Draw.Event.CREATED, function (e) {
      var type = e.layerType
      var layer = e.layer;

      map.addLayer(layer);

      if (type === 'marker') {    
        var x = layer.getLatLng();
        var koordinat = JSON.stringify(x);
        var a = JSON.parse(koordinat);

        $('#koordinat')[0].reset();

        $( "#lderajat" ).prop( "disabled", true );
        $( "#lmenit" ).prop( "disabled", true );
        $( "#ldetik" ).prop( "disabled", true );
        $( "#bderajat" ).prop( "disabled", true );
        $( "#bmenit" ).prop( "disabled", true );
        $( "#bdetik" ).prop( "disabled", true );
        $( "#bujur" ).prop( "disabled", true );
        $( "#lintang" ).prop( "disabled", true );

        $( "#longitude1" ).prop( "disabled", false );
        $( "#latitude1" ).prop( "disabled", false );

        $( "#DMD" ).prop( "disabled", true );
        $('#DMD').prop('checked', false); 

        $('#XY').prop('checked', true); 
        $( "#XY" ).prop( "disabled", false );
        
        document.getElementById("latitude1").value = a.lat;
        document.getElementById("longitude1").value = a.lng;
        
      }

      drawnItems.addLayer(layer);
    });

    var mapControlsContainer = document.getElementsByClassName("leaflet-control")[0];
    var logoContainer = document.getElementById("logoContainer");
    mapControlsContainer.appendChild(logoContainer);

});
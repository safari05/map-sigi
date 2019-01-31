$(function () {
	var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
       esriUrl = 'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
       terrainUrl ='http://a.tile.stamen.com/terrain/{z}/{x}/{y}.png';
       
                    
    var osmMap = L.tileLayer(osmUrl, {name:'osm'}),
       esriMap = L.tileLayer(esriUrl, {name:'esri'}),
       terrainMap = L.tileLayer(terrainUrl, {name:'terrain'});

    var map = L.map('map', {
      layers: esriMap,
      center: [-1.173535, 118.446550],
      zoom: 4
    });

    var baseLayers = {
      "Map": esriMap,
      "Street": osmMap,
      "Terrain": terrainMap
    };

    L.control.layers(baseLayers).addTo(map);

    map.on('dblclick', function(e) {
    	document.getElementById("latitude").value = e.latlng.lat;
    	document.getElementById("longitude").value = e.latlng.lng;

    	document.getElementById("modal_long").value = e.latlng.lng;
    	document.getElementById("modal_lat").value = e.latlng.lat;
	  });

    $('#modal-default').on('shown.bs.modal', function(){
      setTimeout(function() {
        map.invalidateSize();
      }, 10);
    });
});